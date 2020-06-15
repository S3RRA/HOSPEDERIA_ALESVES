<?php
session_start();
if(isset($_SESSION['usuario'])){

    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = "../images/" . basename($_FILES['attachments']['name'][0]);
        if(file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File already exists!");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile))
            $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => $targetFile);

        exit(json_encode($msg));
    }

	require '../conexion.php';
	include 'queries/r_hoy.php';
	include 'queries/r_semana.php';
	include 'queries/r_mes.php';

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Area Trabajadores</title>
	<meta name="author" content="Codrops" />
	<link rel="apple-touch-icon-precomposed" href="images/hospederia-de-alesves.gif" />
	<link rel="icon" href="../images/hospederia-de-alesves.gif">
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/containe.css"/>
	<script src="../js/jquery.min.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<style>
       body{
			background: #0f2027; /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #0f2027, #203a43, #2c5364); /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #0f2027, #203a43, #2c5364); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}  
		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid #ddd;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}		   
	</style>
</head>

<body>
	<!-- container -->
	<div class="container">
		<!-- header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<h2 class="dummy-heading">Hospedería de Alesves</h2>
				<h5><a class="dummy-heading" href="cerrar_sesion.php">Cerrar sesión</a></h5>
			</div>
			<div class="bp-header__main">
				<span class="bp-header__present">Hospedería de Alesves</span>
				<h1 class="bp-header__title">Trabajadores</h1>							
			</div>
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
<!--Menu Principal-->
				<ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="Menu">
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1">Reservas</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-5" aria-owns="submenu-5">Habitaciones</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4">WEB</a></li>
				</ul>
<!-- Submenu 1 -->
				<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Reservas">
					<li class="menu__item" role="menuitem"><a class="menu__link">Nueva reserva</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2">Ver reservas</a></li>
				</ul>
<!-- Submenu 2 -->
				<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Ver reservas">
					<li class="menu__item" role="menuitem"><a class="menu__link">Hoy</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link">Esta semana</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link">Este mes</a></li>
					<li class="menu__item" rolw="menuitem"><a class="menu__link">Escoja fecha</a></li> 
				</ul>	
<!-- Submenu 3 -->
				<ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Precios">
					<li class="menu__item" role="menuitem"><a class="menu__link">Por tipo de habitacion</a></li>					
					<li class="menu__item" role="menuitem"><a class="menu__link">Por numero habitacion</a></li>
				</ul>
<!-- Submenu 4 -->
				<ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="WEB">				
					<li class="menu__item" role="menuitem"><a class="menu__link">Subir imagen</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link">Crear post</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link">Borrar post</a></li>					
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-6">Comentarios</a></li>
				</ul>
<!-- Submenu 5-->
				<ul data-menu="submenu-5" id="submenu-5" class="menu__level" tabindex="-1" role="menu" aria-label="Habitaciones">
					<li class="menu__item" role="menuitem"><a class="menu__link">Cambiar disponibilidad</a></li>					
					<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3">Cambiar precio</a></li>
				</ul>
<!-- Submenu 6-->
				<ul data-menu="submenu-6" id="submenu-6" class="menu__level" tabindex="-1" role="menu" aria-label="Comentarios">				
					<li class="menu__item" role="menuitem"><a class="menu__link">Validar comentarios</a></li>
					<li class="menu__item" role="menuitem"><a class="menu__link">Borrar comentarios</a></li>				                                
				</ul>
			</div>
		</nav>
		<div class="content" id="content">
			<p class="info" style="color:white">
                            <?php 
                                if(isset($_GET['error'])){
                                    echo 'Vaya ha habido un problema con tu consulta, inténtelo de nuevo.<br>Si continúa el problema póngase en contacto con el administrador: <a href="tel:608144766">608144766</a>';
                                }else if(isset($_GET['done'])){
									echo 'Consulta realizada con éxito<br>¿Qué más deseas hacer?';
								}else{
                                    echo '¿Qué deseas hacer?';
								}
							?>
			</p>
		</div>
				<!--F O R M U L A R I O - E L I G E F E C H A-->
				<center>
					<div class="form" style="display:none;position:absolute;bottom:20%;left:45%;">
						<img src="../images/hospederia-de-alesves.gif" class="imagen">
						<form class="login-form" id="escoja_fecha">
							<label>Indique fecha a consultar:</label>
							<input type="date" id="fecha_elegida">
							<input type="submit" id="enviar">
						</form>
					</div>
				</center>
		
				<!--S U B I R - I M A G E N-->
				<center>
					<div class="form_upload_imagenes" style="display:none;position:absolute;bottom:20%;left:45%;">
						<img src="../images/hospederia-de-alesves.gif"><br><br>
						<div id="dropZone">
							<h1>Arrastre o seleccione un archivo</h1>
							<input type="file" id="fileupload" name="attachments[]" multiple>
						</div>
						<h1 id="error"></h1><br><br>
						<h1 id="progress"></h1><br><br>
						<div id="files"></div>
					</div>
				</center>
				
			
		
	</div>
	<!-- vista  -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	<!--Subir archivo-->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
	<script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
	<script src="js/jquery.fileupload.js" type="text/javascript"></script>
	<script>

	// simulate grid content loading
	var gridWrapper = document.querySelector('.content');

	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			$('.form').hide();
			$('.form_upload_imagenes').hide();
			$('.info').show();
			$('.containe').hide();
			if(itemName == 'Hoy'){
				<?php if(isset($_COOKIE['json'])){ ?>
					muestra_reservas('<?php echo $_COOKIE['json'];?>');
				<?php }else{ ?>
					classie.add(gridWrapper, 'content--loading');
					setTimeout(function() {
						classie.remove(gridWrapper, 'content--loading');
						gridWrapper.innerHTML = '<div class="info" style="color:white">NO HAY RESERVAS</div>';
					}, 700);
				<?php } ?>
			}
			else if(itemName == 'Esta semana'){
				<?php if(isset($_COOKIE['json2'])){ ?>
					muestra_reservas('<?php echo $_COOKIE['json2'];?>');
				<?php }else{ ?>
					classie.add(gridWrapper, 'content--loading');
					setTimeout(function() {
						classie.remove(gridWrapper, 'content--loading');
						gridWrapper.innerHTML = '<div class="info" style="color:white">NO HAY RESERVAS</div>';
					}, 700);
				<?php } ?>
			}			
			else if(itemName == 'Este mes'){
				<?php if(isset($_COOKIE['json3'])){ ?>
					muestra_reservas('<?php echo $_COOKIE['json3'];?>');
				<?php }else{ ?>
					classie.add(gridWrapper, 'content--loading');
					setTimeout(function() {
						classie.remove(gridWrapper, 'content--loading');
						gridWrapper.innerHTML = '<div class="info" style="color:white">NO HAY RESERVAS</div>';
					}, 700);
				<?php } ?>
			}
			else if(itemName == 'Escoja fecha'){
				gridWrapper.innerHTML = '';
				$('.form').show();
				$('#escoja_fecha').on('submit',function(e){
					e.preventDefault();
					$('.form').hide();
					$.ajax({
						url:'queries/r_fecha.php',
						metod:'GET',
						data:{
							'datos':$('#fecha_elegida').val()//'nombre_post': + $ + idform + .serialize() --> coge todos los campos
						},
						success: function(dataa){
							muestra_reservas(dataa);													
						}
					});					
				});
			}else if(itemName == 'Subir imagen'){
				gridWrapper.innerHTML = '';				
				$('.form_upload_imagenes').show();
				upload_imagenes();
			}else if(itemName == 'Validar comentarios'){
				$.ajax({
						url:'queries/comentarios.php',
						success: function(dataa){	
							muestra_comentarios(dataa);													
						}
					});	
			}else{
				classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
				}, 700);
			}
		}

	})();
	
	function muestra_reservas(datos){
		var gridWrapper = document.getElementById('content');
		if(datos=="NO HAY RESERVAS"){
			classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML = '<div class="info" style="color:white">NO HAY RESERVAS</div>';
				}, 700);
		}else{
			var reservas = JSON.parse(datos);
			var contenido = '';	
			for(var i=0;i<reservas.length;i++){
				contenido += '<tr>'+
								'<th scope="row">'+(i+1)+'</th>'+	
								'<td>'+reservas[i]['hab']+'</td>'+
								'<td>'+reservas[i]['tipo_habitacion']+'</td>'+
								'<td>'+reservas[i]['llegada']+'</td>'+
								'<td>'+reservas[i]['salida']+'</td>'+
								'<td>'+reservas[i]['dni']+'</td>'+
								'<td>'+reservas[i]['cod']+'</td>'+
							'</tr>';
				gridWrapper.innerHTML = '';
				classie.add(gridWrapper, 'content--loading');
						setTimeout(function() {						
							classie.remove(gridWrapper, 'content--loading');
							gridWrapper.innerHTML = '<center><div style="overflow-x:auto;background-color:white;color:black;display:flex;justify-content:center;align-items: center;width:60%;border-radius:5px;"><img src="../images/hospederia-de-alesves.gif" style="float:left"><br><br><div>'+
										'<table class="table" style="width=100%" cellspacing="5%">'+
											'<thead><tr><th scope="col">#</th><th scope="col"><b>Nº hab</b></th><th scope="col"><b>Tipo hab</b></th><th scope="col"><b>Llegada</b></th><th scope="col"><b>Salida</b></th><th scope="col"><b>Cliente</b></th><th scope="col"><b>Codigo reserva</b></th></tr></thead><tbody>'+
												contenido+
										'</tbody></table>'+
										'</div></div></center>';
						}, 700);
			}
		}
	}	
        
	function upload_imagenes() {
		var files = $("#files");

		$("#fileupload").fileupload({
			url: 'workers.php',
			dropZone: '#dropZone',
			dataType: 'json',
			autoUpload: false

		}).on('fileuploadadd', function (e, data) {
			var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
			var fileName = data.originalFiles[0]['name'];
			var fileSize = data.originalFiles[0]['size'];

			if (!fileTypeAllowed.test(fileName))
				$("#error").html('Solo se permiten archivos .gif, .jpg, .png y .jpeg');
			else if (fileSize > 500000)
				$("#error").html('Su archivo pesa demasiado, no puede superar los 500KB');
			else {
				$("#error").html("");
				data.submit();
			}

		}).on('fileuploaddone', function(e, data) {
			var status = data.jqXHR.responseJSON.status;
			var msg = data.jqXHR.responseJSON.msg;

			if (status == 1) {
				var path = data.jqXHR.responseJSON.path;
				$("#files").fadeIn().append('<p><img style="width: 100px; height: 100px;" src="'+path+'" /></p>');
			} else
				$("#error").html(msg);
		}).on('fileuploadprogressall', function(e,data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$("#progress").html("Completado: " + progress + "%");
		});
	}

	function muestra_comentarios(datos){
		if(comentarios == 'NO HAY COMENTARIOS'){
			classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML = '<div class="info" style="color:white">NO HAY RESERVAS</div>';
				}, 700);
		}else{
			var comentarios = JSON.parse(datos);	
			var contenido = "<br><br><br><center><div class='containe' style='width:90%;overflow-x:auto;background-color:white;color:black;display:flex;justify-content:center;align-items: center;border-radius:5px;'><form method='post' action='queries/valida_com.php'><table class='table' style='width=100%'>";
			contenido += '<thead><tr><th scope="col">#</th><th scope="col"><b>Título post</b></th><th scope="col"><b>Nombre</b></th><th scope="col"><b>Fecha</b></th><th scope="col"><b>Contenido</b></th><th scope="col"><b>Validar</b></th><th scope="col"><b>Eliminar</b></th></thead><tbody>';
			for(var i=0;i<comentarios['comentarios'].length;i++){
				contenido += "<tr><th scope='row'></th>";
				contenido += "<td>"+comentarios['comentarios'][i]['POST_ID']+"</td>";
				contenido += "<td>"+comentarios['comentarios'][i]['nombre']+"</td>";
				contenido += "<td>"+comentarios['comentarios'][i]['fecha']+"</td>";
				contenido += "<td>"+comentarios['comentarios'][i]['contenido']+"</td>";
				contenido += "<td><input type='checkbox' name='"+comentarios['comentarios'][i]['id']+"' value='validar'></td>";
				contenido += "<td><input type='checkbox' name='"+comentarios['comentarios'][i]['id']+"' value='eliminar'></td>";
				contenido += "</tr>";
			}
			contenido += "</tbody></table><br><input type='submit'><br></form><br></div></center>";
			console.log(contenido);
			classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML = contenido;
				}, 700);
		}
	}

	</script>

</body>

</html>
<?php 
	}else{
		header('Location: login.php');
	}
?>