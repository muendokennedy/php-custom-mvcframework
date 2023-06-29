<?php

namespace app\core;

/**
 * Summary of Application
 * @author MuendoKennedy
 * @copyright (c) 06/2023
 */
class Application
{
  /**
   * Summary of layout
   * @var string
   */
  public string $layout = 'main';
  /**
   * Summary of ROOT_DIR
   * @var string
   */
  public static string $ROOT_DIR;
  /**
   * Summary of router
   * @var Router
   */
  public Router $router;
  /**
   * Summary of request
   * @var Request
   */
  public Request $request;
  /**
   * Summary of response
   * @var Response
   */
  public Response $response;
  /**
   * Summary of db
   * @var Database
   */
  public Database $db;
  /**
   * Summary of app
   * @var Application
   */
  public static Application $app;
  /**
   * Summary of controller
   * @var Controller
   */
  public ?Controller $controller = null;
  /**
   * Summary of __construct
   * @param mixed $rootPath
   */
  public Session $session;

  /**
   * Summary of user
   * @var 
   */
  public ?Dbmodel $user;

  /**
   * Summary of userClass
   * @var string
   */
  public string  $userClass;

  /**
   * Summary of __construct
   * @param mixed $rootPath
   * @param array $config
   */
  public View $view;
  public function __construct($rootPath, array $config)
  {
    self::$ROOT_DIR = $rootPath;
    self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->session = new Session();
    $this->router = new Router($this->request, $this->response);
    $this->db = new Database($config['db']);
    $this->userClass = $config['userClass'];
    $this->view = new View();

      $primaryValue = $this->session->get('user');

      if ($primaryValue){
          $primaryKey = $this->userClass::primaryKey();
          $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
      } else {
          $this->user = null;
      }

  }

    /**
     * Summary of isGuest
     * @return bool
     */
    public static function isGuest()
    {
      
        return !self::$app->user;

    }

    /**
   * Summary of run
   * @return void
   */
  public function run()
  {
    try {
      echo $this->router->resolve();
    }catch(\Exception $e) {
      $this->response->setStatusCode($e->getCode());
      echo $this->view->renderView("_error", [
        'exception' => $e
      ]);
    }
  }
    
  /**
   * Summary of getController
   * @return Controller
   */
  public function getController(): Controller
  {
    return $this->controller;
  }
  /**
   * Summary of setController
   * @param \app\core\Controller $controller
   * @return void
   */
  public function setController(Controller $controller)
  {
    $this->controller = $controller;
  }

    /**
     * Summary of login
     * @param \app\core\Dbmodel $user
     * @return bool
     */
    public function login(Dbmodel $user): bool
    {
        $this->user = $user;

        $primaryKey = $user->primaryKey();

        $primaryValue = $user->{$primaryKey};

        $this->session->set('user', $primaryValue);

        return true;
    }

    /**
     * Summary of logout
     * @return void
     */
    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}