<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

require_once '../vendor/fzaninotto/faker/src/autoload.php';
use Faker;

class FakeController extends Controller
{
	private $faker;
	private $data;

	public function __construct(){
		$this->faker=Faker\Factory::create('fr_FR');
		$this->data =self::dataFacker();
		
	}
	public function getIndex(){
		// dd($this->data);
		return view('fake.index',$this->data);
	}
	public function Refresh(){
		return back();
	}
	public function dataFacker(){
		$faker = $this->faker;
		/*Initialisation de la date actuel et la date fictive*/
		$dateNow = date('Y-m-d');
		$dateFake = $faker->date($format = 'Y-m-d', $max = '2000-01-01');
		/*Initialisation des date pour le calcule de l'age*/
		$datetimeFake = date_create($dateFake);
		$datetimeNow = date_create($dateNow);
		/*calcule de l'age*/
		$interval = date_diff($datetimeFake, $datetimeNow);
		$age = $interval->format('%y ans');
		/*generation des valeur de fackeur*/
		$name = $faker->name;
		$address = $faker->address;
		$mail  = $faker->freeEmail;
		$phone = $faker->phoneNumber;
		$text = $faker->text;
		/*on recupere toute les valeur*/
		$data = ['name'=>$name,'address'=>$address,'email'=>$mail,'phone'=>$phone,'birth'=>$dateFake,'old'=>$age,'text'=>$text,];

		
		return $data;
	}
	public function makeDataToJson(Request $request){
		$input = $request->only('name','address','mail','phone','birth','old','text');
		
		$fakeJson =json_encode($input);
		$fileName = 'profil.json';
		$fileToJSon=fopen($fileName, 'w+');
		fwrite($fileToJSon, $fakeJson);
		fclose($fileToJSon);
		dd($fakeJson);
	}

}
