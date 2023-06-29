<?php
/** @var $model User */

use app\core\form\Form;

/** @var $this app\core\View */

$this->title = 'Create account';

?>

<div class="form-container">
  <h4>Create an Account</h4>
  <?php $form = Form::begin('', "post"); ?>
  <div class="row">
    <?php echo $form->field($model, 'firstname'); ?>
    <?php echo $form->field($model, 'lastname'); ?>
  </div>
  <?php echo $form->field($model, 'email'); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
  <div class="input-box">
    <input type="submit" name="submit" value="Submit" />
  </div>
  <?php echo Form::end(); ?>