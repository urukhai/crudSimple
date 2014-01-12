<?php
include 'sql.php';
$sqlMarca = "select * from marca";
$sqlProductos = "select * from producto";
$marcas = $conexion->query($conexion->run($sqlMarca));
$producto = $conexion->query($conexion->run($sqlProductos));
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title>Marcas y productos</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Marcas y productos" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />

        <script src="js/prefixfree.min.js"></script>
        <!-- Estilos -->
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css" />


    </head>
    <body>
    	<header>
    		<h1></h1>

    	</header>
    	<!-- Tabla Marcas -->
		<table summary="Marcas">
		    <caption>marcas</caption>
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Nombre</th>
		            <th>Actualizar</th>
		            <th>Eliminar</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        foreach ($marcas as $value) {
		            echo '<tr><td class="id_marca">' . $value['id_marca'] . '</td>';
		            echo '<td class="nombre_marca">' . $value['nombre_marca'] . '</td>';
		            echo '<td> <button data-id="' . $value['id_marca'] . '" class="update_marcas_btn">Actualizar</button></td>';
		            echo '<td  ><button class="eliminar_marca" data-id="' . $value['id_marca'] . '">Eliminar</button></td></tr>';
		        }
		        ?>
		    </tbody>    
		</table>
		<form id="marcasFormNuevo" method="post" action="">
		        
		        <h3>Nueva marca</h3>

		        <input id="idMarcaNuevo" name="id_marca" type="hidden" value="" >
		        <input id="accionNuevo" name="accion" type="hidden" value="insertar" >             
		        <input id="nombreMarcaNuevo" name="nombre_marca" placeholder="Nombre" type="text" value="" maxlength="50"  required/>
		                    
		       
		        <input id="submitNuevo" type="submit" value="nuevo"/>
		</form>
		<div id="pop_marcas" class="container_popup">
		    <form id="marcasForm" method="post" action="">
		        <span id="close">X</span>
		        <h3>Actualizar Marcas</h3>

		        <input id="idMarca" name="id_marca" type="hidden" value="" >
		        <input id="accion" name="accion" type="hidden" value="actualizar" >             
		        <input id="nombreMarcaActualizar" name="nombre_marca" placeholder="Nombre" type="text" value="" maxlength="50"  required/>
		                    
		       
		        <input id="submit" type="submit" value="Actualizar"/>
		    </form>
		</div>
		<!-- Tabla productos -->
		<table summary="productos ">
		    <caption>Productos</caption>
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Nombre</th>
		            <th>talla</th>
		            <th>observaciones</th>
		            <th>marca</th>
		            <th>cantidad inventario</th>
		            <th>fecha embarque</th>
		            <th>Actualizar</th>
		            <th>Eliminar</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        foreach ($producto as $value) {
		            echo '<tr><td>' . $value['id_producto'] . '</td>';
		            echo '<td>' . $value['nombre_producto'] . '</td>';
		            echo '<td>' . $value['talla'] . '</td>';
		            echo '<td>' . $value['observaciones'] . '</td>';
		            echo '<td>' . $value['id_marca'] . '</td>';
		            echo '<td>' . $value['cantidad_inventario'] . '</td>';
		            echo '<td>' . $value['fecha_embarque'] . '</td>';
		            echo '<td> <button data-id="' . $value['id_marca'] . '" class="update_productos_btn">Actualizar</button></td>';
		            echo '<td><button data-id="' . $value['id_marca'] . '">Eliminar</button></td></tr>';
		        }
		        ?>
		    </tbody>    
		</table>
		<form id="productosFormNuevo" method="post" action="">
		        
		        <h3>Nuevo producto</h3>

		        <input id="idPorductoNuevo" name="id_producto" type="hidden" value="" >
		        <input id="accionNuevoPorducto" name="accion" type="hidden" value="insertar" >             
		        <input id="nombrePorductoNuevo" name="nombre_producto" placeholder="Nombre" type="text" value="" maxlength="50"  required/>
		        <select name="talla" class="select">
		          <option value="0">Seleccione la talla</option>
		          <option value="s">S</option>
		          <option value="m">M</option>
		          <option value="l">L</option>
		        </select>  
		        <select name="marca" class="select">
		          <option value="0">Seleccione la Marca</option>
		          <?php 
		          	foreach ($marcas as $value) {
		          		echo '<option value="'.$value['id_marca'] .'">'.$value['nombre_marca'] .'</option>';
		          	}
		          ?>		
		        </select>        
		       <textarea name="observaciones" rows="4" cols="50" class="text-area"></textarea>
		       <input id="cantidad_inventario" name="accion" type="number"   placeholder="Cantidad inventario"> 
		        <input id="fecha_embarque" name="accion" type="date"  placeholder="fecha_embarque"> 
		       
		        <input id="submitNuevo" type="submit" value="nuevo"/>
		</form>
		

    </body>
    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</html>