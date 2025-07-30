<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailApplicationRequest;
use App\Http\Requests\MailCalcRequest;
use App\Http\Requests\MailCallRequest;
use App\Http\Requests\MailContactsRequest;
use App\Http\Requests\MailFeedbackRequest;
use App\Http\Requests\MailHelpRequest;
use App\Http\Requests\MailMailRequest;
use App\Http\Requests\MailRequest;
use App\Http\Requests\MailStopgapRequest;
use App\Http\Requests\QuizRequest;
use App\Http\Requests\MailServiceRequest;
use App\Mail\MailApplication;
use App\Mail\MailCalc;
use App\Mail\MailCall;
use App\Mail\MailFeedback;
use App\Mail\MailHelp;
use App\Mail\MailMail;
use App\Mail\MailOffice;
use App\Mail\MailStopgap;
use App\Mail\Quiz;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

class MailController extends Controller
{
    private $secretKey = '6LehQDYqAAAAAH3JkDupDGz3ldaRnDNQUoJDBiIU';
    private $metrikaId;

    public function __construct()
    {
        $this->metrikaId = config('services.yandex_metrika.id');
    }

    private function sanitizeString(string|null $data): string
    {
        if ($data === null) {
            return '';
        }

        return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
    }

    public function mailCall(MailCallRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-call']);
        $phone = $this->sanitizeString($validated['phone-call']);

        $defaultMsg = 'Заявка на звонок получена! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailCall([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$name}",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                    'from' => 'Заказать звонок',
                ]);
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$name} (спам)",
                'data' => Json::encode([
                    'name' => $name,
                    'phone' => $phone,
                ]),
                'from' => 'Заказать звонок',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailContacts(MailContactsRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-contacts']);
        $phone = $this->sanitizeString($validated['tel-contacts']);

        $defaultMsg = 'Заявка на звонок получена! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailCall([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$name}",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                    'from' => 'Форма на странице контакты',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$name} (спам)",
                'data' => Json::encode([
                    'name' => $name,
                    'phone' => $phone,
                ]),
                'from' => 'Форма на странице контакты',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailApplication(MailApplicationRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-application']);
        $phone = $this->sanitizeString($validated['phone-application']);
        $message = $this->sanitizeString($validated['wishes-application']);

        $defaultMsg = 'Заявка на консультацию получена! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailApplication([
                        'name' => $name,
                        'phone' => $phone,
                        'message' => $message,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone}",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                        'message' => $message,
                    ]),
                    'from' => 'Бесплатная консультация',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone} (спам)",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                        'message' => $message,
                    ]),
                    'from' => 'Бесплатная консультация',
                ]);
                $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailCalc(MailCalcRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-calc']);
        $phone = $this->sanitizeString($validated['phone-calc']);

        $defaultMsg = 'Ваша заявка принята! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailCalc([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone}",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                    'from' => 'Расчет стоимости',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$phone} (спам)",
                'data' => Json::encode([
                    'name' => $name,
                    'phone' => $phone,
                ]),
                'from' => 'Расчет стоимости',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailFeedback(MailFeedbackRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-feedback']);
        $review = $this->sanitizeString($validated['wishes-feedback']);

        $defaultMsg = 'Благодарим Вас за отзыв!';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailFeedback([
                        'name' => $name,
                        'review' => $review,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$name}",
                    'data' => Json::encode([
                        'name' => $name,
                        'review' => $review,
                    ]),
                    'from' => 'Оставить отзыв',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$name} (спам)",
                'data' => Json::encode([
                    'name' => $name,
                    'review' => $review,
                ]),
                'from' => 'Оставить отзыв',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailHelp(MailHelpRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $name = $this->sanitizeString($validated['name-help']);
        $phone = $this->sanitizeString($validated['phone-help']);

        $defaultMsg = 'Ваше обращение получено! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailHelp([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone}",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                    'from' => 'заявка на помощь',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone} (спам)",
                    'data' => Json::encode([
                        'name' => $name,
                        'phone' => $phone,
                    ]),
                    'from' => 'заявка на помощь',
                ]);
                $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailMail(MailMailRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $email = $this->sanitizeString($validated['email-mail']);
        $message = $this->sanitizeString($validated['wishes-mail']);

        $defaultMsg = 'Ваше обращение получено! Мы свяжемся с Вами в ближайшее время';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailMail([
                        'email' => $email,
                        'message' => $message,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$email}",
                    'data' => Json::encode([
                        'email' => $email,
                        'message' => $message,
                    ]),
                    'from' => 'Напишите нам',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$email} (спам)",
                'data' => Json::encode([
                    'email' => $email,
                    'message' => $message,
                ]),
                'from' => 'Напишите нам',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function mailStopgap(MailStopgapRequest $request)
    {
        $validated = $request->validated();

        $antispam = $this->sanitizeString($request['anti-spam']);
        $phone = $this->sanitizeString($validated['tel-stopgap']);

        $defaultMsg = 'Заявка принята!';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            if (!empty($antispam)) {
                return response()->json(['message' => $defaultMsg]);
            }

            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailStopgap([
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone}",
                    'data' => Json::encode([
                        'phone' => $phone,
                    ]),
                    'from' => 'Заявка на консультацию',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$phone} (спам)",
                'data' => Json::encode([
                    'phone' => $phone,
                ]),
                'from' => 'Заявка на консультацию',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg]);
        }
    }

    public function quiz(QuizRequest $request)
    {
        $validated = $request->validated();

        $name = $this->sanitizeString($validated['name']);
        $phone = $this->sanitizeString($validated['phone']);
        $answers = $this->sanitizeString($request->answers);

        $body = $this->create_body($name, $phone, $answers);

        $isSended = false;
        $msg = '';

        try {
            $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                new Quiz([
                    'body' => $body,
                ]),
            );
        } catch (TransportException $transportException) {
            $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
        } catch (\Exception $e) {
        }

        if ($isSended) {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$phone}",
                'data' => Json::encode([
                    'name' => $name,
                    'phone' => $phone,
                    'answers' => $body,
                ]),
                'from' => 'Quiz ремонт офисов',
            ]);
            $lead->save();

            return response()->json(['message' => 'Заявка принята!']);
        }

        return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
    }

    function create_body($name, $phone, $answers)
    {
        $body = '';

        if (!empty($name)) {
            $body .= "<p><b>Имя:</b>{$name}</p>";
        }

        $body .= "<p><b>Телефон:</b> {$phone}</p>";

        $body .= '<p><b>Ответы:</b></p>';

        foreach ($answers as $item) {
            foreach ($item as $key => $value) {
                $body .= "<p><b>{$key}: </b></p>";
                if (is_array($value)) {
                    foreach ($value as $answer) {
                        foreach ($answer as $answer_key => $answer_value) {
                            $body .= "<p>{$answer_key}: " . $this->sanitizeString($answer_value) . '</p>';
                        }
                    }
                } else {
                    $body .= '<p>' . $this->sanitizeString($value) . '</p>';
                }
            }
        }

        return $body;
    }

    public function mail(MailRequest $request)
    {
        $validated = $request->validated();

        $name = $this->sanitizeString($validated['name']);
        $tel = $this->sanitizeString($validated['tel']);

        $isSended = false;
        $msg = '';

        try {
            $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                new MailOffice([
                    'name' => $name,
                    'tel' => $tel,
                ]),
            );
        } catch (TransportException $transportException) {
            $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
        } catch (\Exception $e) {
        }

        if ($isSended) {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$tel}",
                'data' => Json::encode([
                    'name' => $name,
                    'phone' => $tel,
                ]),
                'from' => 'Mail ремонт офисов',
            ]);
            $lead->save();

            return response()->json(['message' => 'Благодарим Вас за заявку! Мы свяжемся с Вами в ближайшее время']);
        }

        return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
    }

    public function mailService(MailServiceRequest $request)
    {
        $validated = $request->validated();

        $phone = $this->sanitizeString($validated['phone']);

        $defaultMsg = 'Заявка принята!';

        $captchaToken = $request['token'];

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $captchaToken,
        ]);
        $responseKeys = $response->json();

        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            $isSended = false;
            $msg = '';

            try {
                $isSended = Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                    new MailStopgap([
                        'phone' => $phone,
                    ]),
                );
            } catch (TransportException $transportException) {
                $msg = 'Не удалось отправить email, нет соединения с хостом mailhog!';
            } catch (\Exception $e) {
            }

            if ($isSended) {
                $lead = new Lead();
                $lead->fill([
                    'name' => "Заявка от {$phone}",
                    'data' => Json::encode([
                        'phone' => $phone,
                    ]),
                    'from' => 'Форма в услугах',
                ]);
                $lead->save();
                $isLeadSaved = $lead->save();

                return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success'], 'metrikaId' => $this->metrikaId, 'is_lead_saved' => $isLeadSaved]);
            }

            return response()->json(['message' => !empty($msg) ? $msg : 'Не удалось отправить email!']);
        } else {
            $lead = new Lead();
            $lead->fill([
                'name' => "Заявка от {$phone} (спам)",
                'data' => Json::encode([
                    'phone' => $phone,
                ]),
                'from' => 'Форма в услугах',
            ]);
            $lead->save();

            return response()->json(['message' => $defaultMsg, 'data' => $responseKeys['success']]);
        }
    }
}
