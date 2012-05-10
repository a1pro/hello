<h2>Register your account</h2> 

<form method="POST" action="<?php echo $this->here; ?>"> 

<p>
    Username
    <?php echo $form->text('User.username'); ?>
</p>
<p>
    Password
    <?php echo $form->password('User.password'); ?>
</p> 

<?php echo $form->submit('Register'); ?>
</form>
