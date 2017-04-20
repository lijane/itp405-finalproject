<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Review;
use App\Restaurant;
use App\Location;
use Auth;


class ReviewController extends Controller
{
    public function destroy($reviewID){

    $review = Review::find($reviewID);
    $review->delete();

    	return redirect ('/reviews')
    		->with('successStatus','Review was deleted successfully!');
    }

    public function create(){

        $restaurants = Restaurant::orderBy('restaurant_name')->get();
        $locations = Location::orderBy('location_name')->get();

    	return view ('reviews.create',[
    		'restaurants' => $restaurants,
            'locations' => $locations
    	]);
    }

    public function store(Request $request){
    	$validation = Validator::make($request->all()/*[
    		'title' => request('title'),
    		'price' => request ('price'),
    		'artist' => request ('artist')    		
    	]*/,[
    		'title' => 'required',
    		'body' => 'required',
    		'restaurant' => 'required',
            'location' => 'required'
    	]);

    	if ($validation->passes()){

            $review = new Review();
            $review->title = request('title');
            $review->body = request('body');
            $review->restaurant_id = request('restaurant');
            $review->location_id = request('location');
            $review->save();

    		return redirect('/reviews')
    			->with('successStatus','Review was created successfully!');
    	}

    	else {
    		return redirect ('/reviews/new')
    			->withInput()
    			->withErrors($validation);
    	}

    }

    public function index(){

        // $reviews = Review::all();
        $reviews = Review::orderBy('id','desc')->get();
        
        // $restaurants = Restaurant::orderBy('id')->get();
        // var_dump($restaurants);

        return view('reviews.index',[
        	'reviews' => $reviews
        ]); 
    }

    public function admin(){

        $reviews = Review::orderBy('id','desc')->get();

        return view('admin',[
            'reviews' => $reviews,
            'user' => Auth::user()
        ]);  
    }
}











