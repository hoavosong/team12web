<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	 <strong> <p style="font-size:15pt;color:red"> <i><?php echo $error ?></i></p> </strong>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
