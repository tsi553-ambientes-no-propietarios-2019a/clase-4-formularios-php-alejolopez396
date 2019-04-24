<?php include('app/process_form.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Form</title>
</head>
<body>
	
	<?php 
	 include('views/header.php');
	 include('views/content.php');
	 include('views/footer.php');
	?>

	<?php if(!empty($user) && !empty($pass)) { ?>
		<div>
			<label>Los datos ingresados son:</label>
			<p>Usuario: <?php echo $user . ' ' . strlen($user);?></p>
			<p>Clave: <?php echo $pass;?></p>

			<p>Descripción: <?php echo $desc;?></p>
		</div>
	<?php } else { ?>
		<h2>Ingrese todos los datos!</h2>
	<?php } ?>

</body>
</html>