<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Blog::orderBy('updated_at', 'DESC')->get();
        return view('blog.view-blog', ['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('blog.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'max:500',
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'content' => 'required',
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.'  . $request->picture->extension();
        //    dd($newImageName);
        $request->picture->move(public_path('images'), $newImageName);

        // dd($slug);
        Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createslug(Blog::class,  'slug', $request->title),
            'picture' =>  $newImageName,
            'content' => $request->input('content'),
            // 'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your Post Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        return view('blog.show-blog')->with('post', Blog::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $id = Blog::find($id);
        return view('blog.edit-blog')->with('post', $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable',
            'description' => 'max:500',
            'picture' => 'nullable|mimes:jpg,png,jpeg|max:5048',
            'content' => 'nullable',
        ]);
     
 

        //    $newImageName = uniqid() . '-' . $request->title . '.'  . $request->picture->extension();    
        //    dd($newImageName);
        //       $request->picture->move(public_path('images'), $newImageName);
        $post = Blog::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
          $post->content = $request->input('content');
        if ($request->hasFile('image')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/images' . $filename);
            $post->picture = $file;
        }
        
        // $post->create(
          
        // ); 
        $post->save();
        return redirect('/blog')->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($slug)
    {
        $post = Blog::where('slug', $slug)->first();
        return view('blog.delete-blog', ['post' => $post]);
    }
    public function destroy($slug)

    {
        //
        $post = Blog::where('slug', $slug);
        $post->delete();
        return redirect('/blog')->with('message', 'Post Deleted Successfully');
    }
}
