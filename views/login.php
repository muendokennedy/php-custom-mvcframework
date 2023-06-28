<?php
/** @var $model User */

use app\core\form\Form;
use app\models\User;

?>
<div class="form-container">
    <h4>Login to your Account</h4>
    <?php $form = \app\core\form\Form::begin('', "post"); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <div class="input-box">
        <input type="submit" name="submit" value="Login" />
    </div>
<?php echo \app\core\form\Form::end(); ?>