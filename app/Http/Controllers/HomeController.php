<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAboutUsPage()
    {
        return view('guest.about_us');
    }
    public function getNewsPage()
    {
        $posts = Post::where('post_is_active',1)->paginate(6);
        return view('guest.news',compact('posts'));
    }
    public function getCommitteePage()
    {
        return view('guest.committee');
    }
    public function getNewsDetailPage($id)
    {
        $post = Post::find($id);
        return view('partial_view.guest.news_detail',compact('post'));
    }
}
