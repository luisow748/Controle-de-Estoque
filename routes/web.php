<?php

use App\Http\Controllers\EnterController;
use App\Http\Controllers\Section\SectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Items\ItemController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Admin\{AdminController, UserController};

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
Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index'])->name('index');
//Aut
Route::get('/entrar', [EnterController::class, 'index'])->name('form_enter');
Route::post('/entrar', [EnterController::class, 'enter'])->name('enter');
Route::get('/registrar', [EnterController::class, 'create'])->name('form_register');
Route::post('/registrar', [EnterController::class, 'store'])->name('register');

Route::middleware(['auth'])->group(function () {
    //Reports
    Route::get('/reports', [IndexController::class, 'reports']);

    //Admin
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/usuarios', [UserController::class, 'index'])->name('list_users');
    Route::get('/admin/usuarios/criar', [UserController::class, 'create'])->name('create_users');
    Route::post('/admin/usuarios/criar', [UserController::class, 'store'])->name('store_users');
    Route::get('/admin/usuarios/{id}', [UserController::class, 'show'])->name('show_user');
    Route::get('/admin/usuarios/editar', [UserController::class, 'update'])->name('create_users');
    Route::delete('/admin/usuarios/{id}', [UserController::class, 'destroy'])->name('delete_user');

    //Users
    Route::get('admin/area_usuario', [UserController::class, 'userArea']);


    // ITEMS
    Route::get('/items', [ItemController::class, 'index'])->name('list_items');


    Route::get('items/criar', [ItemController::class, 'create'])
        ->name('form_create_item');
    Route::get('items/criar/{categoria}', [ItemController::class, 'createWithCategory'])
        ->name('form_create_item_with_category');
    Route::get('items/mostrar/{id}', [ItemController::class, 'show']);

    Route::post('items/criar', [ItemController::class, 'store'])->name('store_item');
    //Route::get('/items/{id}', [ItemController::class, 'show']); //SHOW
    Route::post('/items/editar/{id}', [ItemController::class, 'update'])->name('update_item');
    Route::get('/items/editar/{id}', [ItemController::class, 'edit'])->name('form_update_item');
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);

    //Seções
    Route::get('/secoes', [SectionController::class, 'index'])->name('list_section');
    Route::get('/secoes/criar', [SectionController::class, 'create'])->name('form_create_section');
    Route::post('secoes/criar', [SectionController::class, 'store']);
    Route::get('/secoes/editar', [SectionController::class, 'update'])->name('form_edit_section');
    Route::delete('/secoes/{id}', [SectionController::class, 'destroy']);

    //CATEGORIAS
    Route::get('/categorias', [CategoryController::class, 'index'])->name('list_category');
    Route::post('/categorias', [CategoryController::class, 'returnCategory'])->name('return_category');
    Route::get('/categorias/{id}/items/', [CategoryController::class, 'listItemsFromCategory'])
        ->name('list_items_from_category');
    Route::get('/categorias/criar', [CategoryController::class, 'create'])->name('form_create_category');
    Route::post('categorias/criar', [CategoryController::class, 'store']);
    Route::get('/categorias/editar', [CategoryController::class, 'update'])->name('form_edit_category');
    Route::delete('/categorias/{id}', [CategoryController::class, 'destroy']);




    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
