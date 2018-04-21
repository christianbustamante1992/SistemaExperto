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
function ConsultaHombres(){
    $("#resultadomujeres").val("");
    var v1 = document.getElementById("checkbox-v-18").checked;
    var v2 = document.getElementById("checkbox-v-19").checked;
    var v3 = document.getElementById("checkbox-v-20").checked;
    var v4 = document.getElementById("checkbox-v-21").checked;
    var v5 = document.getElementById("checkbox-v-22").checked;
    var v6 = document.getElementById("checkbox-v-23").checked;
    var v7 = document.getElementById("checkbox-v-24").checked;
    var v8 = document.getElementById("checkbox-v-25").checked;
    var v9 = document.getElementById("checkbox-v-26").checked;
    var v10 = document.getElementById("checkbox-v-27").checked;
    var v11 = document.getElementById("checkbox-v-28").checked;
    var v12 = document.getElementById("checkbox-v-29").checked;
    var v13 = document.getElementById("checkbox-v-30").checked;
    var v14 = document.getElementById("checkbox-v-31").checked;
    var v15 = document.getElementById("checkbox-v-32").checked;
    var v16 = document.getElementById("checkbox-v-33").checked;
    var v17 = document.getElementById("checkbox-v-34").checked;
    var v18 = document.getElementById("checkbox-v-35").checked;
    var v19 = document.getElementById("checkbox-v-36").checked;
    
    if((v1 == true)&&(v2 == true)&&(v3 == true)&&(v4 == true)&&(v5 == true)&&(v6 == true)&&(v7 == true)&&(v8 == true)&&(v9 == true)&&(v10 == false)&&(v11 == false)&&(v12 == false)&&(v13 == false)&&(v14 == false)&&(v15 == false)&&(v16 == false)&&(v17 == false)&&(v18 == false)&&(v19 == false)){
        $("#resultadohombres").val("Usted puede tener Hipotiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar");
        responsiveVoice.speak("Usted puede tener Hipotiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar","Spanish Latin American Female");
    }else{
        if((v1 == false)&&(v2 == false)&&(v3 == false)&&(v4 == false)&&(v5 == false)&&(v6 == false)&&(v7 == false)&&(v8 == false)&&(v9 == false)&&(v10 == true)&&(v11 == true)&&(v12 == true)&&(v13 == true)&&(v14 == true)&&(v15 == true)&&(v16 == true)&&(v17 == true)&&(v18 == true)&&(v19 == true)){
            $("#resultadohombres").val("Usted puede tener Hipertiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar");
            responsiveVoice.speak("Usted puede tener Hipertiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar","Spanish Latin American Female");
        }else{
            
            $("#resultadohombres").val("Usted no padece de ningun tipo de tiroides");
            responsiveVoice.speak("Usted no padece de ningun tipo de tiroides","Spanish Latin American Female");
        
        }
    }
}

function ConsultaMujeres(){
    $("#resultadomujeres").val("");
    var v1 = document.getElementById("checkbox-v-1").checked;
    var v2 = document.getElementById("checkbox-v-2").checked;
    var v3 = document.getElementById("checkbox-v-3").checked;
    var v4 = document.getElementById("checkbox-v-4").checked;
    var v5 = document.getElementById("checkbox-v-5").checked;
    var v6 = document.getElementById("checkbox-v-6").checked;
    var v7 = document.getElementById("checkbox-v-7").checked;
    var v8 = document.getElementById("checkbox-v-8").checked;
    var v9 = document.getElementById("checkbox-v-9").checked;
    var v10 = document.getElementById("checkbox-v-10").checked;
    var v11 = document.getElementById("checkbox-v-11").checked;
    var v12 = document.getElementById("checkbox-v-12").checked;
    var v13 = document.getElementById("checkbox-v-13").checked;
    var v14 = document.getElementById("checkbox-v-14").checked;
    var v15 = document.getElementById("checkbox-v-15").checked;
    var v16 = document.getElementById("checkbox-v-16").checked;
    var v17 = document.getElementById("checkbox-v-17").checked;
     
    
    if((v1 == true)&&(v2 == true)&&(v3 == true)&&(v4 == true)&&(v5 == true)&&(v6 == true)&&(v7 == true)&&(v8 == true)&&(v9 == true)&&(v10 == false)&&(v11 == false)&&(v12 == false)&&(v13 == false)&&(v14 == false)&&(v15 == false)&&(v16 == false)&&(v17 == false)){
        $("#resultadomujeres").val("Usted puede tener Hipotiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar");
        responsiveVoice.speak("Usted puede tener Hipotiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar","Spanish Latin American Female");
        }else{
        if((v1 == false)&&(v2 == false)&&(v3 == false)&&(v4 == false)&&(v5 == false)&&(v6 == false)&&(v7 == false)&&(v8 == false)&&(v9 == false)&&(v10 == true)&&(v11 == true)&&(v12 == true)&&(v13 == true)&&(v14 == true)&&(v15 == true)&&(v16 == true)&&(v17 == true)){
            $("#resultadomujeres").val("Usted puede tener Hipertiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar");
            responsiveVoice.speak("Usted puede tener Hipertiroidismo. Se le recomienda que se realice examenes t3, t4 y tsh para poder confirmar","Spanish Latin American Female");
        }else{
            
            $("#resultadomujeres").val("Usted no padece de ningun tipo de tiroides");
            responsiveVoice.speak("Usted no padece de ningun tipo de tiroides","Spanish Latin American Female");
        
        }
    }
}
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

