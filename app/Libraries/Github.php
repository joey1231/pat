<?php	namespace App\Libraries;
use App\Models\Components\Job;

class Github{
	
	public static function ApiCall($github){
		$http="https://jobs.github.com/positions.json?description=".urlencode($github->description)."&location=".urlencode($github->location);
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL,$http);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($handle);
		return $response;
	}
	
	public static function processResult($result){
		
		foreach($result as $k=>$job){
			
			$j = Job::where('jobkey',$job['id'])->first();
			if(!$j){
				$j = new Job;
				$j->jobtitle=$job['title'];
				$j->type=$job['type'];
				$j->company=$job['company'];
				$j->how_to_apply=$job['how_to_apply'];
				$j->formattedLocation=$job['location'];
				$j->company_url=$job['company_url'];;
				$j->date=$job['created_at'];
				$j->snippet=$job['description'];
				$j->url=$job['url'];
				$j->company_logo=$job['company_logo'];
				$j->jobkey=$job['id'];
				$j->formattedLocationFull=$job['location'];
				$j->source_api='github';
				$j->save();
			}
		}
	}
}