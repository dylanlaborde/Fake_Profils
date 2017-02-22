<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once '../vendor/fzaninotto/faker/src/autoload.php';
use Faker;

class FakeController extends Controller
{
	public function getIndex(){
		$faker = Faker\Factory::create('fr_FR');
		$dateFake = $faker->date($format = 'Y-m-d', $max = 'now');
		$dateNow = date('Y-m-d');
    
		$datetimeFake = date_create($dateFake);
		$datetimeNow = date_create($dateNow);
		$interval = date_diff($datetimeFake, $datetimeNow);
		$age = $interval->format('%y ans');
		
    	 return view('fake.index',['fakers'=>$faker,'dateFakes'=>$dateFake,'ages'=>$age]);
	}

}
