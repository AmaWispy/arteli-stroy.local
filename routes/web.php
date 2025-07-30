<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\AuthorController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\DashboardServiceController;
use App\Http\Controllers\Dashboard\DashboardPortfolioController;
use App\Http\Controllers\Dashboard\DesignController;
use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\HowToController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\RedirectDynamicRoutes;
use App\Http\Middleware\RemoveTrailingSlash;
use Illuminate\Support\Facades\Route;

Route::redirect('/politica.html', '/politica', 301);

//Get routes for site pages
Route::get('/', [PageController::class, 'home'])->name('home')->middleware([RemoveTrailingSlash::class]);

Route::middleware([RedirectDynamicRoutes::class])->group(function () {
  Route::get('/about', [PageController::class, 'about'])->name('about');
  Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
  Route::get('/all-feedback', [PageController::class, 'allFeedback'])->name('all-feedback');
  Route::get('/stock', [PageController::class, 'stock'])->name('stock');
  Route::get('/special-offers', [PageController::class, 'specialOffers'])->name('special-offers');
  Route::get('/service', [PageController::class, 'service'])->name('service');
  Route::get('/service/electrician', [PageController::class, 'electrician']);
  Route::view('/service/remont-ofisov-pod-klyuch', 'pages.remont-ofisov');
  Route::get('/service/{link}', [ServiceController::class, 'getView']);
  Route::get('/service/{category}/{service}', [ServiceController::class, 'getViewSecond']);
  Route::get('/authors', [PageController::class, 'authors'])->name('authors');
  Route::get('/authors/{slug}', [PageController::class, 'author']);
  Route::get('/articles', [PageController::class, 'articles'])->name('articles');
  Route::get('/articles/{article}', [ArticleController::class, 'getView']);
  Route::get('/price', [PageController::class, 'price'])->name('price');
  Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
  Route::get('/portfolio/{link}', [PortfolioController::class, 'getView']);
  Route::get('politica', [PageController::class, 'getPolicy']);
});

Route::get('/sitemap.xml', [PageController::class, 'sitemap']);

//Post routes for mails
Route::post('/mail-call', [MailController::class, 'mailCall']);
Route::post('/mail-application', [MailController::class, 'mailApplication']);
Route::post('/mail-calc', [MailController::class, 'mailCalc']);
Route::post('/mail-feedback', [MailController::class, 'mailFeedback']);
Route::post('/mail-help', [MailController::class, 'mailHelp']);
Route::post('/mail-mail', [MailController::class, 'mailMail']);
Route::post('/mail-contacts', [MailController::class, 'mailContacts']);
Route::post('/mail-stopgap', [MailController::class, 'mailStopgap']);
Route::post('/quiz', [MailController::class, 'quiz']);
Route::post('/mail', [MailController::class, 'mail']);
Route::post('/mail-service', [MailController::class, 'mailService']);

