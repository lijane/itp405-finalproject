<html>
<head>
	<title>Write a Review</title>
<!-- 	<link rel="stylesheet" 
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

	@if ( count($errors) >0)
	<div class="alert alert-danger">
		<h3>Please try again.</h3>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	@include('navigation')

<div class="container">
	<div class="title">
		<h1>Write a Review</h1>
		<form action="/reviews" method="post">
		{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label><br>
				<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
			</div><br>
			<div class="form-group">
				<label for="price">Body</label><br>
				<input type="text" name="body" id="body" class="form-control" value="{{ old('body') }}">
			</div><br>
			<div class="form-group">
				<label for="restaurant">Restaurant</label><br>
				<select name="restaurant" id="restaurant" class="form-control">
		          	@foreach ($restaurants as $restaurant)
		              @if ($restaurant->id == old('restaurant'))
		                <option value="{{ $restaurant->id }}" selected>
		            	@else
		                <option value="{{ $restaurant->id }}" >
		              @endif
		              {{ $restaurant->restaurant_name }}
		            </option>
		            @endforeach
		        </select>
			</div><br>
			<div class="form-group">
				<label for="location">Location</label><br>
				<select name="location" id="location" class="form-control">
		          	@foreach ($locations as $location)
		              @if ($location->id == old('location'))
		                <option value="{{ $location->id }}" selected>
		            	@else
		                <option value="{{ $location->id }}" >
		              @endif
		              {{ $location->location_name }}
		            </option>
		            @endforeach
		        </select>
			</div><br>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
</div>

</body>
</html>