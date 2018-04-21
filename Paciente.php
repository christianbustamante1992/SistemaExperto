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
function realizaProceso(nombrepaciente){
        
        $.ajax({
                data:  {nombrepaciente},
                url:   'ConsultarPersona.php',
                type:  'post',
                beforeSend: function () {
                        
                },
                success:  function (response) {
                        var edad = response.split(";");
                        $("#edad").val(edad[0]);
                        $("#sexo").val(edad[1]);
                        
                }
        });
        
}

function obtenerenfermedad(){
    var t3 = $("#t3").val();
    var t4 = $("#t4").val();
    var tsh = $("#tsh").val();
    var edad = $("#edad").val();
    
    $.ajax({
                data:  {t3,t4,tsh,edad},
                url:   'ConsultaEnfermedad.php',
                type:  'post',
                beforeSend: function () {
                        
                },
                success:  function (response) {
                        $("#resultado").val("El paciente padece de "+response);
                        responsiveVoice.speak("El paciente padece de "+response,"Spanish Latin American Female");
                        
                        
                }
        });
}
    
        
        </script>

        <script>
        $(document).ready(function() {
    //Inicializamos la API de reconocimiento de Voz
    //Recuerda que solo funciona en pocos navegadores
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    //establecemos el idioma que reconocera
    recognition.lang = "es";
    
    var recognition1 = new webkitSpeechRecognition();
    recognition1.continuous = true;
    //establecemos el idioma que reconocera
    recognition1.lang = "es";
    
    var recognition2 = new webkitSpeechRecognition();
    recognition2.continuous = true;
    //establecemos el idioma que reconocera
    recognition2.lang = "es";

    //Cuando haga click en las letras...empezara a escuchar
    $('#t3').click(function(event) {
        //empezamos el reconocimiento de voz
        recognition.start();
    });
    
    $('#t4').click(function(event) {
        //empezamos el reconocimiento de voz
        recognition1.start();
    });
    
    $('#tsh').click(function(event) {
        //empezamos el reconocimiento de voz
        recognition2.start();
    });
        //Evento que se genera cuando terminamos de hablar...
           recognition.onresult = function (event) {
                finalResult = '';
                //event.resultIndex contiene las palabras que reconocio la API
                for (var i = event.resultIndex; i < event.results.length; ++i) {
                    //Verificamos todas las palabras reconocidas y las concatenamos para mostrarlas
                    if (event.results[i].isFinal) {
                        finalResult = event.results[i][0].transcript;
                        $('#t3').val(finalResult);
                    }
                }
            };
            
            recognition1.onresult = function (event) {
                finalResult = '';
                //event.resultIndex contiene las palabras que reconocio la API
                for (var i = event.resultIndex; i < event.results.length; ++i) {
                    //Verificamos todas las palabras reconocidas y las concatenamos para mostrarlas
                    if (event.results[i].isFinal) {
                        finalResult = event.results[i][0].transcript;
                        $('#t4').val(finalResult);
                    }
                }
            };
            
            recognition2.onresult = function (event) {
                finalResult = '';
                //event.resultIndex contiene las palabras que reconocio la API
                for (var i = event.resultIndex; i < event.results.length; ++i) {
                    //Verificamos todas las palabras reconocidas y las concatenamos para mostrarlas
                    if (event.results[i].isFinal) {
                        finalResult = event.results[i][0].transcript;
                        $('#tsh').val(finalResult);
                    }
                }
            };
});
        </script>
<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
<style>
	h1{

		font-weight: bold;
		font: 120% impact;
		
	}

	h4{
		font: oblique 180% sans-serif bold;
		color: yellow;

	}

textarea {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;

	width: 50%;
}
</style>
 <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i> -->
  <div class="w3-center">

  <h1 class="w3-xxxlarge w3-animate-bottom">SISTEMA DE DIAGNÓSTICO PARA DETECTAR LA ENFERMEDAD DE LA "TIROIDES" </h1>
    <div class="w3-padding-32">
      <h4>Sistema experto que permite detectar el tipo de enfermedad de la Tiroides basándose en resultados del Laboratorio Clínico</h4>
    </div>
  </div>
</header>

<center><body ng-app="">

<div class="w3-center w3-padding-64">
	<span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Lista de Pacientes</span>

  <div class="select-wrapper">
  	<br>
  	<br>
    <br>
    <select class="select" onchange="realizaProceso(this.value)" ng-model="paciente">
      <?php
       $cmd = "\"C:/Program Files (x86)/swipl/bin/swipl.exe\" -f laboratorioclinico.pl -g findall(X,pacientes,L),-t halt";
       $output = exec($cmd); 
       $resultaado = spliti(";",$output);
       for ($i=0;$i<count($resultaado)-1;$i++){
            $nombres = split("_", $resultaado[$i]);
            $nombre = strtoupper($nombres[0]);
            $apellido = strtoupper($nombres[1]);
            $resultadonombres = $nombre." ".$apellido;
            echo "<option>$resultadonombres</option>";
       }
    ?>
    </select>
 </div>

</div>

<div>
   
  <form >
    <div class="w3-group">
      <label>Nombre</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" type="text" name= "nom" id = "nom" value="{{paciente}}">
    </div>
    
    <div class="w3-group">
      <label>Edad</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" name = "edad" id = "edad">
    </div>
    <div class="w3-group">
      <label>Sexo:</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" name = "sexo" id = "sexo">
    </div>
    <div class="w3-group">
      <label>Examen T3</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" name = "t3" id = "t3" maxlength="5" required>
      
    </div>
    <div class="w3-group">
      <label>Examen T4</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" name = "t4" id = "t4" maxlength="5" required>
    </div>
    <div class="w3-group">
      <label>Examen TSH</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:50%;" name = "tsh" id = "tsh" maxlength="5" required>
    </div>
	<div class="w3-group">
	<label>Resultado</label>
	<br>
        <textarea id="resultado" ></textarea>
    </div>

    <button type="button" class="w3-btn" onclick="obtenerenfermedad()">Consultar</button>
    <input type="button" class="w3-btn" value="Registrar Paciente" onclick="window.open('RegistrarPaciente.php')" />
  </form>
 </div>

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
