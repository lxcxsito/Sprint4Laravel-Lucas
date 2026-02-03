<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $homeVideos = [
             'videos/homevideo3.mp4',
        ];
        $randomVideo = $homeVideos[array_rand($homeVideos)];
        return view('home' , compact('randomVideo'));
    }
}
?>