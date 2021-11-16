<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./mostrar/css/mostrar-formularios-controller.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>
    <div id="app">
        <div class="hero">
            <div class="hero-content">
                <div v-if="catalogDepartment == true">
                    <h5>Formularios Departamento</h5>
                    <h2 v-for="(dp, index) in departments" v-if="dp.id_departamento == filterSearch">{{ dp.nombre_departamento }}</h2>
                </div>
                <div v-else="catalogDepartment == false">
                    <h5>Formularios Servicio</h5>
                    <h2>{{ filterSearch }}</h2>
                </div>

                <form action="" method="get">
                    <select name="" id="" v-model="filterSearch" v-if="catalogDepartment == false">
                        <div >
                            <option v-for="(s, index) in services" v-bind:value="s.name" :value="s.name">{{s.name}}</option>
                        </div>
                    </select>

                    <select name="" id="" v-model="filterSearch" v-if="catalogDepartment == true">
                        <div >
                            <option v-for="(department, index) in departments" v-bind:value="department.id_departamento" :value="department.id_departamento">{{department.nombre_departamento}}</option>
                        </div>
                    </select>

                    <input type="button" value="Buscar" v-on:click="listaforms()" class="btn btn-primary">
                    <!-- <input type="button" value="Buscar" class="btn btn-primary"> -->
                </form>

                <button class="btn-seccion" v-on:click="changeOperetion()" v-bind:class="{selectSeccion: catalogDepartment == true}">Departamento</button>
                <button class="btn-seccion" v-on:click="changeOperetion()" v-bind:class="{selectSeccion: catalogDepartment == false}">Servicio</button>
            </div>

        </div>
        <article class="catalog2">
        <div>
            <!-- <div v-for="(form, index) in forms" class="card" v-if="form.servicio == filterSearch || form.id_departamento_creacion == filterSearch"> -->
                <!-- <div>
                    <h3>{{ form.nombre_formulario }}</h3>
                    <p>{{ form.descripcion_formulario }}</p>

                    <button class="btn" v-on:click="searchForm(form.id_Formulario)">
                        Elegir
                         <a v-bind:href="responder_formulario.php?id={{ form.id_Formulario }}" style="color:white; text-decoration:none;">Elegir</a> --
                    </button>
                </div> -->

                <ul class="port-items2" v-for="(form, index) in forms" v-if="form.servicio == filterSearch || form.id_departamento_creacion == filterSearch">
                <li>
                    <div>
                        <h3>{{ form.nombre_formulario }}</h3>
                        <p>{{ form.descripcion_formulario }}</p>

                        <button class="btn" v-on:click="searchForm(form.id_Formulario)">
                            Elegir
                            <!-- <a v-bind:href="responder_formulario.php?id={{ form.id_Formulario }}" style="color:white; text-decoration:none;">Elegir</a> -->
                        </button>
                    </div>

                </li>
                </ul>
            </div>
            <!-- <div class="card"  v-else="form.servicio != filterSearch || form.id_departamento_creacion != filterSearch">
                <div class="card-text-contet">
                    <h3>N/A</h3>
                    <p>N/A</p>
                    <button class="btn">
                        <a href="#" style="color:white; text-decoration:none;">Elegir</a>
                    </button>
                </div>
            </div> -->
        <!-- </div> -->
        </div>
    </article>


    <script>
        var app = new Vue({
            el: "#app",
            data() {
                return {
                    data: "Hello Vue",
                    id_departamento: 1,
                    name_departamento: '',
                    forms: [],
                    services: [
                        { name: "Talento Humano" },
                        { name: "Economico" },
                        { name: "S" }
                    ],
                    //services: [],
                    departments: [],
                    getForm: [],
                    catalogDepartment: true,
                    departament: "Department Name",
                    service: "Service Name",
                    filterSearch: "Bienvenido!"
                };
            },
            methods: {
                changeOperetion: function() {
                    this.catalogDepartment = !this.catalogDepartment;
                },
                listaforms: function() {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 1,
                            id_departamento: this.id_departamento
                        })
                        .then(response => {

                            if (Object.keys(response.data).length > 0) {
                                this.forms = response.data;
console.log('this.forms');
                                console.log(this.forms);
                            } else {
                                console.log(lenght(this.forms));
                                this.forms = [
                                    { nombre_formulario: 'N/A', descripcion_formulario: 'N/A' }
                                ];
                            }
                        })
                        .catch(errror => this.forms = [
                            { nombre_formulario: 'N/A', descripcion_formulario: 'N/A' }
                        ]);
                },
                listaDep: function() {
                    axios.post('./mostrar/DB/consultas.php', {
                            request: 2
                        })
                        .then(response => {

                            if (Object.keys(response.data).length > 0) {
                                this.departments = response.data;


                                console.log(response.data);
                            } else {
                                console.log(lenght(this.departments));
                                this.departments = [
                                    { id_departamento: 'N/A', nombre_departamento: 'N/A' }
                                ];
                            }
                        })
                        .catch(errror => this.departments = [
                            { id_departamento: 'N/A', nombre_departamento: 'N/A' }
                        ]);
                },
                filteForms: function() {

                },
                searchForm: function(id) {
                    window.location.href = `../responder_formulario.php?id=${id}`
                }
            },
            created: function() {
                this.listaforms();
                this.listaDep();
            }



        })
    </script>
</body>

</html>