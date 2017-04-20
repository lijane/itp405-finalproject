<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
          <!-- Error Flash Message -->
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @include('navigation')

      <h1>Sign Up</h1>
      <p>
        Already have an account? Please <a href="/login">Login</a>.
      </p>
      <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" value="{{Request::old('email')}}">
        </div>
        <div class="form-group">
          <label for="pasword">Password</label>
          <input type="password" id="password" name="password" class="form-control" value="{{Request::old('password')}}">
        </div>
<!--         <div class="form-group">
          <label for="pasword_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{Request::old('password_confirmation')}}">
        </div> -->
        <input type="submit" value="Sign Up" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>
