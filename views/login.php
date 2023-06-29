<?php
use app\core\form\Form;

/** @var $model User */


/** @var $this app\core\View */

$this->title = 'The login page';



?>
<div class="form-container">
  <h4>Login to your Account</h4>
  <?php $form = Form::begin('', "post"); ?>
  <?php echo $form->field($model, 'email'); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <div class="input-box">
    <input type="submit" name="submit" value="Login" />
  </div>
  <?php echo Form::end(); ?>