<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
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

      <h1>My Account</h1>
      Hello, {{ $user->email }}.
      <p>You last logged in at: {{ $user->updated_at }}</p>
    </div>
  </body>
</html>
