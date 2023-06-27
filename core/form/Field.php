<?php 
namespace app\core\form;
use app\core\Model;

class Field
{
  public const TYPE_TEXT = 'text';
  public const TYPE_PASSWORD = 'password';
  public Model $model;
  public string $attribute;

  public string $type;

  public function __construct($model, $attribute)
  {
     $this->model = $model;
     $this->attribute = $attribute;
     $this->type = self::TYPE_TEXT;
  }
  public function __toString()
  {
    $label = str_replace(substr($this->attribute,0,1),strtoupper(substr($this->attribute,0,1)), $this->attribute);
    return sprintf('
      <div class="input-box%s">
        <label for="">%s:</label>
        <input type="%s" name="%s"  value="%s"/>
        <div class="error-text">%s</div>
      </div>
    ', $this->model->hasError($this->attribute) ? ' error' : '',
    ($label != 'ConfirmPassword') ? "Enter {$label}" : "Confirm your Password",
    $this->type,
    $this->attribute, 
    $this->model->{$this->attribute},
    $this->model->getFirstError($this->attribute));
  }
  public function passwordField()
  {
     $this->type = self::TYPE_PASSWORD;
     return $this;
  }
}