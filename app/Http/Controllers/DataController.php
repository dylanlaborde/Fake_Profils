<?php

namespace App\Http\Controllers;
require_once '../vendor/fzaninotto/faker/src/autoload.php';

use Illuminate\Http\Request;
use Faker;


class DataController extends Controller
{

	public static function getFake($seed){

		$faker=Faker\Factory::create('fr_FR');
		$rand = $seed;
		$dateNow = date('Y-m-d');
		$faker->unique()->seed($rand);
		$dateFake = $faker->date($format = 'Y-m-d', $max = '2000-01-01');
		$datetimeFake = date_create($dateFake);
		$datetimeNow = date_create($dateNow);
		$interval = date_diff($datetimeFake, $datetimeNow);
		$age = $interval->format('%y ans');


		return [
		'name' => $faker->name,
		'address'=> $faker->address,
		'email' => $faker->freeEmail,
		'phone'=>$faker->phoneNumber,
		'birth'=>$dateNow,
		'text'=>$faker->text,
		'old'=>$age,
		'seed'=>$rand,

		];
	}
}
