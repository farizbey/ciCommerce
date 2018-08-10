
<h2>Contact</h2>


<?php $attributes = array('id' => 'contact_form', 'class' => 'form_horizontal'); ?>



<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('contact', $attributes); ?> <!-- taken from contact controller -->




<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Name', 'inputName', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'Name',
	'name' => 'name',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>



<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Email Address', 'inputEmail', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'email',
	'class' => 'form-control',
	'placeholder' => 'Email',
	'name' => 'email',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>


<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Subject', 'inputSubject', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'Subject',
	'name' => 'subject',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>


<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Message', 'inputMessage', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'rows' => '5',
	'class' => 'form-control',
	'placeholder' => 'Messages',
	'style' => 'resize: vertical',
	'name' => 'message',
	'required' => 'required'
	); 
?>

<?php echo form_textarea($data); ?>

</div>

</div>

<div class="col-md-6 col-md-offset-6 col-xs-12">


<?php $data = array(

	'class' => 'btn btn-default',
	'type' => 'submit',
	'value' => 'Submit'

	); 
?>

<?php $data2 = array(

	'class' => 'btn btn-default',
	'type' => 'reset',
	'value' => 'Reset'

	); 
?>

<?php echo form_submit($data); ?>

<?php echo form_reset($data2); ?>

</div>

<?php echo form_close(); ?>

<?php 

?>
