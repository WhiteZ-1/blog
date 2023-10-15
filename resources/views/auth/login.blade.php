@extends("layout")

@section("content")
<div class="form-container">
    <form class="form" action="/login-user" method="post">
        @csrf
        <h1>Login</h1>
        
        <input name='email' type="email" value="{{ old('email') }}" placeholder="Email">
        <div>
            <span class="error"><strong>@error('email') {{$message}} @enderror</strong></span>
        </div>
        <input name='password' type="password" value="{{ old('password') }}" placeholder="Password">
        <div>
            <span class="error"><strong>@error('password') {{$message}} @enderror</strong></span>
        </div>
        <button class="submit">Submit</button>
    </form>
</div>
@endsection