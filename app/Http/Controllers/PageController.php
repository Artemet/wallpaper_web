<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Achievement;
use App\Models\ChatMessage;
use App\Models\CompanyImage;
use App\Models\DeviceChoice;
use App\Models\PaymentMethod;
use App\Models\WallpaperCard;
use App\Models\WallpaperInformation;
use App\Models\WallpaperThemes;
use \App\Models\Message;
use App\Models\ProblemMessage;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class PageController extends Controller
{
    public function all_wallpaper(){
        $wallpaper = WallpaperCard::get();
//        dd($wallpaper);
        return view('pages.all_wallpaper')
            ->with("wallpaper", $wallpaper);
    }
    public function test(){
        $test = WallpaperCard::where("category", 1)->get();
        return view('test')
            ->with("test", $test);
    }
    public function wallpaper_themes(){
        $wallpaper_themes = WallpaperThemes::get();
        return view('pages/themes')
            ->with("wallpaper_themes", $wallpaper_themes);
    }
    public function wallpaper_information(){
        $wallpaper_themes = WallpaperInformation::get();
//        dd($wallpaper_view);
        return view('pages/wallpaper_information')
            ->with("wallpaper_view", $wallpaper_themes);
    }
    public function device_choice(){
        $device_choices = DeviceChoice::get();
        return view('pages/all_device')
            ->with('device_choices', $device_choices);
    }
    public function all_company(){
        $company_images = CompanyImage::get();
//        dd($company_img);
        return view('company_pages.all_company')
            ->with("company_images", $company_images);
    }
    public function about_us(){
        $about_us = AboutUs::get();
        return view('pages.about_us')
            ->with("about_us", $about_us);
    }
    public function achievement(){
        $achievements = Achievement::get();
        return view('pages/achievements')
            ->with("achievements", $achievements);
    }
    public function payment_methods(){
        $payment_method = PaymentMethod::get();
        return view('pages/payment_method')
            ->with("payment_method", $payment_method);
    }
    #device
    public function phone_wallpapers(){
        $phone = WallpaperCard::where("category", 1)->get();
        return view('device/phone')
            ->with("phone", $phone);
    }
    public function tablet_wallpapers(){
        $tablet = WallpaperCard::where("category", 2)->get();
        return view('device/tablet')
            ->with("tablet", $tablet);
    }
    public function computer_wallpapers(){
        $computer = WallpaperCard::where("category", 3)->get();
        return view('device/computer')
            ->with("computer", $computer);
    }
    public function laptop_wallpapers(){
        $laptop = WallpaperCard::where("category", 4)->get();
        return view('device.laptop')
            ->with("laptop", $laptop);
    }
    #price
    public function payment_wallpapers(){
        $payment = WallpaperCard::where("category", 5)->get();
        return view('price.payment')
            ->with("payment", $payment);
    }
    # in_card
    public function in_card(Request $request){
        $id = $request->input("id");
        $in_card = WallpaperCard::where("id", $id)->first();
        return view('pages.in_card')
            ->with("in_card", $in_card);
    }
    public function send_message(Request $request){
        $send_message = $request->input("message");
        $message = new Message();
        $message->message_us = $send_message;
        $message->save();
        return redirect()->route("home");
    }
    #problem_page
    public function message_problem(Request $request){
        $send_problem_email = $request->input("email");
        $send_problem_message = $request->input("problem_message");
        $problem_message = new ProblemMessage();
        $problem_message->email = $send_problem_email;
        $problem_message->message = $send_problem_message;
        $problem_message->save();
        return redirect()->route("home");
    }
    #chat_message
    public function chat_message(Request $request){
        $send_chat_message = $request->input("chat_message");
        $chat_message = new ChatMessage();
        $chat_message->chat_message = $send_chat_message;
        $chat_message->save();
        return redirect()->route("chat_message");
    }
    #theme
    public function wallpaper_theme(Request $request){
        $ctg = $request->input("ctg");
        $theme = WallpaperCard::where("category", $ctg)->get();
        return view("wallpaper_theme.theme")
            ->with("theme", $theme);
    }
}
