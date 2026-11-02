<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\HomeController;


$home = new HomeController();

$home->installation();


