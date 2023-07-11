{{-- @include('components.header')
@include('components.layout') --}}



 <div>
    {{-- Because she competes with no one, no one can compete with her. --}}
  


    <div class="comment-form">
                                        
        <div class="group-title"><h4>Leave A Comment</h4></div>
        

        <!--Comment Form-->
       
<form wire:submit.prevent="submit">
    @if(session()->has('message'))
    <h3 style="color: #2eb0f2">{{session()->get('message')}}</h3>
   @endif
   <input type="hidden" wire:model="hiddenId" value="{{$hiddenId}}">
            <div class="row clearfix">
                @error('username')
        <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
        @enderror
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <input type="text"  wire:model="username" name="username" placeholder="Your Name">
                </div>
                @error('email')
                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                @enderror
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <input type="email" wire:model="email" name="email" placeholder="Email" >
                </div>
                @error('title')
                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                @enderror
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <input type="text"  wire:model="title" name="title" placeholder="Topic">
                </div>
                @error('message')
                <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                @enderror
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <textarea  wire:model="message" name="message" placeholder="Type your comment"></textarea>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <button class="theme-btn btn-style-one" type="submit" ><span class="txt">Post comment</span></button>
                </div>
            </div>
</form> 
 </div> 
<br>

 <table>
     <tr>
         <th>Username</th>
         <th>Email</th>
         <th>Message</th>
         <th>Action</th>
     </tr>
     @foreach($allData as $ad)
     <tr>
     <td>{{$ad->username}} </td>
     <td>{{$ad->email}} </td>
     <td> {{$ad->message}}</td>

     <td><a href="javascript:void(0)" wire:click= "deleteForm({{$ad->id}})" style="color: red">Delete</a></td>
     </tr>
     @endforeach
 </table>
 {{-- {{$allData->links()}} --}}
 {{-- @endforeach --}}

{{-- @include('components.footer') --}}