<?php	namespace App\Libraries;
use App\Models\Components\Job;

class Indeed{
	
	public static function ApiCall($indeed){
		
		$http = "http://api.indeed.com/ads/apisearch?publisher=".env('INDEED_API_KEY')."&q=".urlencode($indeed->q)."&l=".urlencode($indeed->l)."&sort=".urlencode($indeed->sort)."&radius=".urlencode($indeed->radius)."&st=".urlencode($indeed->st)."&jt=".urlencode($indeed->jt)."&start=".urlencode($indeed->start)."&limit=".urlencode($indeed->limit)."&fromage=".urlencode($indeed->fromage)."&filter=".urlencode($indeed->filter)."&latlong=".urlencode($indeed->latlong)."&co=".urlencode($indeed->co)."&chnl=".urlencode($indeed->chnl)."&userip=".urlencode($indeed->userip)."&useragent=".urlencode($indeed->useragent)."&v=2";
		
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL,$http);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($handle);
		return $response;
	}
	public static function processResult($result){
		
		foreach($result['results']['result'] as $k=>$job){
			$j = Job::where('jobkey',$job['jobkey'])->first();
			if(!$j){
				$j = new Job;
				$j->source_api='indeed';
				$j->fill($job);
				$j->save();
			}
		}
	}
}