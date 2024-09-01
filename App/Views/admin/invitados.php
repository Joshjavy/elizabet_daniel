
<?php
// We need to use sessions, so you should always start sessions using the below code.

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  echo'<meta http-equiv="refresh" content="0; url='.$baseUrl.'Home/login">';
	return false;
}else{
  
?>


<!--CSS: Importar Fuente de iconos google-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--CSS: Importar materialize.css-->
<!--  CSS: AOS Animated -->
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>src/css/styles.css?v=1.0.1">
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" href="<?= $baseUrl ?>src/css/jquery.bxslider.css">


<!-- CSS: Iconos font awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!--Shortcut icon: Favicon -->
<link rel="icon" href="<?= $baseUrl ?>src/images/emblemas/emblema.png" sizes="32x32">
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

  <style>
[type=search] {
  font-size: 0.75rem !important;
  height: 2rem;
}
.dt-search,.dt-length{
  font-size: 0.75rem !important;
}
div.dt-container .dt-input {
  border: 1px solid #aaa;
  border-radius: 3px;
  padding: 5px;
  font-size: 0.75rem !important;
  background-color: #7AA3CC !important;
  color: inherit;
}
.dt-paging{
  font-size: 0.75rem !important;
  background-color:#7AA3CC !important;
  height: 60px !important;
}
.dt-paging .dt-paging-button{
  font-size: 0.75rem !important;
  height: 45px !important;
}

.dt-info{
  font-size: 0.75rem !important;
}
button, input, optgroup, select, textarea {
    font-family: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    
    font-weight: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    color: inherit;
    margin: 13px !important;
    font-size: 1.5rem !important;
    background-color:#7AA3CC!important;
    padding: 10px !important;
    color: white!important;
}

.admin ul {
    list-style: none;
    padding: 0;
    margin: 0;
    height: 35px;
    padding-top: 15px !important;
    padding-left: 25px;
    background-color: #7AA3CC;
    height: 76px;
}

.admin li {
    display: inline; /* Hace que los ítems del menú estén en una línea horizontal */
    margin-right: 20px; /* Espacio entre los ítems del menú */
    
}

.admin a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    
}
  </style>
</head>
<body class=" text-xs">
<nav class="admin">
    <ul>
      <li><a href="#" id="liinvitados">Invitados</a></li>
      <li><a href="#" id="liasistencias">Asistencia</a></li>
      <li><a href="<?php $baseUrl?>" base="<?php echo $baseUrl?>" class="btnsalir">Salir</a></li>
    </ul>
  </nav>

<div class="max-w-screen-lg	m-auto invitados">
	<?php if ($datos){?>
		<table id="example" class="w-fit bg-white">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pases</th>
                <th>url</th>
            </tr>
        </thead>
        <tbody>
		<?php foreach($datos as $invitado){?>
            <tr>
                <td><?php echo  $invitado->Nombre ?></td>
                <td><?php echo  $invitado->pases ?></td>
                <td><?php echo $site.'?invitado='.$invitado->uid?></td>
                
            </tr>
        <?php } ?>
        </tbody>
    </table>
	<?php }else{?>
	<form action="<?php $baseUrl?>subirinvitados" method="POST" enctype="multipart/form-data" class="text-base pt-10">
			
			<div class="mb-3">
				<label for="archivo">Selecciona un archivo <code>.csv</code></label>
				<input type="file" class="form-control" name="archivo" id="archivo" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
			</div>
			<button class="btn btn-success" type="submit">Importar</button>
			</form>
	<?php } ?>
</div>


<div class="max-w-screen-lg	 m-auto asistencias hidden">
  
	<?php if ($datos){?>
		<table id="asistencias" class="bg-white">
      <thead>
              <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Pases</th>
                  <th class="text-center">Vegano</th>
                  <th class="text-center">Url</th>
                  
              </tr>
          </thead>
          <tbody>
      <?php foreach($asistencias as $invitado){?>
              <tr>
                  <td class="text-center"><?php echo  $invitado->Nombre ?></td>
                  <td class="text-center"><?php echo $invitado->pases?></td>
                  <td class="text-center"><?php echo $invitado->alergia?></td>
                  <td class="text-center"><?php echo $site.'?invitado='.$invitado->uid?></td>
                  
              </tr>
          <?php } ?>
          </tbody>
    </table>
	<?php }else{?>
	<form action="<?php $baseUrl?>subirinvitados" method="POST" enctype="multipart/form-data" class="text-base pt-10">
			
			<div class="mb-3">
				<label for="archivo">Selecciona un archivo <code>.csv</code></label>
				<input type="file" class="form-control" name="archivo" id="archivo" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
			</div>
			<button class="btn btn-success" type="submit">Importar</button>
			</form>
	<?php } ?>
</div>
</main>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/logout.js"></script>
<script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/admin.js"></script>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
<script>
	new DataTable('#example');
  new DataTable('#asistencias');
</script>
<?php } ?>