<h2>Log in to your account</h2> 

<form method="POST" action="<?php echo $this->here; ?>"> 

<?php echo $form->error('User.username'); ?>
<p>
    Username
    <?php echo $form->text('User.username'); ?>
</p>
<p>
    Password
    <?php echo $form->password('User.password'); ?> 

</p>
<?php echo $form->submit('Log in'); ?>
</form>
