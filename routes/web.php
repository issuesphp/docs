<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	


}


function routeFactory($segment,$param1,$param2,$param3) {


	Route::get('home', 'guide', 'user-guide',$segment);

	Route::get('home', 'installation', 'installation',$segment);	

	Route::get('home', 'welcome', 'welcome',$segment);
	

}



?>