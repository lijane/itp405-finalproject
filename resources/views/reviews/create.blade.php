<html>
<head>
	<title>Write a Review</title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

	@if ( count($errors) >0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	@include('navigation')

	<h1>Write a Review</h1>
	<form action="/reviews" method="post">
	{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="price">Body</label>
			<input type="text" name="body" id="body" class="form-control" value="{{ old('body') }}">
		</div>
		<div class="form-group">
			<label for="restaurant">Restaurant</label>
			<select name="restaurant" id="restaurant" class="form-control">
				@foreach ($restaurants as $restaurant)
				<option value="{{ $restaurant->id }}">{{ $restaurant->restaurant_name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="location">Location</label>
			<select name="location" id="location" class="form-control">
				@foreach ($locations as $location)
				<option value="{{ $location->id }}">{{ $location->location_name }}</option>
				@endforeach
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Create</button>
	</form>
</div>

</body>
</html>