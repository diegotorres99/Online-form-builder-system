<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./create/create-controller.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body >

<div id="app">
    <div class="hero" >
        <div class="dep" id="dep" v-on:click="showDepaForm()">
            <div>
                <h3 class="content-text">Crear nuevo<br><strong> Departamento</strong></h3>
            </div>

        </div>
        <div class="dep-form" id="dep-form">
            <h3 class="content-text">Crear nuevo departamento</h3>
            <form action="" method="post">
                <label for="">
                    Nombre del Departamento: <br>
                    <input type="text" v-model="dp_nombre" placeholder="Nombre del Departamento"><br>
                </label>
                <label for="">
                    Estado: <br>
                    <select v-model="dp_estado">
                        <option v-for="(dp_s, index) in dp_estados" :value=dp_s.name>{{ dp_s.name }}<option>
                    </select><br>
                </label>
                <br>
                <input type="submit" value="Guardar" v-on:click="saveDep()" class="btn btn-guardar">
                <input type="button" value="Back" v-on:click="hideForms()" class=" btn btn-primary">
            </form>
        </div>
        <div class="func" id="func" v-on:click="showFuncForm()">
            <div>
                <h3 class="content-text">Crear nuevo <br> <strong>Funcionario</strong></h3>
            </div>
        </div>
        <div class="func-form" id="func-form">
            <h3 class="content-text">Crear nuevo funcionario</h3>
            <form action="" method="post">
                <label for="">
                    Identificador: <br>
                    <select name="" id="" v-model="user_id">
                        <div >
                            <option v-for="(u, index) in users"  :value="u.cedula">{{u.cedula}}</option>
                        </div>
                    </select>
                </label>
                <br>
                <label for="">
                    Asignar departamento: <br>
                    <select name="" id="" v-model="id_departamento">
                        <div >
                            <option v-for="(dp, index) in departments"  :value="dp.id_departamento">{{dp.nombre_departamento}}</option>
                        </div>
                    </select>
                </label>
                <br>
                <input type="submit" value="Guardar" v-on:click="newFunc()" class="btn btn-guardar">
                <input type="button" value="Back" v-on:click="hideForms()" class="btn btn-primary">
            </form>
        </div>

    </div>
    <br><br>
</div>
    
    <script>
        var app = new Vue({
        el: "#app",
        data() {
            return {
                user_id: "",
                id_departamento: 0,
                forms: [],
                departments: [],
                users: [],
                getForm: '',
                catalogDepartment: true,
                departament: "Department Name",
                service: "Service Name",
                dp_nombre: "",
                dp_estado: "",
                dp_estados:[
                    { name: "ACTIVO" },
                    { name: "INACTIVO" },
                    { name: "EN ESPERA" }
                ]
            };
        },
        methods: {
            showDepaForm: function() {
                var dep = document.getElementById('dep');
                var func = document.getElementById('func');
                var depForm = document.getElementById('dep-form');
                var funcForm = document.getElementById('func-form');
                

                func.classList.toggle('hide');
                dep.classList.remove('hide');
                depForm.style.zIndex = 10;
            },
            showFuncForm: function() {
                var dep = document.getElementById('dep');
                var func = document.getElementById('func');
                var depForm = document.getElementById('dep-form');
                var funcForm = document.getElementById('func-form');

                dep.classList.toggle('hide');
                func.classList.remove('hide');
                funcForm.style.zIndex = 20;
            },
            hideForms: function() {
                var dep = document.getElementById('dep');
                var func = document.getElementById('func');
                var depForm = document.getElementById('dep-form');
                var funcForm = document.getElementById('func-form');

                for (let i = 0; i < 2; i++) {
                    document.querySelectorAll('.btn-primary')[i].addEventListener('click', function restartdisplay() {
                        funcForm.style.zIndex = -10;
                        depForm.style.zIndex = -10;
                        func.classList.remove('hide');
                        dep.classList.remove('hide');
                    });

                }
            },
            listDep: function() {
                axios.post('./mostrar/DB/consultas.php', {
                        request: 2
                    })
                    .then(response => {

                        if (Object.keys(response.data).length > 0) {
                            this.departments = response.data;


                            console.log(this.departments);
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
            listUser: function() {
                axios.post('./mostrar/DB/consultas.php', {
                    request: 4
                })
                .then(response => {
                    if (Object.keys(response.data).length > 0) {
                        this.users = response.data;

                        console.log(response.data);
                    } else {
                        console.log(lenght(this.users));
                        this.users = [
                            { cedula: 'N/A' }
                        ];
                    }
                })
                .catch(errror => this.users = [
                    { cedula: 'N/A' }
                ]);
            },
            saveDep: function() {
                axios.post('./mostrar/DB/consultas.php', {
                    request: 3,
                    set_nombre_dp: this.dp_nombre,
                    set_estado_dp: this.dp_estado
                })
                .then(response => {
                    if (Object.keys(response.data).length > 0) {
                        
                        console.log(response.data);
                    } else {
                        console.log(lenght(this.users));
                        alert('error');
                    }
                })
                .catch(errror => alert('error')
                );
            },
            newFunc: function() {
                axios.post('./mostrar/DB/consultas.php', {
                    request: 6,
                    set_id_user: this.user_id,
                    set_id_dp: this.id_departamento
                })
                .then(response => {
                    if (Object.keys(response.data).length > 0) {
                        
                        alert("OK");
                    } else {
                        console.log(lenght(this.users));
                        alert('error');
                    }
                    this.listUser();
                })
                .catch(errror => alert('error')
                );
            }
        },
        created: function() {
            this.listDep();
            this.listUser();
        }
    });
    </script>
</body>

</html>