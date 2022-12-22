<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
public function index(Blog $blogs)
{
    return view("blogs/index")->with(["blogs"=>$blogs->getPaginatorOrder()]);
}
}
