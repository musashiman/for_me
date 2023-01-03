<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    //
public function index(Blog $blog)
{
    return view("blogs/index")->with(["blogs"=>$blog->getPaginatorOrder()]);
}

public function show(Blog $blog)
{
    return view("blogs/show")->with(["blog"=>$blog]);
}

public function create()
{
    return view("blogs/create");
}

public function store(Blog $blog,BlogRequest $request)
{
    $input = $request['blog'];
    $blog->fill($input)->save();
    return redirect('/blogs/'.$blog->id);
}

}