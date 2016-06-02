<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
Use App\Libraries\Github as GithubLibrary;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Models\API\Github;

class GithubController extends Controller
{
     //
    public function index(){
		$inded =Github::first();
		$response = GithubLibrary::ApiCall($inded);
		
		$dataParse = \Parser::json($response);
		GithubLibrary::processResult($dataParse);
		dd($dataParse);
	}
}
