<?php

use App\Http\Controllers\EnterController;
use App\Http\Controllers\Section\SectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Items\ItemController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Admin\{AdminController, UserController};
use App\Http\Controllers\Location\LocationController;

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
// INDEX


//Aut
Route::get('/entrar', [EnterController::class, 'index'])->name('form_enter');
Route::post('/entrar', [EnterController::class, 'enter'])->name('enter');
Route::get('/bemvindo', [IndexController::class, 'index_bemvindo'])->name('welcome');
Route::get('/funcionalidades', [IndexController::class, 'func']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/index/categoria/{id}', [IndexController::class, 'show_category']);


    Route::get('/registrar', [EnterController::class, 'create'])->name('form_register');
    Route::post('/registrar', [EnterController::class, 'store'])->name('register');
    //Reports
    Route::get('/reports', [IndexController::class, 'reports']);
    Route::get('/consultas', [IndexController::class, 'consultas']);

    //Admin
    Route::get('/admin', [AdminController::class, 'index']);

        //Users
        Route::get('/admin/usuarios', [UserController::class, 'list_users'])->name('list_users');
        Route::get('/admin/usuarios/criar', [UserController::class, 'create'])->name('create_users');
        Route::post('/admin/usuarios/criar', [UserController::class, 'store'])->name('store_users');
        Route::get('/admin/usuarios/{id}', [UserController::class, 'show'])->name('show_user');
        Route::get('/admin/usuarios/editar/{id}', [UserController::class, 'update'])->name('update_users');
        Route::post('/admin/usuarios/editar/{id}', [UserController::class, 'store_update'])->name('store_update_users');
        Route::delete('/admin/usuarios/{id}', [UserController::class, 'destroy'])->name('delete_user');


    Route::get('admin/area_usuario', [UserController::class, 'userArea']);


    // ITEMS
    // Route::get('/items', [ItemController::class, 'index'])->name('list_items');
    Route::get('/items', [ItemController::class, 'index'])->name('list_items');


    Route::get('items/criar', [ItemController::class, 'create'])
        ->name('form_create_item');
    Route::get('items/criar/{categoria}', [ItemController::class, 'createWithCategory'])
        ->name('form_create_item_with_category');
    Route::get('items/mostrar/{id}', [ItemController::class, 'show'])->name('show-item');

    Route::post('items/criar', [ItemController::class, 'store'])->name('store_item');
    //Route::get('/items/{id}', [ItemController::class, 'show']); //SHOW
    Route::post('/items/editar/{id}', [ItemController::class, 'update'])->name('update_item');
    Route::get('/items/editar/{id}', [ItemController::class, 'edit'])->name('form_update_item');
    Route::post('items/baixar/{id}', [ItemController::class, 'leave'])->name('leave_item');
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);

    //Seções
    Route::get('/secoes', [SectionController::class, 'index'])->name('list_section');
    Route::get('/secoes/criar', [SectionController::class, 'create'])->name('form_create_section');
    Route::post('secoes/criar', [SectionController::class, 'store']);
    Route::get('/secoes/editar/{id}', [SectionController::class, 'update'])->name('form_edit_section');
    Route::post('/secoes/editar/{id}', [SectionController::class, 'store_update']);
    Route::delete('/secoes/{id}', [SectionController::class, 'destroy']);

    //CATEGORIAS
    Route::get('/categorias', [CategoryController::class, 'index'])->name('list_category');
    Route::post('/categorias', [CategoryController::class, 'returnCategory'])->name('return_category');
    Route::get('/categorias/{id}/items', [ItemController::class, 'listItemsFromCategory'])
        ->name('list_items_from_category');
    Route::get('/categorias/criar', [CategoryController::class, 'create'])->name('form_create_category');
    Route::post('/categorias/criar/{id}', [CategoryController::class, 'createCatWithSection'])->name('form_create_category_with_section');
    Route::post('categorias/criar', [CategoryController::class, 'store'])->name('category_store');
    Route::get('/categorias/editar/{id}', [CategoryController::class, 'update'])->name('form_edit_category');
    Route::post('/categorias/editar/{id}', [CategoryController::class, 'update_store_category']);
    Route::delete('/categorias/{id}', [CategoryController::class, 'destroy']);

    //Locais
    Route::get('/locais', [LocationController::class, 'index'])->name('list_location');
    Route::get('/locais/criar', [LocationController::class, 'create'])->name('form_create_location');
    Route::post('locais/criar', [LocationController::class, 'store'])->name('store_location');
    Route::get('/locais/editar/{id}', [LocationController::class, 'update'])->name('form_edit_location');
    Route::post('/locais/editar/{id}', [LocationController::class, 'store_update'])->name('store_update_location');
    Route::delete('/locais/{id}', [LocationController::class, 'destroy']);




    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
