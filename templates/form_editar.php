 <div class="container">    
            <form method="post" action="http://example.com/modificar.php?Id=<?=$y['Id']?>">
                <div class="mb-3">
                    <label class="form-label">Nombre de la pieza</label>
                    <input class="form-control" type="text" value="<?=$y['Piezas']?>" name="Piezas" placeholder="Modifica el nombre de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="number" value="<?=$y['Precio']?>" name="Precio" placeholder="Modifica el precio de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input class="form-control" type="text" value="<?=$y['Descripción']?>" name="Descripcion" placeholder="Modifica la descripion de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input class="form-control" type="number" value="<?=$y['Stock']?>" name="Stock" placeholder="Modifica el stock de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="text" value="<?=$y['Imagen']?>" name="Imagen" placeholder="Modifica la ruta de la imagen" aria-label="default input example">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>    
        </div> 
</html>