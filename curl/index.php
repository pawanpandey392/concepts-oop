<?php

function curl()
{
	try 
	{
		$apiUrl = 'https://newsapi.org/v1/articles?source=espn-cric-info&sortBy=top&apiKey=c8fdb806a4774716a2a01f7ac06e5865';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $apiUrl);
		// curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec ($ch);
		curl_close ($ch);

		if ( isset( $response->error ) ) {
			print_r($cron_response);
		} else {
			return json_decode( $response );
		}

	} catch (Exception $e) {
		return $e->getMessage();
	}
}


$response = curl();

echo '<pre>';print_r($response);die;