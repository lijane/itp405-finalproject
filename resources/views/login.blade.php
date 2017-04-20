<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    @if (session('successStatus'))
      <div class="alert alert-success" role="alert">
        {{  session('successStatus') }}
      </div>
    @endif
    <div class="container">
      @include('navigation')

      <h1>Login</h1>
      <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="pasword">Password</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
      </form>
      <br>
      <p>
        Dont have an account? Please <a href="/signup">Signup</a>.
      </p>
    </div>
  </body>
</html>
