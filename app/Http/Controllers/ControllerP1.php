<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\UserListImport;

use App\Http\Requests;

class ControllerP1 extends Controller
{
    public function functionp1() {

    	return view('viewp1');

    }

    public function loadcsv() {

    	return Excel::load('Sheet1.csv', function($reader) {

    		// reader methods

		});
	}

    public function displaycsv(UserListImport $import) {

	        $results = $import->get();

	        return view($results);

    }

}
