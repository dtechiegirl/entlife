<?php

namespace App\Http\Livewire\Blog;


use Livewire\Component;
use App\Models\Blog;
use App\Models\Comment;
// use V

class Show extends Component
{
    public $username;
    public $email;
    public $title;
    public $message;
    public $hiddenId;
    public $allData = [];
  
    public function submit(){
        $validateData = $this->validate([
        'username'=> 'required|min:3|max:250',
        'email'=> 'required|email',
        'title'=> 'required',
        'message'=> 'required'
        ]);
        $blog = Blog::get();
        // dd($blog);
        $blog->createcomment()->create($validateData);
        // Comment::create($validateData);
        session()->flash('message', 'Comment Sent Successfully');
    }
    public $slug;
    public function mount(Blog $slug){
        $this->slug = $slug;
    }
    // public function editForm($id){
    //     $singleData = Comment::find($id);
    //     $this->username = $singleData->username;
    //     $this->email = $singleData->email;
    //     $this->title = $singleData->title;
    //     $this->message = $singleData->message;
    //     $this->hiddenId = $singleData->id;

    // }
    public function deleteForm($id){
      $delComment =  Comment::where('id', $id);
      $delComment->delete();
      session()->flash('message', 'Comment Deleted Successfully');

    }
    public function render()
    {
        // COMMENT BELONGS TO AND HAS MANY
        $this->allData = Comment::all();
        return view('livewire.blog.show');
    }
}
