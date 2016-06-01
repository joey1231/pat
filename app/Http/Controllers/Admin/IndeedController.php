<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Libraries\Indeed as IndeedLibrary;
Use App\Models\API\Indeed;
use App\Models\Components\Job;

class IndeedController extends Controller
{
    //
    public function index(){
		$inded =Indeed::first();
		$response = IndeedLibrary::ApiCall($inded);
		
		$dataParse = \Parser::xml($response);
		IndeedLibrary::processResult($dataParse);
		dd($dataParse);
	}
}
