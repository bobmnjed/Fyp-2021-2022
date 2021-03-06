<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\PhonebrandsComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ThreeDComponent;

use App\Http\Controllers\PdfController;


use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\User\UserChatComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserEditProfileComponent;


use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminChatComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdminSAComponent;


use App\Models\Message;
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

Route::get('/Contactus',ContactusComponent::class)->name('contact');

Route::get('/Phonebrands',PhonebrandsComponent::class);

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/Cart',CartComponent::class)->name('product.cart');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.categories');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');

Route::get('/3d',ThreeDComponent::class)->name('3d');

Route::get('generate-pdf', [PdfController::class, 'generatePDF']);


// Route::match(['get', 'post'], '/botman', 'BotManController@handle');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For User or Costumer 
Route::middleware(['auth:sanctum','verified'])->group(function(){
        Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
        Route::get('/user/orders',UserOrdersComponent::class)->name('user.orders');
        Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');
        Route::get('/user/review/{order_item_id}',UserReviewComponent::class)->name('user.review');
        Route::get('/user/chat',UserChatComponent::class)->name('user.chat');
        Route::get('delete_chat', function () {
                        Message::truncate();
                        return redirect()->route('user.chat');
               })->name('delete_chat');
        Route::get('/user/change-password',UserChangePasswordComponent::class)->name('user.changepassword');
        Route::get('/user/profile',UserProfileComponent::class)->name('user.profile');
        Route::get('/user/profile/edit',UserEditProfileComponent::class)->name('user.editprofile');

}); 
        
//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
        
        Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');  
        Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
        Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
        Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
        Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
        Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
        Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
        Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');  
        Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails'); 
        Route::get('/admin/chat',AdminChatComponent::class)->name('admin.chat');
        Route::get('delete_chat', function () {
                        Message::truncate();
                        return redirect()->route('admin.chat');
                })->name('delete_chat');
        Route::get('/admin/contactus',AdminContactComponent::class)->name('admin.contact');
        Route::get('/admin/settings',AdminSettingComponent::class)->name('admin.settings');
        Route::get('/admin/sa',AdminSAComponent::class)->name('admin.sentimentanalysis');

});




