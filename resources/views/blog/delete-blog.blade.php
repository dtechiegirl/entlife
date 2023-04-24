@include('components.header')
@include('components.layout')
<form action="/blog/{{$post->slug}}" method="post">
    @csrf
    @method('delete')
    <div class="form-column mx-auto col-8 col-md-8 col-lg-8" >
        <h3 >Are you sure you want to delete post {{$post->title}}?</h3> 
        <button type="submit">Delete</button>
        <a href="/blog">Cancel</a>
    </div>
    {{-- --}}
 
</form>

@include('components.footer')