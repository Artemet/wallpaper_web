<?php

use App\Models\WallpaperCard;
use \App\Http\Controllers\CompanyImageController;
use \App\Http\Controllers\DeviceChoiceController;
use \App\Http\Controllers\WallpaperInformationController;
use \App\Http\Controllers\WallpaperThemesController;
use \App\Http\Controllers\AchievementController;
use \App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//Route::get('/', [PageController::class, 'all_wallpaper'])->name("/");
Route::get('/home', function (){
  return view("home");
})->name("home");
Route::get('home/test', [PageController::class, 'test'])->name("test");
Route::get('home/in_card', [PageController::class, 'in_card'])->name("in_card");
Route::get('/home/help', function (){
    return view("pages/help");
})->name("help");
Route::get('/home/themes', [PageController::class, 'wallpaper_themes']);
Route::get('/home/all_device', [PageController::class, 'device_choice'])->name("all_device");
Route::get('/home/instruction', function (){
    return view("pages/instruction");
})->name("instruction");
Route::get('/home/achievements', [PageController::class, 'achievement'])->name("achievements");
Route::get('/home/about_us', [PageController::class, 'about_us'])->name("about_us");
Route::get('/home/my_account', function (){
    return view("pages/account");
})->name("account");
Route::get('/home/wallpaper_engine', function (){
    return view("company_pages/wallpaper_engine");
})->name("wallpaper_engine");
Route::get('home/zedge', function (){
    return view("company_pages/zedge");
})->name("zedge");
Route::get('home/wallpaper_life', function (){
    return view("company_pages/wallpaper_life");
})->name("wallpaper_life");
Route::get('home/pinterest', function (){
    return view("company_pages/pinterest");
});
Route::get("home/instagram", function (){
   return view("company_pages/instagram");
});
Route::get("home/google", function (){
    return view("company_pages/google");
});
Route::get("", [PageController::class, 'chat_message'])->name("chat_message");
Route::get("home/payment_method", [PageController::class, 'payment_methods'])->name("payment_methods");
Route::get("home/wallpaper_view", [PageController::class, 'wallpaper_information'])->name("wallpaper_information");
Route::get('home/company', [PageController::class, 'all_company'])->name("company_images");
Route::get('home/all_wallpaper', [PageController::class, 'all_wallpaper'])->name("all_wallpaper");
# device
Route::get("home/phone", [PageController::class, 'phone_wallpapers'])->name("phone_wallpapers");
Route::get("home/tablet", [PageController::class, 'tablet_wallpapers'])->name("tablet_wallpapers");
Route::get("home/computer", [PageController::class, 'computer_wallpapers'])->name("computer_wallpapers");
Route::get("home/laptop", [PageController::class, 'laptop_wallpapers'])->name("laptop_wallpapers");
# price
Route::get("home/payment", [PageController::class, 'payment_wallpapers'])->name("payment_wallpapers");
#user_pages
Route::post("user/send_message", [PageController::class, 'send_message'])->name("send_message");
Route::post("user/message_problem", [PageController::class, 'message_problem'])->name("message_problem");
#wallpaper_theme
Route::get("home/theme", [PageController::class, 'wallpaper_theme'])->name("wallpaper_theme");
