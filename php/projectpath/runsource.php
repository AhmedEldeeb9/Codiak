<?php
//Import the SDK 
//Import the SDK 
require_once __DIR__.'\sdk\index.php';

//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => '1a3354ff35f8061cc1d7022dbc3cdbe6ce8ddbf1', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);



//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']= $_POST['src_code'];    	//(REQUIRED) Your formatted source code for which you want to use hackerEarth api, leave this empty if you are using file
$config['input']= $_POST['input'];     	//(OPTIONAL) formatted input against which you have to test your source code
$config['language']= $_POST['lang'];  //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY

//Sending request to the API to compile and run and record JSON responses
$response = run($hackerearth,$config);     // Use this $response the way you want , it consists data in PHP Array
//Printing the response
echo"<pre>".print_r($response,1)."</pre>";
?>