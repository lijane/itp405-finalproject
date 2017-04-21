<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<style type="text/css">
    body {
        font-family: avenir;
        padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        background-color: #F9B67F;
        }

    a {
      text-decoration: none;
      color: black;
    }

    .container {
      background-color: white;
      margin-top: 50px;
      margin-bottom: 50px;
      margin-left: 90px;
      margin-right: 90px;
    }

    .title {
      margin-left: 50px;
      padding-top:20px;
      padding-bottom:20px;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
        touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
      }

  .btn-primary {
    color: #fff;
    background-color: #3e3d3d;
    /*border-color: #2e6da4;*/ 
  }
  .btn-primary:focus,
  .btn-primary.focus {
    color: #fff;
    background-color: #000;
    /*border-color: #122b40;*/
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #000;
    /*border-color: #204d74;*/
  }
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #000;
    /*border-color: #204d74;*/
  }
  .btn-primary:active:hover,
  .btn-primary.active:hover,
  .open > .dropdown-toggle.btn-primary:hover,
  .btn-primary:active:focus,
  .btn-primary.active:focus,
  .open > .dropdown-toggle.btn-primary:focus,
  .btn-primary:active.focus,
  .btn-primary.active.focus,
  .open > .dropdown-toggle.btn-primary.focus {
    color: #fff;
    background-color: #204d74;
    /*border-color: #122b40;*/
  }
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    background-image: none;
  }
  .btn-primary.disabled:hover,
  .btn-primary[disabled]:hover,
  fieldset[disabled] .btn-primary:hover,
  .btn-primary.disabled:focus,
  .btn-primary[disabled]:focus,
  fieldset[disabled] .btn-primary:focus,
  .btn-primary.disabled.focus,
  .btn-primary[disabled].focus,
  fieldset[disabled] .btn-primary.focus {
    background-color: #337ab7;
    /*border-color: #2e6da4;*/
  }
  .btn-primary .badge {
    color: #337ab7;
    background-color: #fff;
  }

  .alert {
  padding: 15px;
  margin-bottom: 20px;
  margin-left: 100px;
  margin-right:100px;
  border: 1px solid transparent;
  border-radius: 4px;
  }
  .alert h4 {
    margin-top: 0;
    color: inherit;
  }
  .alert .alert-link {
    font-weight: bold;
  }
  .alert > p,
  .alert > ul {
    margin-bottom: 0;
  }
  .alert > p + p {
    margin-top: 5px;
  }
  .alert-dismissable,
  .alert-dismissible {
    padding-right: 35px;
  }
  .alert-dismissable .close,
  .alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
  .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
  }
  .alert-success hr {
    border-top-color: #c9e2b3;
  }
  .alert-success .alert-link {
    color: #2b542c;
  }
  .alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
   }
  .alert-danger hr {
    border-top-color: #e4b9c0;
  }
  .alert-danger .alert-link {
    color: #843534;
  }
</style>

  </head>
  <body>
<!--     @if (session('successStatus'))
      <div class="alert alert-success" role="alert">
        {{  session('successStatus') }}
      </div>
    @endif -->

    <!-- Login Error Message -->
    @if (session ('errorLogIn'))
    <div class="alert alert-danger" role="alert">
        {{ session('errorLogIn') }}
    </div>
    @endif

    <!-- Log Out Success Flash Message -->
    @if (session('successLogOut'))
      <div class="alert alert-success" role="alert">
        {{  session('successLogOut') }}
      </div>
    @endif

    <!-- Signup Success Flash Message -->
    @if (session('successSignUp'))
      <div class="alert alert-success" role="alert">
        {{  session('successSignUp') }}
      </div>
    @endif

    @include('navigation')
    
    <div class="container">
      <div class="title">
      <h1>Login</h1>
        <form method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{Request::old('email')}}" >
          </div>
          <br>
          <div class="form-group">
            <label for="pasword">Password</label>
            <input type="password" id="password" name="password" class="form-control" value="{{Request::old('password')}}">
          </div>
          <br>
          <input type="submit" value="Login" class="btn btn-primary">
        </form>
        <br>
        <p>
          Dont have an account? Please <a href="/signup" class="btn btn-primary">Signup</a>
        </p>
      </div>
    </div>
  </body>
</html>
