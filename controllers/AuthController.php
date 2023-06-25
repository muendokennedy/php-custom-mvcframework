<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    if ($request->isPost()) {
      echo "Handle submitted data";
      return false;
    }
    $this->setLayout('auth');
    return $this->render('login');
  }
  public function register(Request $request)
  {
    if ($request->isPost()) {
      $registerModel = new RegisterModel();
      echo "Handle submitted data";
      return false;
    }
    $this->setLayout('auth');
    return $this->render('register');
  }
}