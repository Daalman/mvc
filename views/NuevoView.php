

<!-- Vista para editar un elemento de la tabla -->

<body>
	
	<!-- Parte específica de nuestra vista -->
	<!-- Formulario para insertar un nuevo item -->
	<form action="index.php" method="post">
		<input type="hidden" name="controlador" value="Item">
		<input type="hidden" name="accion" value="nuevo">

		<?php echo isset($errores["codigo"]) ? "*" : "" ?>
		<label for="codigo">Codigo</label>
		<input type="text" name="codigo">
		</br>

		<?php echo isset($errores["nombre"]) ? "*" : "" ?>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre">
		</br>

		<input type="submit" name="submit" value="Aceptar">
	</form>
	</br>

	<?php
	// Si hay errores se muestran
	if (isset($errores)):
		foreach ($errores as $key => $error):
			echo $error . "</br>";
		endforeach;
	endif;
	?>

	
</body>

</html>