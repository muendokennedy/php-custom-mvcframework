<?php 

namespace app\core\exception;

class ForbiddenException extends \Exception
{
  /**
   * Summary of message
   * @var string
   */
  protected $message = 'You don\'t have permission to access this page';
  protected $code = 403;
}