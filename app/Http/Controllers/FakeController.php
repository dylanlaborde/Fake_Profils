<?php

namespace App\Http\Controllers;
require_once '../vendor/fzaninotto/faker/src/autoload.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Faker;
use App\Http\Controllers\DataController;




class FakeController extends Controller
{
	
	public $data;

	public function __construct(){
		$this->data =DataController::getFake(mt_rand()); 
		
	}
	public function getIndex(){
		 return view('fake.index',FakeController::getData());
	}
	public function getData(){
		return $this->data;
	}
	public function Refresh(){
		
	}

}
