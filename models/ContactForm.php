<?php
namespace app\models;
use app\core\Model;

class ContactForm extends Model
{
  public string $name = '';
  public string $subject = '';
  public string $email = '';
  public string $message = '';
  public function rules(): array
  {
    return [
      'name' => [self::RULE_REQUIRED],
      'subject' => [self::RULE_REQUIRED],
      'email' => [self::RULE_REQUIRED],
      'message' => [self::RULE_REQUIRED]
    ];
  }
  public function send()
  {
    return true;
  }
}