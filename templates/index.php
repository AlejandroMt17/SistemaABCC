	<div class="container">
	<div class="container">
	<div class="row">
		<?php
			foreach($catalogo as $pan){
	  	?>
		<div class="col-sm">
			<div class="card text-white bg-dark mb-3 class="card text-center"" style="width: 18rem ">
  				<img src="<?=$pan['Imagen']?>" class="card-img-top" width = "200" height="150">
  				<div class="card-body" >
    				<h5 class="card-title"><?=$pan['Piezas']?></h5>
                        <p class="card-text" ><?=$pan['Descripción']?></p>
                        <p class="card-text" ><?=$pan['Precio']?></p>
                    <a href="/jor.php?nombre=<?=$pan['Id']?>" class="btn btn-primary">Comprar</a>
                    <a type="button" class="btn btn-danger" href="http://example.com/eliminarproducto.php?Id=<?=$pan['Id']?> ">Eliminar</a>
                    <a type="button" class="btn btn-warning" href="http://example.com/editar_producto.php?Id=<?=$pan["Id"]?>">Modificar</a>
  				</div>
			</div>
		</div>
		<?php
            }
		?>
	</div>
	</div>
	</div>
</body>
</html>
