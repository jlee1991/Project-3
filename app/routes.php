<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

//Route to Lorem Ipsum
Route::get('/loremipsum', function()
{

	$input=$_GET['paragraphs'];

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($input);

	return View::make('loremipsum') -> with('paragraphs',$paragraphs) ->with('input',$input);
});

//Route to Users
Route::get('/users', function()
{

	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();
	$input=99;

	for($i=1;$i<$input;$i++) {
		$person[$i]["name"] = $faker->name;
		$person[$i]["address"] = $faker->address;
		$person[$i]["text"] = $faker->text;
	}

	return View::make('users') -> with('person',$person);
	//-> with('input',$input) ;
});
