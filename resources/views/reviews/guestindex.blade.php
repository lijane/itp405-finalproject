<html>
<head>
	<title>Ramen Reviews (Guest)</title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style type="text/css">
/*    .label {
        background-color: #f4f4f4;
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        margin-bottom: 10px;
    }*/

	</style>
</head>
<body>

<div class="container">
	
	@if (session ('successStatus'))
	<div class="alert alert-success" role="alert">
		{{ session('successStatus') }}
	</div>
	@endif

	<h1>Ramen Reviews (Guest)</h1>
	<a href="/reviews/new" class="btn btn-primary"> Write a Review </a>

        @foreach($reviews as $review)
        <div>
            <h3>{{ $review->title }}</h3>
            <p>Restaurant: {{ $review->restaurant_name }}</p>
            <p>Location: {{ $review->location_name }}</p>
            <p>Body: {{ $review->body }}</p>
            <hr>
        </div>
        @endforeach

</div>

</body>
</html>








