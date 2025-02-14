<?php

use App\Http\Controllers\CapePeninsulasController;
use App\Http\Controllers\CapeTownController;
use App\Http\Controllers\EasternChaperController;
use App\Http\Controllers\JohannesburgController;
use App\Http\Controllers\KznChapterController;
use App\Http\Controllers\KznController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortElizabethController;
use App\Http\Controllers\PretoriaController;
use App\Http\Controllers\StudentRegController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\WesternChapterController;
use App\Http\Controllers\WitsController;
use App\Http\Controllers\YoungProfessionalController;
use App\Models\Johannesburg;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/edit-invoice-section', [DashboardController::class, 'editInvoiceSection'])->name('dashboard.edit-invoice-section');
    Route::post('/dashboard/update-invoice-section', [DashboardController::class, 'updateInvoiceSection'])->name('dashboard.update-invoice-section');
    Route::get('/dashboard/edit-invoice-section-chap', [DashboardController::class, 'editInvoiceSectionChap'])->name('dashboard.edit-invoice-section-chap');
    Route::post('/dashboard/update-invoice-section-chap', [DashboardController::class, 'updateInvoiceSectionChap'])->name('dashboard.update-invoice-section-chap');
/*Route::resource('dashboard','App\Http\Controllers\DashboardController',['names'=>[
        'index'  => 'dashboard.index',
        'edit'   => 'dashboard.edit',
        'store'  => 'dashboard.store',
        'create' => 'dashboard.create'
    ]]);
*/   
Route::resource('document','App\Http\Controllers\DocuController',['names'=>[
    'index'  => 'document.index',
    'edit'   => 'document.edit',
    'store'  => 'document.store',
    'create' => 'document.create'
]]);

Route::resource('gallery','App\Http\Controllers\GalleryController',['names'=>[
    'index'  => 'gallery.index',
    'edit'   => 'gallery.edit',
    'store'  => 'gallery.store',
    'create' => 'gallery.index'
]]);
Route::resource('videos','App\Http\Controllers\VideoController',['names'=>[
    'index'  => 'videos.index',
    'edit'   => 'videos.edit',
    'store'  => 'videos.store',
    'create' => 'videos.index'
]]);
Route::resource('types','App\Http\Controllers\TypesController',['names'=>[
    'index'  => 'types.index',
    'edit'   => 'types.edit',
    'store'  => 'types.store',
    'create' => 'types.create'
]]);
Route::resource('posts','App\Http\Controllers\PostsController',['names'=>[
    'index'  => 'posts.index',
    'edit'   => 'posts.edit',
    'store'  => 'posts.store',
    'create' => 'posts.create'
]]);




Route::resource('billing','App\Http\Controllers\BillingController',['names'=>[
        'index'  => 'billing.index',
        'edit'   => 'billing.edit',
        'store'  => 'billing.store',
        'create' => 'billing.create'
    ]]);

