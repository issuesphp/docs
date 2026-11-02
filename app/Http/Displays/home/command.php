<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\HomeController;

// if (isset($argv[1])) {
//     parse_str($argv[1], $_GET);
// }

// $param1   = $_GET['param1'] ?? '';


$jobject = json_decode($param1, true);


$home = new HomeController();

// $home->welcome($jobject);

$home->command();


