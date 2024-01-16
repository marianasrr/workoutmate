<?php  if (count($errors) > 0) : ?>
  <div class="error" style="background-color: red ; color: white ; padding: 1px;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>