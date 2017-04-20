<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="pasword">Password</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
      </form>
      <br>
      <p>
        Continue as <a href="/reviews-guest">guest</a>.
      </p>
    </div>
  </body>
</html>
