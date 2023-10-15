@extends("layout")
@section("content")
<h2>{{$post->title}}</h2>
<div class="post-card">
    <p style="font-size: large; font-weight:bolder; margin-bottom:1rem;">By: {{$post->user->username}}</p>
    <p style="margin-bottom:1rem">{{$post->text}}</p>
</div>
    @if (Auth::id() == $post->user->id)
    <div class="utils-btns">
        <a href="/edit/{{$post['id']}}">
            <button style="background-color:bisque">Edit</button>
        </a> 
        <form action="/delete/{{$post['id']}}" method="post">
            @csrf
            <button style="background-color:bisque">Delete</button>
        </form>
    </div>
    @endif
    <hr style="margin-top: 2rem">

@endsection
