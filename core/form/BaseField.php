<?php 
namespace app\core\form;
use app\core\Model;
abstract class BaseField
{
  public Model $model;
  public string $attribute;
  public function __construct(Model $model, string $attribute)
  {
     $this->model = $model;
     $this->attribute = $attribute;
  }

  abstract public function renderInput(): string;

  public function __toString()
  {
    $label = str_replace(substr($this->attribute,0,1),strtoupper(substr($this->attribute,0,1)), $this->attribute);
    return sprintf('
      <div class="input-box%s">
        <label for="">%s:</label>
        %s
        <div class="error-text">%s</div>
      </div>
    ', $this->model->hasError($this->attribute) ? ' error' : '',
    ($label != 'ConfirmPassword') ? "Enter {$label}" : "Confirm your Password",
    $this->renderInput(),
    $this->model->getFirstError($this->attribute));
  }
}