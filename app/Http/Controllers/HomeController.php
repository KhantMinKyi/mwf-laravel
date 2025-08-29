<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAboutUsPage()
    {
        return view('guest.about_us');
    }
    public function getNewsPage()
    {
        return view('guest.news');
    }
    public function getCommitteePage()
    {
        return view('guest.committee');
    }
}
