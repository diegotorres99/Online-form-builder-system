<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./mostrar/css/config-controller.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body >

<div id="app">
<br>
    <div class="container">
        <div class="config-card">
            <h3>Configurar email</h3>
            <hr>
            <div v-for="e in email_data">

                <label for="set-email">Email:</label><br>
                <input type="email" id="set-email" v-bind:value="e.email" class="form-control"><br>

                <label for="set-pass">Contraseña:</label><br>
                <input type="password" id="set-pass" v-bind:value="e.pass" class="form-control"><br><br>
                
                <button class="btn btn-primary" v-on:click="updateMail()">Guardar</button>
            </div>
            
        </div>
    </div>
    <br><br>
</div>
    
    <script>
        var app = new Vue({
        el: "#app",
        data() {
            return {
                selected_email: "",
                selected_pass: "",
                set_email: "",
                set_pass: "",
                set_id: "",
                //email_data:[{email:"hola", pass:"nene"}]
                email_data:[]
            };
        },
        methods: {
            getMail: function() {
                axios.post('./mostrar/DB/consultas.php', {
                        request: 12
                    })
                    .then(response => {

                        if (Object.keys(response.data).length > 0) {
                            this.email_data = response.data;


                            console.log(response.data);
                        } else {
                            console.log(lenght(this.email_data));
                            this.email_data = [
                                { email: 'N/A', pass: 'N/A' }
                            ];
                        }
                    })
                    .catch(errror => this.email_data = [
                        { email: 'N/A', pass: 'N/A' }
                    ]);
            },
            updateMail: function() {
                
                var anwser = confirm(`Esta seguro que desea modificar el email?`);

                if (anwser) {
                    this.set_email = document.getElementById("set-email").value;
                    this.set_pass = document.getElementById("set-pass").value;
                    console.log(">> mail: " + this.set_email);
                    console.log(">> pass: " + this.set_pass);

                    axios.post('./mostrar/DB/consultas.php', {
                    request: 13,
                    set_email: this.set_email,
                    set_pass: this.set_pass,
                    set_id: 1
                })
                .then(response => {
                    if (Object.keys(response.data).length > 0) {
                        
                        console.log(response.data);
                    } else {
                        alert('error');
                    }
                })
                .catch(errror => alert('error')
                );
                }
            }
        },
        created: function() {
            this.getMail();
        }
    });
    </script>
</body>

</html>