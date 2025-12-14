<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $userId = Auth::user()->id;
        $blogs = Blog::orderBy("created_at","desc")->where("user_id",$userId)->paginate(10);
        return view("blog.index")->with("blogs",$blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','string','max:100'],
            'content'=>['required','string']
        ]) ;
        //

        $user = Auth::id();
        $blog = new Blog(['title'=>$request->title,'content'=>$request->content,'user_id'=>$user]);
        $blog->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //

        return view('blog.edit')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title'=>['required','string','max:100'],
            'content'=>['required','string','max:500']
        ]);

        $blog->update($validated);
       
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
