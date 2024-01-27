

<!-- Vista para editar un elemento de la tabla -->

<body>

	<!-- Parte específica de nuestra vista -->
	<form action="index.php" method="post">
		<input type="hidden" name="controlador" value="Item">
		<input type="hidden" name="accion" value="editar">

		<label for="codigo">Codigo</label>
		<input type="text" name="codigo" value="<?php echo $item->getCodigo(); ?>" readonly>
		</br>

		<?php echo isset($errores["nombre"]) ? "*" : "" ?>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?php echo $item->getNombre(); ?>">
		</br>

		<input type="submit" name="submit" value="Aceptar">
	</form>
	</br>

	<?php
	// Si hay errores los mostramos.
	if (isset($errores)):
		foreach ($errores as $key => $error):
			echo $error . "</br>";
		endforeach;
	endif;
	?>

	</body>

</html>