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

	if(isset($_GET['pages'])){
		$input=$_GET['pages'];

		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($input);

		return View::make('loremipsum') -> with('paragraphs',$paragraphs);
	}

	else{
		return View::make('loremipsum');
	}
});

//Route to Users
Route::get('/users', function()
{

	if(isset($_GET['subject'])){
		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();
		$numusers=$_GET['subject'];

		for($i=0;$i<$numusers;$i++) {
			$person[$i]["name"] = $faker->name;
			$person[$i]["address"] = $faker->address;
			$person[$i]["text"] = $faker->text;
		}

		return View::make('users') -> with('person',$person) -> with('numusers',$numusers);
	}

	else{
		return View::make('users');
	}
});
