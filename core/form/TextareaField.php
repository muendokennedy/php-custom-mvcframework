<?php 
namespace app\core\form;
class TextareaField extends BaseField
{
  public function renderInput(): string
  {
    return sprintf('<textarea name="%s" cols="30" rows="10">%s</textarea>',
    $this->attribute, 
    $this->model->{$this->attribute},);
  }
}