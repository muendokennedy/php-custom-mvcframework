<div class="form-container">
  <?php $form = \app\core\form\Form::begin('', "post"); ?>
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
  <?php echo \app\core\form\Form::end(); ?>