<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AffectationPersonnelDepartementController;
use App\Http\Controllers\AffectationTachesController;
use App\Http\Controllers\AgencesController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoriesProduitsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ComptesClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DelegationTachesController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\ImportDataCSV;
use App\Http\Controllers\MagasinsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TachesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });

// Login and logout
Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'AuthLogout']);

// Forgot password

Route::get('forgot-password', [AuthController::class, 'ForgotPassword']);
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);

// Reset password

Route::get('reset/{token}', [AuthController::class, 'ResetPassword']);
Route::post('reset/{token}', [AuthController::class, 'PostResetPassword']);

// Commun view
Route::get('profil', [DashboardController::class, 'ProfileUser']);
Route::get('password', [DashboardController::class, 'PasswordUser']);
Route::post('password', [AuthController::class, 'PostPasswordUser']);

//Permission

// Routes grouped by user type
Route::resource('agences', AgencesController::class);
Route::resource('affectations_taches', AffectationTachesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('categories_produits', CategoriesProduitsController::class);
Route::resource('clients', ClientsController::class);
Route::resource('comptes_Clients', ComptesClientsController::class);
Route::resource('devis', DevisController::class);
Route::resource('delegation_tache', DelegationTachesController::class);
Route::resource('departements', DepartementsController::class);
Route::resource('factures', FacturesController::class);
Route::resource('magasins', MagasinsController::class);
Route::resource('menus', MenuController::class);
Route::resource('personnels', PersonnelsController::class);
Route::resource('personneldepartement', AffectationPersonnelDepartementController::class);
Route::resource('personnel', PersonnelController::class);
Route::resource('produits', ProduitsController::class);
Route::resource('taches', TachesController::class);
Route::get('import/categories', [ImportDataCSV::class, 'indexCategories'])->name('importCategories');
Route::get('import/produits', [ImportDataCSV::class, 'indexProduits'])->name('importProduits');
Route::post('import/categories/save', [ImportDataCSV::class, 'storeCategoriesImport'])->name('importSaveCategories');
Route::post('import/produits/save', [ImportDataCSV::class, 'storeProduitsImport'])->name('importSaveProduits');
Route::get('imports/export_categories', [ImportDataCSV::class, 'fileExportCategories'])->name('exportCategories');
Route::get('imports/export_produits', [ImportDataCSV::class, 'fileExportProduits'])->name('exportProduits');

Route::post('/savemontant', [AjaxController::class, 'submitMontantProduit'])->name('montant.save');
Route::put('/editmontant', [AjaxController::class, 'editMontantProduit'])->name('montant.update');
Route::get('/edit_montant', [AjaxController::class, 'editMontantView'])->name('montant.edit');
Route::get('/autocomplete', [AjaxController::class, 'autocomplete'])->name('autocomplete');
Route::get('/infos_produit', [AjaxController::class, 'getInfoProduit'])->name('AjaxInfoProduit');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
});

Route::group(['middleware' => 'magasinier'], function () {
    Route::get('magasinier/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::group(['middleware' => 'gestionnaire'], function () {
    Route::get('gestionnaire/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::group(['middleware' => 'operateur'], function () {
    Route::get('operateur/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::group(['middleware' => 'invite'], function () {
    Route::get('invite/dashboard', [DashboardController::class, 'Dashboard']);
});
