@extends("layout")
@section("content")
    <h2>Your Post</h2>
    @if (count($posts)== 0)
        <h2>No posts</h2> 
    @endif
    @foreach ($posts as $post)
         <div class="post-card">
            <h3 style="font-size: larger">
                <a href="/post/{{$post['id']}}">{{$post->title}}</a>
            </h3>
            <p style="margin-bottom: 1rem">{{$post->text}}</p>
        </div>
        <div class="utils-btns">
            <a href="/edit/{{$post['id']}}">
                <button style="background-color:bisque">Edit</button>
            </a> 
            <form action="/delete/{{$post['id']}}" method="post">
                @csrf
                <button style="background-color:bisque">Delete</button>
            </form>
            <hr style="margin-top: 2rem">
        </div>
        
        @endforeach
@endsection