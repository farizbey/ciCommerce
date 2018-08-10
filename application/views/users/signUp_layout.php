<?php

?>
<h2>Sign Up</h2>


<?php $attributes = array('id' => 'signup_form', 'class' => 'form_horizontal'); ?>



<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/signup', $attributes); ?> <!-- taken from users controller -->




<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('First Name', 'inputFirstName', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'First Name',
	'name' => 'first_name',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>




<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Last Name', 'inputLastName', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'Last Name',
	'name' => 'last_name',
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
<?php echo form_label('Password', 'inputPassword', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'password',
	'class' => 'form-control',
	'placeholder' => 'Password',
	'name' => 'password',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>



<div class="form_group">
<?php $attributes_label = array('class' => 'col-sm-2'); ?>
<?php echo form_label('Confirm Password', 'inputConfirmPassword', $attributes_label); ?>

<div class="col-sm-10">

<?php $data = array(

	'type' => 'password',
	'class' => 'form-control',
	'placeholder' => 'Confirm Password',
	'name' => 'confirm_password',
	'required' => 'required'
	); 
?>

<?php echo form_input($data); ?>

</div>

</div>


<div class="col-md-6 col-md-offset-6 col-xs-12">


<?php $data = array(

	'class' => 'btn btn-default',
	'type' => 'submit',
	'value' => 'Sign Up'

	); 
?>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>


<?php 

?>