Route::resource('members','App\Http\Controllers\MembersController',['names'=>[
        'index'  => 'members.index',
        'edit'   => 'members.edit',
        'store'  => 'members.store',
        'create' => 'members.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
Route::resource('youngprofessional','App\Http\Controllers\YoungProfessionalController',['names'=>[
        'index'  => 'youngprofessional.index',
        'edit'   => 'youngprofessional.edit',
        'store'  => 'youngprofessional.store',
        'create' => 'youngprofessional.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('capepen','App\Http\Controllers\CapePeninsulasController',['names'=>[
        'index'  => 'capepen.index',
        'edit'   => 'capepen.edit',
        'store'  => 'capepen.store',
        'create' => 'capepen.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('capetown','App\Http\Controllers\CapeTownController',['names'=>[
        'index'  => 'capetown.index',
        'edit'   => 'capetown.edit',
        'store'  => 'capetown.store',
        'create' => 'capetown.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('johannesburg','App\Http\Controllers\JohannesburgController',['names'=>[
        'index'  => 'johannesburg.index',
        'edit'   => 'johannesburg.edit',
        'store'  => 'johannesburg.store',
        'create' => 'johannesburg.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
Route::resource('pretoria','App\Http\Controllers\PretoriaController',['names'=>[
        'index'  => 'pretoria.index',
        'edit'   => 'pretoria.edit',
        'store'  => 'pretoria.store',
        'create' => 'pretoria.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('kzn','App\Http\Controllers\KznController',['names'=>[
        'index'  => 'kzn.index',
        'edit'   => 'kzn.edit',
        'store'  => 'kzn.store',
        'create' => 'kzn.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('wits','App\Http\Controllers\WitsController',['names'=>[
        'index'  => 'wits.index',
        'edit'   => 'wits.edit',
        'store'  => 'wits.store',
        'create' => 'wits.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('upe','App\Http\Controllers\PortElizabethController',['names'=>[
        'index'  => 'upe.index',
        'edit'   => 'upe.edit',
        'store'  => 'upe.store',
        'create' => 'upe.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('easternchap','App\Http\Controllers\EasternChaperController',['names'=>[
        'index'  => 'easternchap.index',
        'edit'   => 'easternchap.edit',
        'store'  => 'easternchap.store',
        'create' => 'easternchap.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('kznchap','App\Http\Controllers\KznChapterController',['names'=>[
        'index'  => 'kznchap.index',
        'edit'   => 'kznchap.edit',
        'store'  => 'kznchap.store',
        'create' => 'kznchap.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('westernchap','App\Http\Controllers\WesternChapterController',['names'=>[
        'index'  => 'westernchap.index',
        'edit'   => 'westernchap.edit',
        'store'  => 'westernchap.store',
        'create' => 'westernchap.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('trust','App\Http\Controllers\TrustController',['names'=>[
        'index'  => 'trust.index',
        'edit'   => 'trust.edit',
        'store'  => 'trust.store',
        'create' => 'trust.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::resource('studentreg','App\Http\Controllers\StudentRegController',['names'=>[
        'index'  => 'studentreg.index',
        'edit'   => 'studentreg.edit',
        'store'  => 'studentreg.store',
        'create' => 'studentreg.create',
        //'sendInvoices' => 'members.send-invoices'
    ]]);
    Route::get('/export/{table}', [DashboardController::class, 'exportTable'])->name('export.table');
Route::post('/members/send-invoices', [MembersController::class, 'sendInvoices'])->name('members.send-invoices');
Route::post('/trust/send-invoices', [TrustController::class, 'sendInvoices'])->name('trust.send-invoices');
Route::post('/studentreg/send-invoices', [StudentRegController::class, 'sendInvoices'])->name('studentreg.send-invoices');
Route::post('/capetown/send-invoices', [CapeTownController::class, 'sendInvoices'])->name('capetown.send-invoices');
Route::post('/johannesburg/send-invoices', [JohannesburgController::class, 'sendInvoices'])->name('johannesburg.send-invoices');
Route::post('/easternchap/send-invoices', [EasternChaperController::class, 'sendInvoices'])->name('easternchap.send-invoices');
Route::post('/kznchap/send-invoices', [KznChapterController::class, 'sendInvoices'])->name('kznchap.send-invoices');
Route::post('/westernchap/send-invoices', [WesternChapterController::class, 'sendInvoices'])->name('westernchap.send-invoices');
Route::post('/pretoria/send-invoices', [PretoriaController::class, 'sendInvoices'])->name('pretoria.send-invoices');
Route::post('/upe/send-invoices', [PortElizabethController::class, 'sendInvoices'])->name('upe.send-invoices');
Route::post('/wits/send-invoices', [WitsController::class, 'sendInvoices'])->name('wits.send-invoices');
Route::post('/kzn/send-invoices', [KznController::class, 'sendInvoices'])->name('kzn.send-invoices');
Route::post('/youngprofessional/send-invoices', [YoungProfessionalController::class, 'sendInvoices'])->name('youngprofessional.send-invoices');
Route::post('/capepen/send-invoices', [CapePeninsulasController::class, 'sendInvoices'])->name('capepen.send-invoices');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/updateapp', function () {
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});

