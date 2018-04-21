<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>Laboratorio Clinico</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="Javascript/angular.min.js"></script>
<script src="Javascript/jquery.js"></script>
<script src="Javascript/jquery.min.js"></script>
<script src="Javascript/responsivevoice.js"></script>

<script>
  function guardar(){
      var nombres = $("#nombre").val().toLowerCase()+"_"+$("#apellido").val().toLowerCase();
      var edad = $("#edad").val();
      var genero="no";
      var masculino = document.getElementById("male").checked;
      var femenino = document.getElementById("female").checked;
      if(masculino == true){
          genero = document.getElementById("male").value;
      }else{
          genero = document.getElementById("female").value;
      }
     $.ajax({
                data:  {nombres,edad,genero},
                url:   'RegistroPaciente.php',
                type:  'post',
                beforeSend: function () {
                        
                },
                success:  function (response) {
                        responsiveVoice.speak(response,"Spanish Latin American Female");
                        location.reload(true);
                        
                }
        });
  }
</script>

<header>
	
<style>
	h1{

		font-weight: bold;
		font: 120% impact;
		
	}

	h4{
		font: oblique 180% sans-serif bold;
    color: yellow;

	}

</style>
<center><body>


<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
 <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i> -->
  <div class="w3-center">

  <h1 class="w3-xxxlarge w3-animate-bottom">SISTEMA DE DIAGNÓSTICO PARA DETECTAR LA ENFERMEDAD DE LA "TIROIDES" </h1>
    <div class="w3-padding-32">
      <h4>Sistema experto que permite detectar el tipo de enfermedad de la Tiroides basándose en resultados del Laboratorio Clínico</h4>
    </div>
  </div>
</header>


<div class="w3-center w3-padding-64">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Registrar Paciente</span>
</div>

  <form >
    <div class="w3-group">
      <label>Nombre</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" type="text" id="nombre" required="true" maxlength="20">
    </div>
    <div class="w3-group">
      <label>Apellido</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" type="text" id="apellido" required="true" maxlength="20">
    </div>
    <div class="w3-group">
      <label>Edad</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" id="edad" required="true" maxlength="3">
    </div>
    <div class="w3-group">
   	 <input id="male" class="w3-radio" type="radio" name="gender" value="masculino" checked>
    	<label class="w3-validate">Masculino</label>
    
    <input id="female" class="w3-radio" type="radio" name="gender" value="femenino">
    <label class="w3-validate">Femenino</label>
    <br>
    <br>
   </div>
      <button type="button" class="w3-btn" onclick="guardar()">Guardar</button>
  </form>

<br>
<br>
<br>
<br>
 
<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-64 w3-center">

   
        <i class="fa fa-map-marker" style="width:30px"></i> Loja, Ecuador<br>
        <i class="fa fa-phone" style="width:30px"></i> Teléfono: 2-570-172<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: labreinadelcisne@gmail.com<br>
        <br>
        <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
      <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
      <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
      <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
      <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
     
</footer>


</body></center>
</html>
