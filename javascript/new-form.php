<?php require('mymodel.php');
$obj_db = new Database();
$cont = 0;
 
    $titulo = ''; if(isset($_POST['titulo'])){ $titulo = trim($_POST['titulo']); } // definimos $titulo para evitar errores, y guardamos su valor por el ingresado.
 
        if(isset($_POST['enviar'])){
            if($titulo != ""){
        $num = $_POST['opciones']; // este valor lo vamos a obtener de lo que el usuario ingrese como numero de opciones al crear la encuesta
        $fecha = date('Y-m-d');
 
        $sql= "INSERT INTO `encuestas` (`id` ,`titulo` ,`fecha`) VALUES (NULL ,  '$titulo', '$fecha');"; // si han ingresado si quiera un titulo insertamos esta encuesta en la tabla
        mysqli_query($conex, $sql);
 
        $sql = "SELECT MAX(id) as id FROM encuestas"; // ahora obtenemos el id de la ultima fila,
                                                      // la que acabamos de ingresar,
                                                      // esto lo hacemos para poder asociarle las opciones
        $req =  mysqli_query($conex, $sql);
 
        while($result = mysqli_fetch_object($req)){
            $id_encuesta = $result->id;  // con el resultado obtenido hacemos un bucle y definimos los resultados como id_encuesta.
        }
 
        $sql = "INSERT INTO  `opciones` (`id` ,`id_encuesta` ,`nombre` ,`valor`) VALUES "; // En esta parte estamos armando un query SQL dinamico el cual sera modificado de acuerdo a lo que el usuario ingrese en el formulario.
        for($i=1;$i<=$num;$i++){
            $opcnativa = trim($_POST['opc'.$i]); // obtenemos el nombre de cada opcion indivudalmente.
            if($opcnativa != ""){
                $sql .= "(NULL ,  '$id_encuesta',  '$opcnativa',  '0')"; // el id de la opcion ira null para que se ponga automaticamente, en id_encuesta pues ira el id de la encuesta que acabamos de crear, en 'nombre' ira el nombre de la opcion y valor ira 0, puesto que es una nueva opcion sin votos, esto se repetira con todas las opciones que el usuario haya definido.
                $cont++;
            }
            if($i == $num){
                $sql .= ";"; // si es que se llega al final, termina la consulta
            }else{
                $sql .= ", "; // sino se pone una , y se continua.
            }
        }
 
        if($cont < 2){ // si el usuario no definio ninguna opcion, se elimina la encuesta recien creada, esto es poco probable que suceda ya que la definicion de opciones la haremos con un select, y aqui se seleccionara el valor de 2 por defecto.
            $sql = "DELETE FROM `encuestas` WHERE id = ".$id_encuesta;
            echo "<div class='error'>Tiene que llevar por lo menos 2 opciones.</div>";
        }else{
            header('location: index.php'); // por ultimo si todo salio bien, redireccionamos al index para que el usuario vea su encuesta recien creada.
        }
        mysqli_query($conex, $sql); // y ejecutamos el query
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <!-- BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
    <!-- Font Awesome core CSS -->
    <link href="css/all.min.css" rel="stylesheet" />
    <title>Crear Formulario</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/toggle_switch.css">
        <link rel="stylesheet" href="css/box_preguntas.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
   <style>
     .padre {
  display: flex;
  justify-content: center;
}
.hijo {
  padding: 20px;
  margin: 20px;
    background-color:#f1f3f4;
}
h4 {
  text-align: center;
}

.contenedor{
        background-color:#f1f3f4;
}

</style>
  <body>
    <div class="container" id="app" v-cloak>
      <div class="row">
        <div class="col-md-12 mt-5">
        </div>
      </div>
    <div class="row">

        <div class="col-md-12">
          <!-- Update Record -->
          <div>
            <b-modal ref="my-modal1" hide-footer title="Editar Contacto">
              <div>
                <form action="" @submit.prevent="onUpdate">

                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" v-model="edit_id" class="form-control">
                  </div>

                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" v-model="edit_name" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" v-model="edit_last_name" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" v-model="edit_address" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" v-model="edit_phone" class="form-control">
                  </div>

                  
                  <div class="form-group">
                    <label for="">Edad</label>
                    <input type="text" v-model="edit_age" class="form-control">
                  </div>

       
                  <div class="form-group">
                    <label for="">Altura</label>
                    <input type="number"  step="0.01" v-model="edit_height" class="form-control">
                  </div>


                  <div class="form-group">
                    <button class="btn btn-sm btn-outline-info"> <i class="fa fa-check" aria-hidden="true"></i> Actualizar</button>
                  </div>


                </form>
              </div>
              <b-button class="mt-3" variant="outline-danger" block @click="hideModal('my-modal1')">Cerrar</b-button>
            </b-modal>
          </div>
        </div>
      </div>

      <div class="wrap">
    
        <h1>Nuevo Formulario<span span="" style="color: #a1cc1b">+</span></h1>
    <br>
    <form action="" method="post">

        <label>Titulo:</label>
        <input name="titulo" type="text" value="<?php echo $titulo; ?>"       size="80"><br><br>
                <label>Descripción:</label>
                 <textarea id="descripcion_formulario"  placeholder="Descripcion de Formulario" name="descripcion_form" rows="4" cols="83">
                </textarea>
                      <br><br>
             <div class="contenedor">
                      <div class="input-container">
    
               <h4>Permisos del Formulario  <i class="bi bi-eye-fill"></i></h4>
  </div>

                    
        <div class="padre">
        <div class="hijo">
        <label>Editable</label>
        <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        </label>
                <label>Formulario público Extra-Net</label>
                
        <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label><br><br>

      
  </div>
  <div class="hijo">
      
<label>Formulario público Intra-Net </label>

        <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>

<label>Estado de Formulario</label>
        <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>

              </div>
  </div>
</div>
        
 
        
        
            <?php
        // esto es simplemente un formulario, pero aqui hacemos una condicion, identificamos si se ha definido un numero de opciones, si es asi hacemos un bucle, sino es asi no mostramos el select para definir un numero de opciones, como es obvio por defecto se mostrara el bucle:
    if(isset($_POST['opc'])){
        $num = $_POST['opciones']; // guardamos el valor del numero de opciones
        for($i=1;$i<=$num;$i++){ // hacemos el bucle mostrando los campos respectivos.
    ?>
    <div class="cf">

        <label>Pregunta <?php echo $i; ?>: 

        </label>
        
        

  <div class="input-container">
    
        <input name="opc<?php echo $i; ?>" type="text" size="70">
        <i class="fa fa-cogs icon" @click="showModal('my-modal1')"></i>
            <button @click="showModal('my-modal1')" class="btn btn-sm btn-outline-info">Editar</button>
  </div> 


        
    </div>
    <?php } // aqui termina el bucle ?>
    <div class="cf">
        <input name="enviar" type="submit" value="Enviar">
        <input name="opciones" type="hidden" value="<?php echo $num; // le pasamos el valor de num al proceso del formulario mediante un campo oculto. ?>">
        <input name="cont" type="hidden" value="<?php echo cont; ?>">
    </div>
    
    
    </div>
    <?php }else{ // sino se ha definido nro de opciones: ?>
    <div class="fl">
        <label>Nº de Preguntas en Formulario:</label>
        <select name="opciones">
            <?php for($i=2;$i<=100;$i++){ // esto es un loop simple, solo para ahorrarnos trabajo, este select tendra de 2 a 100 opciones, si deseas cambiarlo lo puedes hacer aqui. ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="cf">
        <input name="opc" type="submit" value="Generar Formulario">
    </div>
 
      <?php } // Sino se han definido opciones, que en vez de salir el boton de Enviar, salga uno que sea Continuar. ?>

    </form>
    </div>
    </div>
    <!-- Vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- BootstrapVue js -->
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
      var app = new Vue({
        el: '#app',
        data: {
          titulo: '',
          descripcion: '',
          p_editable: '',
          p_publico_extranet: '',
          p_publico_intranet: '',
          estado_formulario: '',
          height: '',
          records: [],
          edit_id: '',
          edit_name: '',
          edit_last_name: '',
          edit_address: '',
          edit_phone: '',
          edit_age: '',
          edit_height: ''
        },

        methods: {
          showModal(id) {
            this.$refs[id].show()
          },
          hideModal(id) {
            this.$refs[id].hide()
          },

          onSubmit(){
            if (this.name !== '' && this.phone !== '') {
              var fd = new FormData()

              fd.append('name', this.name)
              fd.append('last_name', this.last_name)
              fd.append('address', this.address)
              fd.append('phone', this.phone)
              fd.append('age', this.age)
              fd.append('height', this.height)

              axios({
                url: 'insert.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  alert('¡Contacto Agregado!')
                  this.name = ''
                  this.last_name = ''
                  this.address = ''
                  this.phone = ''
                  this.age = ''
                  this.height = ''

                  app.hideModal('my-modal')
                  app.getRecords()
                }else{
                  alert('error')
                }
              })
              .catch(err => {
                console.log(err)
              })
            }else{
              alert('empty')
            }
          },

          getRecords(){
            axios({
              url: 'records.php',
              method: 'get'
            })
            .then(res => {
              // console.log(res)
              this.records = res.data.rows
            })
            .catch(err => {
              console.log(err)
            })
          },

          deleteRecord(id){
            if (window.confirm('¿Eliminar Contacto?')) {
              var fd = new FormData()

              fd.append('id', id)

              axios({
                url: 'delete.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  alert('delete successfully')
                  app.getRecords();
                }else{
                  alert('error')
                }
              })
              .catch(err => {
                console.log(err)
              })
            }
          },

          editRecord(id){
            var fd = new FormData()

            fd.append('id', id)

            axios({
              url: 'edit.php',
              method: 'post',
              data: fd
            })
            .then(res => {
              if (res.data.res == 'success') {
                this.edit_id = res.data.row[0]
                this.edit_name = res.data.row[1]
                this.edit_last_name = res.data.row[2]
                this.edit_address = res.data.row[3]
                this.edit_phone = res.data.row[4]
                this.edit_age = res.data.row[5]
                this.edit_height = res.data.row[6]
                
                app.showModal('my-modal1')
              }
            })
            .catch(err => {
              console.log(err)
            })
          },

          onUpdate(){
            if (this.edit_name !== '' && this.edit_phone !== '' && this.edit_last_name !== '' && 
                this.edit_address !== ''  && this.edit_age !=='' && this.edit_height !=='' ) {

              var fd = new FormData()
              fd.append('id', this.edit_id)
              fd.append('name', this.edit_name)
              fd.append('last_name', this.edit_last_name)
              fd.append('address', this.edit_address)
              fd.append('phone', this.edit_phone)
              fd.append('age', this.edit_age)
              fd.append('height', this.edit_height)

              axios({
                url: 'update.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  alert('Pregunta Actualizada');
                  this.edit_name = '';
                  this.edit_last_name = '';
                  this.edit_address = '';
                  this.edit_phone= '';
                  this.edit_age= '';
                  this.edit_height= '';
                  app.hideModal('my-modal1');
                  app.getRecords();
                }
              })
              .catch(err => {
                console.log(err)
              })

            }else{
              alert('empty')
            }
          }

        },

        mounted: function(){
          this.getRecords()
        }
      })

    </script>
</html>