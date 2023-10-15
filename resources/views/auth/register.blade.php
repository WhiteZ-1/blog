@extends("layout")

@section("content")
<div class="form-container">
    <form class="form" action="/register-user" method="post">
        @csrf
        <h1>Register</h1>

        <input name="username" type="text" value="{{ old('username') }}" placeholder="Username">
        <span class="error"><strong>@error('username'){{$message}} @enderror</strong></span>

        <input name="email" type="email" value="{{ old('email') }}"  placeholder="Email">
        <span class="error"><strong>@error('email'){{$message}} @enderror</strong></span>

        <input name="password" type="password" value="{{ old('password') }}" placeholder="Password">
        <span class="error"><strong>@error('password') {{$message}} @enderror</strong></span>
        
        <button class="submit">Submit</button>
    </form>
</div>
@endsection