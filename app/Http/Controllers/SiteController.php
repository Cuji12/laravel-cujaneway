<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $recentPosts = DB::table('posts')->limit(5)->get();

        return view('site.index', ['recentPosts' => $recentPosts]);
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutSite() 
    {
        return view('site.about-this-site');
    }
}
