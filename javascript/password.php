<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recuperar Contraseña</title>
        <link href="css/styles-password.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Vuejs -->
         <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
         <!-- BootstrapVue js -->
         <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
        <!-- Axios -->
         <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    </head>
    
    <style>
      [v-cloak] {
        display: none;
      }
      body {
      background-image: linear-gradient(to bottom LEFT, BLACK, #212121);
      }

    </style>
    <body>
    <div id="app" >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Recuperación de Contraseña</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Primero, ingresa tu correo electrónico luego recibiras tu contraseña.</div>
                                        <form action="" @submit.prevent="onPassword">
                                            <div class="form-group"><label class="small mb-1"  for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" v-model='correo' type="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico " /></div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="login.php">Volver al login</a>
                                                          <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Recuperar Contraseña</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="registrate.php">Necesitas una Cuenta? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> 2021&copy; Globals+ Formularios</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        </di>

    </body>
    
        <script>
      var app = new Vue({
        el: '#app',
        data: {
   
          correo: ''

        },
        methods: {
          showModal(id) {
            this.$refs[id].show()
          },
          hideModal(id) {
            this.$refs[id].hide()
          },
          onPassword(){
          if(this.correo !==''){
              
              var fd = new FormData();
              fd.append('correo', this.correo)
 
              
              axios({
                url: 'validar_correo.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                console.log(res)
                if (res.data.res != '') {
     
                  alert('¡ Contraseña Restablecida, Revisa tu Email !')
                  this.correo = ''
                   //window.location.href = 'single-service.php'
                  //  window.location.href = 'realizar-encuesta.php?name='+res.data.name +'&id=' + res.data.id
                  // app.hideModal('my-modal')
                  //app.getRecords()

                }else{
                  alert('Error !, Correo No Existe, Intenta Nuevamente.')
                }
              })
              .catch(err => {
                console.log(err)
              })
            }else{
              alert('Error, Campos Vacíos')
            }
          }
        },

      })
</script>

    
</html>
