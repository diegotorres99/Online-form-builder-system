<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./mostrar/css/usuarios-controller.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- BootstrapVue js -->
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
    <!-- BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
    <div id="app">
        <div class="my-container">
            <h1>Usuarios</h1>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Departamento</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users">
                                <td>{{ user.cedula }}</td>
                                <td>{{ user.nombre }}</td>
                                <td>{{ user.apellidos }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.pass }}</td>
                                <td>{{ user.rol }}</td>
                                <td>{{ user.nombre_departamento }}</td>
                                <td>
                                    <button style="margin:3px;" class="btn btn-primary" v-on:click="showModalUpdate(user.cedula, user.nombre, user.apellidos, user.email, user.pass, user.id_Rol, user.id_departamento)">Editar</button>
                                    <button class="btn btn-danger" v-on:click="sureOpt(user.cedula)">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
            
        </div>

        <!-- Update Record -->
        <div>
            <b-modal ref="my-modal1" hide-footer title="Modificar Usuario">
              <div>
                <div>
              

                  <div>
                    <label for="id">
                        Identificacion:
                    </label><br />
                    <input class="form-control" v-model="selected_id" type="text" name="id" id="id" readonly class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="nombre">
                        Nombre:
                    </label><br />
                        <input class="form-control" v-model="selected_nombre" type="text" name="nombre" id="nombre" required class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="ape">
                        Apellidos:
                    </label><br />
                        <input class="form-control" v-model="selected_ape" type="text" name="ape" id="ape" required class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="email">
                        Email:
                    </label><br />
                        <input class="form-control" v-model="selected_email" type="email" name="email" id="email" required class="form-control">
                  </div>

                  
                  <div class="form-group">
                    <label for="pass">
                        Contraseña:
                    </label><br />
                        <input class="form-control" v-model="selected_pass" type="text" name="pass" id="pass" required class="form-control">
                  </div>

       
                  <div class="form-group">
                    <label for="rol">
                        Rol:
                    </label><br />
                        <!-- /* <input class="my-input"value=""  type="text" name="rol" id="rol" required class="form-control"> */ -->
                        <select class="form-control" id="rol"  v-model="selected_rol">
                            <option v-for="r in rols" v-bind:value="r.id_Rol">
                                {{ r.rol }}
                            </option>
                        </select>
                        
                  </div>

                  <div class="form-group">
                    <label for="depart">
                        Departamento:
                    </label><br />
                    <select  class="form-control" v-model="selected_dp">
                        <option id="depart" v-for="d in deps" v-bind:value="d.id_departamento">
                            {{ d.nombre_departamento }}
                        </option>
                    </select>
                  </div>

                  <div class="form-group">
                  <button id="btn-save" style="margin:3px;" class="btn btn-primary" v-on:click="save()">Guardar Datos</button>
                  <button class="btn btn-danger"  @click="hideModal2('my-modal1')">Cancelar</button>
                  </div>


                </div>
              </div>
              
            </b-modal>
          </div>
      </div>
      
    </div>
    <br /><br />

    
    

    <script>
        var app = new Vue({
            el: "#app",
            data() {
                return {
                    selected_rol: 1,
                    selected_dp: 1,
                    selected_id: '',
                    selected_nombre: '',
                    selected_ape: '',
                    selected_email: '',
                    selected_pass: '',
                    selected_rol: '',
                    selected_dp: '',
                    data: "Hello Vue",
                    id_departamento: 1,
                    name_departamento: '',
                    users: [],
                    deps: [],
                    rols: [],
                    sure: false,
                    departament: "Department Name",
                    service: "Service Name",
                    filterSearch: "Bienvenido!"
                    
                };
            },
            methods: {
                changeOperetion: function() {
                    this.sure = !this.sure;
                },
                showModal2(id) {
                    this.$refs[id].show();
                },
                hideModal2(id) {
                    this.$refs[id].hide()
                },
                listUsers: function() {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 9
                        })
                        .then(response => {
                            if (Object.keys(response.data).length > 0) {
                                this.users = response.data;

                                //console.log(response.data);
                            } else {
                                //console.log(lenght(this.users));
                                this.users = [
                                    { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                                ];
                            }
                        })
                        .catch(errror => this.users = [
                            { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                        ]);
                },
                listDep: function() {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 2
                        })
                        .then(response => {
                            if (Object.keys(response.data).length > 0) {
                                this.deps = response.data;

                                //console.log(response.data);
                            } else {
                                //console.log(lenght(this.deps));
                                this.deps = [
                                    { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                                ];
                            }
                        })
                        .catch(errror => this.deps = [
                            { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                        ]);
                },
                listRol: function() {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 10
                        })
                        .then(response => {
                            if (Object.keys(response.data).length > 0) {
                                this.rols = response.data;

                                //console.log(response.data);
                            } else {
                                //console.log(lenght(this.rols));
                                this.rols = [
                                    { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                                ];
                            }
                        })
                        .catch(errror => this.rols = [
                            { cedula: 'N/A', nombre: 'N/A',email: 'N/A', apellidos: 'N/A' }
                        ]);
                },
                deleteUser: function(set_id) {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 7,
                            set_id_user: set_id
                        })
                        .then(response => {

                            if (Object.keys(response.data).length > 0) {
                                //console.log(response.data);
                                this.listUsers();
                            } else {
                                
                            }
                        })
                        .catch(errror => alert("Error al eliminar el elemento."));
                },
                sureOpt: function(set_id) {
                    var anwser = confirm(`Esta seguro de eliminar el elemento ${set_id}`);
                    //console.log(anwser);

                    if (anwser) {
                        //console.log(set_id);
                        this.deleteUser(set_id);
                    }
                },
                hide: function() {
                    getElementById("modal-show").classList.toggle('hide');
                    
                },
                save: function(){
                    var set_id = document.getElementById("id").value;
                    var set_nombre = document.getElementById("nombre").value;
                    var set_ape = document.getElementById("ape").value;
                    var set_email = document.getElementById("email").value;
                    var set_pass = document.getElementById("pass").value;
                    var set_id_rol = document.getElementById("rol").value;
                    var set_id_dep = document.getElementById("depart").value;
                    
                    
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 8,
                            set_id_user: set_id,
                            set_nombre: set_nombre,
                            set_ape: set_ape,
                            set_email: set_email,
                            set_pass: set_pass,
                            set_id_rol: set_id_rol,
                            set_id_dep: set_id_dep
                        })
                        .then(response => {
                            if (Object.keys(response.data).length > 0) {
                                //console.log(response.data);
                                
                                if (response.data == "OK") {
                                    alert("Datos modificados con exito");
                                    this.listUsers();
                                    this.hideModal2('my-modal1');
                                }
                                else {
                                    alert("Error al eliminar el elemento.")
                                }
                            }
                        })
                        .catch(errror => console.log('error'));
                },
                showModalUpdate: function(set_id, set_nombre, set_ape, set_email, set_pass, set_id_rol, set_id_dep) {
                    // document.getElementById("modal-show").classList.remove('hide');
                    console.log(set_id);
                    console.log(set_nombre);
                    console.log(set_ape);
                    console.log(set_email);
                    console.log(set_pass);
                    console.log(set_id_rol);
                    console.log(set_id_dep);

                    this.selected_id = set_id;
                    this.selected_nombre = set_nombre;
                    this.selected_ape = set_ape;
                    this.selected_email = set_email;
                    this.selected_pass = set_pass;
                    this.selected_rol = set_id_rol;
                    this.selected_dp = set_id_dep;

                   // document.getElementById("id").value = set_id;
                    // document.getElementById("nombre").value = set_nombre;
                    // document.getElementById("ape").value = set_ape;
                    // document.getElementById("email").value = set_email;
                    //document.getElementById("pass").value = set_pass;
                    // document.getElementById("modal-show").style.zIndex = 100;
                    app.showModal2('my-modal1');
                }
            },
            created: function() {
                this.listUsers();
                this.listRol();
                this.listDep();
            }



        })
    </script>
</body>

</html>