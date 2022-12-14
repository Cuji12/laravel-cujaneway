<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Post;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $recentPosts = Post::all()->take(5);

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cv() 
    {
        return view('site.cv');
    }

    /**
     * Download PDF.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadCvPDF() 
    {
        return Response::download("pdf/CV-Cu-Janeway.pdf", "CV-Cu-Janeway.pdf");
    }
}
