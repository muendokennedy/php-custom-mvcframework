<?php 
use app\core\form\Form;
use app\core\form\TextareaField;
/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */

$this->title = 'Contact page';

?>

<?php $form = Form::begin('', 'post')?>

<?php echo $form->field($model, 'name')?>
<?php echo $form->field($model, 'subject')?>
<?php echo $form->field($model, 'email')?>
<?php echo new TextareaField($model, 'message')?>
<div class="input-box">
  <input type="submit" name="submit" value="Submit" />
</div>
<?php Form::end()?>