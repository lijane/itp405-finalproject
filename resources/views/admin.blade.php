<html>
<head>
	<title>Ramen Reviews</title>
	<!-- <link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

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
      margin: 50px;
  }

  .title {
    margin-left: 50px;
}

.label {
 background-color: rgba(255,255,255,1);
 padding-left: 20px;
 padding-right: 20px;
 padding-bottom: 10px;
 padding-top: 5px;
 margin-left: 40px;
 margin-right: 40px;
 margin-bottom: 20px;
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
</style>
</head>
<body>

    <!-- Successful Log In Message -->
    @if (session ('successLogIn'))
    <div class="alert alert-success" role="alert">
        <h3>Welcome back!</h3>
        {{ session('successLogIn') }}
    </div>
    @endif

    <!-- Review Create Success Message -->
    @if (session ('successCreate'))
    <div class="alert alert-success" role="alert">
        {{ session('successCreate') }}
    </div>
    @endif

    <!-- Review Delete Success Message -->
    @if (session ('successDelete'))
    <div class="alert alert-success" role="alert">
        {{ session('successDelete') }}
    </div>
    @endif

    @include('navigation')

    <div class="container">
        <div class="title">
           <h1>Ramen Reviews – {{ $user->email }}</h1>
           <a href="/reviews/new" class="btn btn-primary"> Write a Review </a>
           <br><br>
       </div>
       @foreach($reviews as $review)
       <div class="label">
        <h3>{{ $review->title }}</h3>
        <p style="font-style: italic">{{ $review->restaurant->restaurant_name }} – {{ $review->location->location_name }}</p>
        <p>{{ $review->body }}</p>
        <p><a href ="/reviews/{{ $review->id }}/delete" class="btn btn-primary">Delete</a></p>
    </div>
    @endforeach
</div>
</body>
</html>








