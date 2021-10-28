<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ItemController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [HomeController::class, 'showLogin'])->name('loginPage');

Route::post('/login', [HomeController::class, 'login'])->name('login');

Route::get('/admin', [HomeController::class, 'showAdmin'])->name('dashboard');

Route::get('/managment', [HomeController::class, 'managment'])->name('dashboard.managment');

Route::prefix('managment')->group(function () {

    // categories index
    Route::get('categories', [CategoryController::class, 'index'])->name('managment.categories.index');
    // category create
    Route::get('categories/create', [CategoryController::class, 'create'])->name('managment.categories.create');
    // category store
    Route::post('categories/store', [CategoryController::class, 'store'])->name('managment.categories.store');
    // category edit
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('managment.categories.edit');
    // category update
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('managment.categories.update');
    // category show
    Route::get('categories/{category}', [CategoryController::class, 'show'])->name('managment.categories.show');
    // category delete
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('managment.categories.destroy');

    // Chefs
    Route::get('chefs', [ChefController::class, 'index'])->name('managment.chefs.index');
    // category create
    Route::get('chefs/create', [ChefController::class, 'create'])->name('managment.chefs.create');
    // category store
    Route::post('chefs/store', [ChefController::class, 'store'])->name('managment.chefs.store');

    // Galleries
    Route::get('galleries', [GalleryController::class, 'index'])->name('managment.galleries.index');
    // category create
    Route::get('galleries/create', [GalleryController::class, 'create'])->name('managment.galleries.create');
    // category store
    Route::post('galleries/store', [GalleryfController::class, 'store'])->name('managment.galleries.store');

    // Profile
    Route::get('profiles', [ProfileController::class, 'index'])->name('managment.profiles.index');
    // profile create
    Route::get('profiles/create', [ProfileController::class, 'create'])->name('managment.profiles.create');
    // profile store
    Route::post('profiles/store', [ProfileController::class, 'store'])->name('managment.profiles.store');
    // profile edit
    Route::get('profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('managment.profiles.edit');

    // Menu
    Route::get('/menus', [MenuController::class, 'index'])->name('managment.menus.index');
    // menu create
    Route::get('menus/create', [MenuController::class, 'create'])->name('managment.menus.create');
    // menu store
    Route::post('menus/store', [MenuController::class, 'store'])->name('managment.menus.store');
    // menu edit
    Route::get('menus/{menu}/edit', [MenuController::class, 'edit'])->name('managment.menus.edit');
    // menu update
    Route::put('menus/{menu}', [MenuController::class, 'update'])->name('managment.menus.update');
    // menu show
    Route::get('menus/{menu}', [MenuController::class, 'show'])->name('managment.menus.show');
    // menu delete
    Route::delete('menus/{menu}', [MenuController::class, 'destroy'])->name('managment.menus.destroy');

    // Slider
    Route::get('/sliders', [SliderController::class, 'index'])->name('managment.sliders.index');
    // menu create
    Route::get('slides/create', [SliderController::class, 'create'])->name('managment.sliders.create');
    // menu store
    Route::post('sliders/store', [SliderController::class, 'store'])->name('managment.sliders.store');
    // menu edit
    Route::get('sliders/{slider}/edit', [SliderController::class, 'edit'])->name('managment.sliders.edit');
    // slider show
    Route::get('sliders/{slider}', [SliderController::class, 'show'])->name('managment.sliders.show');


    // Page
    Route::get('pages', [PageController::class, 'index'])->name('managment.pages.index');
    // menu create
    Route::get('pages/create', [PageController::class, 'create'])->name('managment.pages.create');
    // menu store
    Route::post('pages/store', [PageController::class, 'store'])->name('managment.pages.store');
    // menu edit
    Route::get('pages/{page}/edit', [PageController::class, 'edit'])->name('managment.pages.edit');
    // page view
    Route::get('pages/{page}', [PageController::class, 'show'])->name('managment.pages.show');
    // page update
    Route::put('pages/{page}', [PageController::class, 'update'])->name('managment.pages.update');
    // page delete
    Route::delete('pages/{page}', [PageController::class, 'destroy'])->name('managment.pages.destroy');

    // images 
    Route::get('images', [ImageController::class, 'index'])->name('managment.images.index');
    // menu create
    Route::get('images/create', [ImageController::class, 'create'])->name('managment.images.create');
    // menu store
    Route::post('images/store', [ImageController::class, 'store'])->name('managment.images.store');
    // menu edit
    Route::get('images/{image}/edit', [ImageController::class, 'edit'])->name('managment.images.edit');
    // page view
    Route::get('images/{image}', [ImageController::class, 'show'])->name('managment.images.show');
    // page view
    Route::put('images/{image}', [ImageController::class, 'update'])->name('managment.images.update');
    // page view
    Route::delete('images/{image}', [ImageController::class, 'destroy'])->name('managment.images.destroy');

    // Why
    Route::get('whies', [WhyController::class, 'index'])->name('managment.whies.index');
    // menu create
    Route::get('whies/create', [WhyController::class, 'create'])->name('managment.whies.create');
    // menu store
    Route::post('whies/store', [WhyController::class, 'store'])->name('managment.whies.store');
    // menu edit
    Route::get('whies/{why}/edit', [WhyController::class, 'edit'])->name('managment.whies.edit');
    // page view
    Route::get('whies/{why}', [WhyController::class, 'show'])->name('managment.whies.show');
    // page update
    Route::put('whies/{why}', [WhyController::class, 'update'])->name('managment.whies.update');
    // page delete
    Route::delete('whies/{why}', [WhyController::class, 'destroy'])->name('managment.whies.destroy');

    // Special
    Route::get('specials', [SpecialController::class, 'index'])->name('managment.specials.index');
    // menu create
    Route::get('specials/create', [SpecialController::class, 'create'])->name('managment.specials.create');
    // menu store
    Route::post('specials/store', [SpecialController::class, 'store'])->name('managment.specials.store');
    // menu edit
    Route::get('specials/{special}/edit', [SpecialController::class, 'edit'])->name('managment.specials.edit');
    // page view
    Route::get('specials/{special}', [SpecialController::class, 'show'])->name('managment.specials.show');
    // page update
    Route::put('specials/{special}', [SpecialController::class, 'update'])->name('managment.specials.update');
    // page delete
    Route::delete('specials/{special}', [SpecialController::class, 'destroy'])->name('managment.specials.destroy');

    // Event
    Route::get('events', [EventController::class, 'index'])->name('managment.events.index');
    // menu create
    Route::get('events/create', [EventController::class, 'create'])->name('managment.events.create');
    // menu store
    Route::post('events/store', [EventController::class, 'store'])->name('managment.events.store');
    // menu edit
    Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('managment.events.edit');
    // page view
    Route::get('events/{event}', [EventController::class, 'show'])->name('managment.events.show');
    // page update
    Route::put('events/{event}', [EventController::class, 'update'])->name('managment.events.update');
    // page delete
    Route::delete('events/{event}', [EventController::class, 'destroy'])->name('managment.events.destroy');

     // abouts index
     Route::get('abouts', [AboutController::class, 'index'])->name('managment.abouts.index');
     // category create
     Route::get('abouts/create', [AboutController::class, 'create'])->name('managment.abouts.create');
     // category store
     Route::post('abouts/store', [AboutController::class, 'store'])->name('managment.abouts.store');
     // category edit
     Route::get('abouts/{about}/edit', [AboutController::class, 'edit'])->name('managment.abouts.edit');
     // category update
     Route::put('abouts/{about}', [AboutController::class, 'update'])->name('managment.abouts.update');
     // category show
     Route::get('abouts/{about}', [AboutController::class, 'show'])->name('managment.abouts.show');
     // category delete
     Route::delete('abouts/{about}', [AboutController::class, 'destroy'])->name('managment.abouts.destroy');
 
     // items index
     Route::get('items', [ItemController::class, 'index'])->name('managment.items.index');
     // category create
     Route::get('items/create', [ItemController::class, 'create'])->name('managment.items.create');
     // category store
     Route::post('items/store', [ItemController::class, 'store'])->name('managment.items.store');
     // category edit
     Route::get('items/{item}/edit',[ItemtController::class, 'edit'])->name('managment.items.edit');
     // category update
     Route::put('items/{item}', [ItemController::class, 'update'])->name('managment.items.update');
     // category show
     Route::get('items/{item}', [ItemController::class, 'show'])->name('managment.items.show');
     // category delete
     Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('managment.items.destroy');
 

});