Route::middleware('guest')->group(function () {
  Route::view('/vhod-v-panel', 'auth.login')->name('login');
  Route::post('/vhod-v-panel', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/new', [DashboardController::class, 'dashboardNew'])->name('dashboard-new');

  Route::get('/dashboard/articles', [DashboardController::class, 'dashboardArticles']);

  Route::get('/dashboard/redirects', [DashboardController::class, 'dashboardRedirects']);
  Route::get('/dashboard/redirects/new', [DashboardController::class, 'dashboardRedirectsNew'])->name('dashboard-redirects-new');

  Route::get('/dashboard/pages', [DashboardController::class, 'dashboardPages']);

  Route::view('/dashboard/media', 'dashboard.media');

  Route::get('/dashboard/leads', [LeadController::class, 'index']);

  Route::prefix("dashboard/portfolio")->group(function () {
    Route::get("/", [DashboardPortfolioController::class, 'index']);
    Route::get("/new", [DashboardPortfolioController::class, 'portfolioNew'])->name('dashboard-portfolio-new');
    Route::get("{id}", [DashboardPortfolioController::class, "portfolioEdit"]);
  });

  Route::prefix("dashboard/services")->group(function () {
    Route::get("/", [DashboardServiceController::class, 'services']);
    Route::get("/new", [DashboardServiceController::class, 'newServicePage']);
    Route::get("{id}", [DashboardServiceController::class, "servicePageEdit"]);
  });

  Route::prefix("dashboard/categories")->group((function () {
    Route::get('/', [CategoriesController::class, 'showIndex']);
    Route::get("/new", [CategoriesController::class, 'newCategory'])->name('categories-new');
    Route::get("/{id}", [CategoriesController::class, 'editCategory']);
  }));


  Route::prefix("dashboard/menu")->group(function () {
    Route::get('/', [MenuController::class, 'showIndex']);
  });
  
  Route::prefix("dashboard/how-to")->group((function () {
    Route::get('/', [HowToController::class, 'getIndex']);
    Route::get("/new", [HowToController::class, 'newHowTo'])->name('create-how-to');
    Route::get("/{id}", [HowToController::class, 'editHowTo']);
  }));

  Route::prefix("dashboard/authors")->group(function () {
    Route::get('/', [AuthorController::class, 'getIndex']);
    Route::get("/new", [AuthorController::class, 'getCreatePage'])->name('authors-new');
    Route::get("/{id}", [AuthorController::class, 'getUpdatePage']);
  });

  Route::get('/dashboard/{id}', [DashboardController::class, 'dashboardEdit']);
  Route::get('/dashboard/redirects/{id}', [DashboardController::class, 'dashboardRedirectsEdit']);
  Route::get('/dashboard/pages/{id}', [DashboardController::class, 'dashboardPagesEdit']);

  Route::post('/create-article', [DashboardController::class, 'createArticle']);
  Route::post('/update-article', [DashboardController::class, 'updateArticle']);
  Route::post('/delete-article', [DashboardController::class, 'deleteArticle']);

  Route::post('/create-portfolio', [DashboardPortfolioController::class, 'createPortfolio']);
  Route::post('/update-portfolio', [DashboardPortfolioController::class, 'updatePortfolio']);
  Route::post('/delete-portfolio', [DashboardPortfolioController::class, 'deletePortfolio']);

  Route::post('/update-page', [DashboardController::class, 'updatePage']);

  Route::post('/create-redirect', [DashboardController::class, 'createRedirect']);
  Route::post('/update-redirect', [DashboardController::class, 'updateRedirect']);
  Route::post('/delete-redirect', [DashboardController::class, 'deleteRedirect']);

  //Media
  // Route::post('/media/open', [MediaController::class, 'open']);
  Route::post('/media/load', [MediaController::class, 'load']);
  Route::post('/media/create-folder', [MediaController::class, 'createFolder']);
  Route::post('/media/delete', [MediaController::class, 'delete']);

  Route::post('/create-service', [DashboardServiceController::class, 'createService']);
  Route::post('/update-service', [DashboardServiceController::class, 'updateService']);
  Route::post('/delete-service', [DashboardServiceController::class, 'deleteService']);

  // Design
  Route::post('/change-design', [DesignController::class, 'changeDesign']);

  // Post categories
  Route::post('/create-category', [CategoriesController::class, 'createCategory']);
  Route::post('/update-category', [CategoriesController::class, 'updateCategory']);
  Route::post('/delete-category', [CategoriesController::class, 'deleteCategory']);

  // Save menu
  Route::post('/menu', [MenuController::class, 'saveMenu']);
  
  //How to
  Route::post('/create-how-to', [HowToController::class, 'createHowTo']);
  Route::post('/update-how-to', [HowToController::class, 'updateHowTo']);
  Route::post('/delete-how-to', [HowToController::class, 'deleteHowTo']);

  // Author
  Route::post('/create-author', [AuthorController::class, 'createAuthor']);
  Route::post('/update-author', [AuthorController::class, 'updateAuthor']);
  Route::post('/delete-author', [AuthorController::class, 'deleteAuthor']);
});

Route::view('/{any}', 'errors.404')->middleware([RedirectDynamicRoutes::class]);
