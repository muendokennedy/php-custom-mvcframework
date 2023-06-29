<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

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
  public  function contact(Request $request, Response $response)
  {
    $contact = new ContactForm();
    if($request->isPost()){
      $contact->loadData($request->getBody());
      if($contact->validate() && $contact->send()){
        Application::$app->session->setFlash('success', 'Thanks for contacting us, we will get back to you soon');
        return $response->redirect('/contact');
      }
    }
    return $this->render('contact',[
      'model' => $contact
    ]);
  }
}