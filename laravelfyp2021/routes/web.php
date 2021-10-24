<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\PhonebrandsComponent;
use App\Http\Livewire\CartComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);


Route::get('/shop',ShopComponent::class);

Route::get('/Aboutus',AboutusComponent::class);

Route::get('/Contactus',ContactusComponent::class);

Route::get('/Phonebrands',PhonebrandsComponent::class);

Route::get('/Cart',CartComponent::class);