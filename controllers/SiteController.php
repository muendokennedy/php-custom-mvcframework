<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Summary of SiteController
 * @author MuendoKennedy
 * @copyright (c) /06/2023
 */
class SiteController extends Controller
{
  public function home()
  {
    $params = array('name' => "Kennedy Munyao");
    $this->render('home', $params);
  }
  public  function contact()
  {
    $this->render('contact');
  }
  public function handleContact(Request $request)
  {
    $body =  $request->getBody();
    echo '<pre>';
    var_dump($body);
    echo '</pre>';
    exit;
  }
}
