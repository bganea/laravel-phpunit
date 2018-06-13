<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHPUnitController extends Controller {
    public function index(){
    	echo "echo from controller";
	}

	public function jsonMatch(){
    	$result=[
			'created' => true,
		];
		return response(json_encode($result),201);
	}
}
