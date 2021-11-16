
<!DOCTYPE html>
<html>
<head>
    
	<title>Vue.js-Realizar Encuesta</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="icon/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <!-- BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Oleo+Script&display=swap" rel="stylesheet">
 
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


    <!-- Vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- BootstrapVue js -->
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Sweet Alert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    
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
    font-size: 750%;
}

</style>

    <body style="background-image: linear-gradient(to bottom LEFT, #1B1815, #FF3F85);">
        <div id="menu-left"  >
             <br><br><br>
       <br><br><br><br>
            <center>
                <label for="input">  <h1 style="color: white" > Bienvenido !</span>  </h1>   </span></label>
                <br>
                  <label for="input">  <h1 style="color: white" >Formularios </span>  </h1>   </span></label>
                  <br>
                    <label for="input">  <h1 style="color: white" >Plus</span>  <span span style="color: #EA8C38" >+</span></h1>   </span></label>
           </center>
           
     </div>
    <br><br><br><br>
       <br><br><br><br>
   <div id="menu-right" >
      <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-7">
                    <div class="card-body">
                        
                    <form action="" @submit.prevent="onSubmit">
                      <div class="form-label-group">
                        <center>
                            <label for="input">  <h7 class="h1 mb-3 font-weight-normal" style="color: #a1cc1b">Iniciar sesión</h7>  <span style="color: #FF0000"> </span></label>
                        </center>
                        
                          <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" v-model="name" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="email" v-model="email" class="form-control">
                  </div>
                  
    
                  
                  <div class="form-group">
                    <button class="btn btn-sm btn-outline-info"> <i class="fa fa-check" aria-hidden="true"></i> Listo</button>
                  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
<br><br><br><br>

</body>
</html>