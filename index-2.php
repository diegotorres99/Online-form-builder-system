<!DOCTYPE html>
<html>
<head>
	<title>Parrallax</title>
	<link rel="stylesheet" href="SCSS/style.css" type="text/css">
  	<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<style>
@font-face
{
   font-family: "fonts/../Oraqle Script";
   src: url("fuentefancy.eot");
   src: url("fuentefancy.eot?#amocristalab") format("embedded-opentype"),
        url("fuentefancy.woff") format("woff"),
        url("fuentefancy.ttf") format("truetype"),
        url("fuentefancy.svg#IDdelafuente") format("svg");
}

h1
{
   font-family: "Oraqle Script";
    font-size: 950%;
}

h2
{
   font-family: "Oraqle Script";
    font-size: 650%;
}
body {
       
       background-image: linear-gradient(to bottom LEFT, #1B1815, #1B1815);
       text-align: center;
     }
     
</style>
   <body >
<div class="wrapper">
<br><br><br><br><br><br><br><br><br><br><br><br>
  <section>
    <div class="section-content has-diagonal">

      <h1 style="color: white" >Globals</span><span span style="color: #a1cc1b">+</span> Formularios</h1>  
      <div id="Contenedor">
            <h2>Bienvenidos</h2>
            <p style="color: #EA8C38" > Digite sus credenciales</p>
		 <div class="Icon">
                    <!--Icono de usuario-->

                 </div>
<div class="ContentForm">
		 	<form action="" method="post" name="FormEntrar">
		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="password" name="contra" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
				</div>
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
        <div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a>
      
        <br><br><br><br></div>
        <br><br><br><br>
		 	</form>
       <br><br><br><br>
		 </div>	
		 </div>
<br><br><br><br>
</form id="contacto" >
<br><br><br><br>
    </div>
    <div class="section-mask">
    
    
    
    </div>
  </section>
  <section>
    <div class="section-content has-padding">
      <h1>Esta es una sección normal</h1>
    <p>Podemos notar que el contenido puede tener una altura automática.</p>
      <p>Con una altura automática podemos tener un contenido dinámico que no rompa el estilo del diseño<br>sin importar el dispositivo con el que se acceda al sitio.</p>
    </div>
  </section>
  <section>
    <div class="section-content has-diagonal">
      <h1>Esta es una sección en diagonal y con parallax</h1>
    </div>
    <div class="section-mask bg-option-2 has-parallax"></div>
  </section>
    <section>
    <div class="section-content has-padding">
      <h1>Gracias</h1>
    </div>
  </section>
</div>
</body>
</html>