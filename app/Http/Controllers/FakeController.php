<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once '../vendor/fzaninotto/faker/src/autoload.php';
use Faker;

class FakeController extends Controller
{

	public function __construct(){

	}
	public function getIndex(){
		$faker = Faker\Factory::create('fr_FR');
		$faker->seed();
		$dateFake = $faker->date($format = 'Y-m-d', $max = 'now');
		$dateNow = date('Y-m-d');

		$datetimeFake = date_create($dateFake);
		$datetimeNow = date_create($dateNow);
		$interval = date_diff($datetimeFake, $datetimeNow);
		$age = $interval->format('%y ans');
		
		// echo mt_srand((int) 242);
		$fakeToJson = ['name'=>$faker->name,'address'=>$faker->address,'email'=>$faker->freeEmail,'birth'=>$dateFake,'old'=>$age,'text'=>$faker->text];
		
 
		$fakeJson =json_encode($fakeToJson);

		// dd($fakeJson);

		// require '../composer.json';
		// var_dump($fakeJson);		
		// $test = json_decode($fakeJson);
		// dd($test);
		$fileName = 'profil.json';
		$testToJSon=fopen($fileName, 'w+');
		fwrite($testToJSon, $fakeJson);
		fclose($testToJSon);

		
		
		
		
		
		return view('fake.index',['fakers'=>$faker,'dateFakes'=>$dateFake,'ages'=>$age]);
	}


}
