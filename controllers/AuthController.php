<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;


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
    $registerModel = new RegisterModel;
    if ($request->isPost()) {

      $registerModel->loadData($request->getBody());

      if ($registerModel->validate() && $registerModel->register()) {
        echo "The form was successfully processed.";
        return false;
      }
      return $this->render('register', [
        'model' => $registerModel
      ]);
    }
    $this->setLayout('auth');
    return $this->render('register', [
      'model' => $registerModel
    ]);
  }
}