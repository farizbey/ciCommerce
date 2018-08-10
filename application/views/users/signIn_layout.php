<?php

?>
<h2>Sign In</h2>


<?php $attributes = array('id' => 'signin_form', 'class' => 'form_horizontal'); ?>



<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/signin', $attributes); ?> <!-- taken from users controller -->




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

<div class="col-md-6 col-md-offset-6 col-xs-12">


<?php $data = array(

	'class' => 'btn btn-default',
	'type' => 'submit',
	'value' => 'Sign In'

	); 
?>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>


<!-- 
<logIn>
	<div class="col-lg-12 col-md-12">
    	<h3>Sign In</h3>
        <form class="form-horizontal" method="post" action="process/signIn_process.php">
			<div class="form-group">
				<label for="inputEmail" class="col-sm-2">Email address</label>
				<div class="col-sm-6">
					<input type="email" name="email" class="form-control" id="" placeholder="Email" required />
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2">Password</label>
				<div class="col-sm-6">
					<input type="password" name="password" class="form-control" id="" placeholder="Password" required />
				</div>
			</div>
			<div class="col-md-6 col-md-offset-6 col-xs-12">
				<input class="btn btn-default" type="submit" value="Sign In"/>
			</div>
        </form>
    </div>
</logIn>--> <!-- End of Sign In -->
<?php 

?>