<center><body>

<div class="w3-center w3-padding-64">
	<span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Síntomas de la Tiroides</span>
</div>

   <form>
    <fieldset data-role="controlgroup" class="w3-container w3-padding-64 w3-center" style="width:50%;">
        <legend>Mujeres:</legend>
        <input name="checkbox-v-2a" id="checkbox-v-1" type="checkbox">
        <label >Fatiga</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-2" type="checkbox"> 
        <label >Agotamiento</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-3" type="checkbox">
        <label >Depresion</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-4" type="checkbox"> 
        <label >Dificultad para concentrarse</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-5" type="checkbox">
        <label >Subida de peso sin explicacion</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-6" type="checkbox"> 
        <label >Piel seca</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-7" type="checkbox">
        <label >Calambres</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-8" type="checkbox"> 
        <label >Perdida de cabello</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-9" type="checkbox">
        <label >Extrenimiento</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-10" type="checkbox"> 
        <label >Nerviosismo</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-11" type="checkbox">
        <label >Aumento de transpiracion</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-12" type="checkbox"> 
        <label >Debilidad</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-13" type="checkbox">
        <label >Ataques de panico</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-14" type="checkbox"> 
        <label >Insomnio</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-15" type="checkbox">
        <label >Perdida de peso</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-16" type="checkbox"> 
        <label >Presion arterial</label> <br>
        <input name="checkbox-v-2a" id="checkbox-v-17" type="checkbox">
        <label >Menor cantidad de flujo</label><br>
        <div class="w3-group">
	<label>Resultado</label>
	<br>
        <textarea id="resultadomujeres" ></textarea>
    </div>
        <button type="button" class="w3-btn" onclick="ConsultaMujeres()">Consultar</button>
    </fieldset>
    <br>
    <fieldset data-role="controlgroup" class="w3-container w3-padding-64 w3-center" style="width:50%;">
        <legend>Hombres:</legend>
        <input name="checkbox-v-2a" id="checkbox-v-18" type="checkbox">
        <label >Piel, unas y cabello quebradizo</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-19" type="checkbox">
        <label >Disminucion en la sudoracion</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-20" type="checkbox">
        <label >Perdida de apetito</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-21" type="checkbox">
        <label >Aumento de Peso</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-22" type="checkbox">
        <label >Cara y Parpados hinchados</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-23" type="checkbox">
        <label >Bulbo en el cuello</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-24" type="checkbox">
        <label >Disminucion de la actividad cardiaca</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-25" type="checkbox">
        <label >Perdida de memoria</label><br>
        <input name="checkbox-v-2a" id="checkbox-v-26" type="checkbox">
        <label >Cambios de humor</label><br>
        <input name="checkbox-v-2b" id="checkbox-v-27" type="checkbox"> 
        <label >Perdida de peso</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-28" type="checkbox"> 
        <label >Aumento de Apetito</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-29" type="checkbox"> 
        <label >Sudoracion excesiva</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-30" type="checkbox"> 
        <label >Diarrea</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-31" type="checkbox"> 
        <label >Aumento de sensacion de sed</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-32" type="checkbox"> 
        <label >Debilidad</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-33" type="checkbox"> 
        <label >Vision doble</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-34" type="checkbox"> 
        <label >Ojos irritados</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-35" type="checkbox"> 
        <label >Inflamacion de glandula tiroide</label> <br>
        <input name="checkbox-v-2b" id="checkbox-v-36" type="checkbox"> 
        <label >Agrandamiento de las mamas</label> <br>
        <div class="w3-group">
	<label>Resultado</label>
	<br>
        <textarea id="resultadohombres" ></textarea>
    </div>
        <button type="button" class="w3-btn" onclick="ConsultaHombres()">Consultar</button>
    </fieldset>
    
    
</form>
   
<br>
<br>
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