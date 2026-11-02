<?php

namespace App\Http\Controllers;


class HomeController extends MainController
{



  public function guide() 
  {    


    return $this->view('home/guide');

  }

  
  public function welcome()  
  {    


    return $this->view('home/welcome');

  }

  public function installation() 
  {    


    return $this->view('home/installation');

  }

  public function command() 
  {    


    return $this->view('home/command');

  }



}



