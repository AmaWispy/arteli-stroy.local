<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{
    const CONVERT_TYPES = ["image/jpeg", "image/bmp", "image/webp", 'image/png'];
    const IMAGE_QUALITY = 75;
    const IMAGE_THUMB_WIDTH = 300;
    const IMAGE_WIDTH = 900;
    const IMAGE_EXT = '.webp';
    private static $media_path = "img";

    public function open(Request $request)
    {
        $path = $request->path;
        $dir = self::$media_path . $path;

        $this->checkPathValidity($dir);

        $data = [];

        if ($resource = opendir($dir)) {
            while (($file = readdir($resource)) !== false) {
                if ($file === "." || $file === "..") {
                    continue;
                }

                $file_path = $dir . $file;
                if (is_dir($file_path)) {
                    $data[] = [
                        "type" => "folder",
                        "name" => $file,
                        "path" => $path . $file . "/"
                    ];

                    continue;
                }

                if (substr(mime_content_type($file_path), 0, 5) === "image") {

                    $data[] = [
                        "type" => "image",
                        "name" => $file,
                        "size" => filesize($file_path),
                        "path" => $path . $file
                    ];

                    continue;
                }

                $data[] = [
                    "type" => "file",
                    "name" => $file,
                    "size" => filesize($file_path)
                ];
            }
        }

        return response()->json($data);
    }

    private function checkPathValidity($path)
    {
        if (!is_dir($path)) {
            return response()->json('This folder does not exist');
        }
    }

    public function load(Request $request)
    {
        $path = $request->path;
        $thumb = $request->thumbnail;
        $quality = $request->quality;
        $width = $request->width;
        $file = $request->file('file');

        $dir = self::$media_path . $path;

        self::checkPathValidity($dir);

        $mimeType = $file->getClientMimeType();

        $extArray = array("jpeg", "bmp", "webp");
        foreach ($extArray as $ext) {
            if (str_contains($mimeType, $ext)) {
                $name = explode('.', $file->getClientOriginalName())[0];
                $extension = ".webp";
                $image = Image::make($file);

                if ($width) {
                    $image->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }

                $image->save($dir . $name . $extension, $quality);

                if ($thumb === "on") {
                    $image = Image::make($file)->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $image->save($dir . $name . "-300x" . $extension);
                }

                return response()->json("Success");
            }
        }

        $name = $file->getClientOriginalName();
        move_uploaded_file($file->getRealPath(), $dir . $name);

        return response()->json("Success");
    }

    public function createFolder(Request $request)
    {
        $path = $request->path;
        $name = $request->name;

        $dir = self::$media_path . $path;

        $this->checkPathValidity($dir);

        $new_folder_path = $dir . $name;
        if (!file_exists($new_folder_path)) {
            mkdir($new_folder_path, 0777, true);
        }

        return response()->json("Success");
    }

    public function delete(Request $request)
    {
        $path = $request->path;
        $name = $request->name;

        $dir = self::$media_path . $path;

        $this->checkPathValidity($dir);

        $full_path = $dir . $name;
        if (!file_exists($full_path)) {
            return response()->json("File does not exist");
        }

        if (!is_dir($full_path)) {
            if (unlink($full_path)) {
                return response()->json("Success");
            }
        } else {
            if (self::delTree($full_path)) {
                return response()->json("Success");
            }
        }

        return response()->json("Unknown error");
    }

    private function delTree($dir)
    {

        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {

            (is_dir("$dir/$file")) ? self::delTree("$dir/$file") : unlink("$dir/$file");
        }

        return rmdir($dir);
    }

    public function ada(Request $request)
    {
        $articles = Article::all();

        $replacementWork = '<div class="how-working">
<h2 class="how-working__title w-100 t-center">Как мы работаем</h2>
<div class="how-working__item how-working__after"><img src="/img/interface/requisition.webp" alt="смета" class="how-working__icon">
<h3 class="how-working__subtitle">Оставляете заявку</h3>
<div class="how-working__text">Мы с Вами связываемся и даем Вам бесплатную консультацию</div>
<button class="button modal-application__open">Оставить заявку</button></div>
<div class="how-working__item"><img src="/img/interface/exit.png" alt="выезд специалиста" class="how-working__icon">
<h3 class="how-working__subtitle">Согласовываем выезд</h3>
<div class="how-working__text">Наш специалист выезжает к вам на объект, чтобы произвести необходимые расчеты и съем размеров</div>
</div>
<div class="how-working__item how-working__after"><img src="/img/interface/kommercheskoe_predlozhenie.png" alt="Коммерческое предложение" class="how-working__icon">
<h3 class="how-working__subtitle">Коммерческое предложение</h3>
<div class="how-working__text">По данным собранным специалистом составляем для вас смету и отправляем на ваше одобрение</div>
</div>
<div class="how-working__item"><img src="/img/interface/operational-efficiency.webp" alt="заключение договора" class="how-working__icon">
<h3 class="how-working__subtitle">Заключаем договор</h3>
<div class="how-working__text">Если Вас все устраивает заключаем договор и производим все необходимые работы</div>
</div>
</div>
';
        $replacementGarant = '<img class="sib article__img m-auto" loading="lazy" width="800" height="500" src="/img/interface/warranty-card.webp" title="Гарантийный сертификат компании «Артель и С» " alt="Гарантийный сертификат компании «Артель и С» фото">';

        $patternWork = "/<!--\?php include\('..\/..\/include\/how_we_are_working\.php'\); \?-->/";
        $patternGarant = "/<!--\?php include\('..\/..\/include\/warranty-period\.php'\); \?-->/";
        foreach ($articles as $article) {
            $needReplace = false;
            $matchWork = [];
            $matchGarant = [];
            preg_match($patternWork, $article->content, $matchWork);
            preg_match($patternGarant, $article->content, $matchGarant);

            if (count($matchWork) > 0) {
                $needReplace = true;
            }elseif (count($matchGarant) > 0) {
                $needReplace = true;
            }

            $content = $article->content;
            $content = preg_replace($patternWork, $replacementWork, $content);
            $content = preg_replace($patternGarant, $replacementGarant, $content);

            if ($needReplace) {
                $content = $article->content;
                $content = preg_replace($patternWork, $replacementWork, $content);
                $content = preg_replace($patternGarant, $replacementGarant, $content);

                $article->content = $content;
                $article->save();
            }
        }
    }

    public function upload(Request $request)
    {
        $success = false;
        $path = Carbon::now()->format('FY');
        $images = [];

        if ($request->has('images')) {
            $dir = self::$media_path . '/uploads/' . $path . '/';
            $this->checkPathValidity($dir);

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }

            foreach (request()->file('images') as $file) {
//              $uid = (string) Str::uuid();
                $uid = '';
                $fileMimeType = $file->getClientMimeType();

                $fileName = str_replace('.' . $file->getClientOriginalExtension(), "", $file->getClientOriginalName());
                $fileFullName = $dir . $fileName . $uid . self::IMAGE_EXT;

                if ($this->isConvertType($fileMimeType)) {
                    try {
                        $image = Image::make($file)->resize(self::IMAGE_WIDTH, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $image->save($fileFullName, self::IMAGE_QUALITY, 'image/webp');
                        $images[] = $fileFullName;

                        $imageThumb = Image::make($file)->resize(self::IMAGE_THUMB_WIDTH, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $fileThumbFullName = $dir . $fileName . $uid . "-300x" . self::IMAGE_EXT;
                        $imageThumb->save($fileThumbFullName, self::IMAGE_QUALITY, 'image/webp');
                        $images[] = $fileThumbFullName;

                        move_uploaded_file($file->getRealPath(), $dir . $file->getClientOriginalName());

                        $success = true;
                    } catch (\Exception $e) {
                    }
                }
            }
        }

        return response()->json([
            "success" => $success,
            "images" => array_filter(
                array_map(static function ($imgUrl) {
                    return '/' . $imgUrl;
                }, $images),
                static function ($imgUrl) {
                    $hasMinName = mb_stripos($imgUrl, '-300x');
                    return $hasMinName === false;
                })
        ]);
    }

    protected function isConvertType($type)
    {
        return !empty(array_filter(self::CONVERT_TYPES, static function ($convertType) use ($type) {
            return $convertType === $type;
        }));
    }


}
