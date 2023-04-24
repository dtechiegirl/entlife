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
    public $topic;
    public $message;
  
    public function submit(){
        $validateData = $this->validate([
        'username'=> 'required|min:3|max60',
        'email'=> 'required|email',
        'topic'=> 'required',
        'message'=> 'required',
        ]);
        Comment::create($validateData);
    }
    public $slug;
    public function mount(Blog $slug){
        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.blog.show');
    }
}
