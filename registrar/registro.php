<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form class="formulario">
        <h1>Registrarse</h1>
        <div class="formulario_inputs"> 
            <div class="input">
                <input type="text" placeholder="Nombre" id="nombre">
                <img class="name" src="https://www.svgrepo.com/show/403871/name-badge.svg">
                <input type="text" placeholder="Apellido" id="apellido">
                <img class="lastname" src="https://www.svgrepo.com/show/511189/user-card-id.svg">
            </div>
            <div class="input">   
                <input type="text" placeholder="Teléfono" id="telefono">
                <img class="phone" src="https://www.svgrepo.com/show/533285/phone.svg">
                <input type="text" placeholder="E-mail" id="email">
                <img class="mail" src="https://www.svgrepo.com/show/533200/mail-alt-3.svg">
            </div>
            <div class="input">
                <input type="text" placeholder="Dirección" id="direccion">
                <input type="hidden" id="idpersona" class="form-control">
                <img class="address" src="https://www.svgrepo.com/show/493957/address.svg">
                <input type="text" placeholder="Username" id="nombreusuario">
                <img class="id" src="https://www.svgrepo.com/show/436843/person-fill.svg">

            </div>
            <div class="input">    
                <input type="text" placeholder="Password" id="claveacceso">
                <img class="key" src="https://www.svgrepo.com/show/532323/lock-alt.svg">
            </div>
        </div>
        <button class="btn" type="submit">Registrar</button>
    </form> 
</body>
</html>

<!-- Incluye Bootstrap JS y Popper.js desde un CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<script src="js/jquery-3.7.1.min.js"></script>
<script>
    var registrar=false
    var nombre;
    function registrarPersona(){//1º
        var datos = {
            'operacion':        'registrarPersona',
            'nombre':           $("#nombre").val(),
            'apellido':         $("#apellido").val(),
            'telefono':        $("#telefono").val(),
            'email':            $("#email").val(),
            'direccion':            $("#direccion").val(),
        }

        if (datos['nombre']=="" || datos['apellido']=="" || datos['telefono']=="" || datos['email']=="" || datos['direccion']==""){
            //swal("Porfavor complete todos los campos obligatorios");
        } else{
            $.ajax({
                url:        'controllers/CPersona.php',
                type:       'GET',
                data:       datos,
                success: function (){
                    swal("Persona registrado correctamente", "You clicked the button!", "success");

                    nombre = $("#nombre").val();
                    getIdPersona();
                    //llamo a la funcion para al registrar una persona se cree aut. el idusuario al input invisible
                    //getIdPersona();
                    // Cambia la propiedad 'disabled' de true a false
                    $("#nombreusuario").prop("disabled", false);
                    $("#claveacceso").prop("disabled", false);
                    registrar=true;
                    console.log(registrar)
                    console.log(nombre)
                }
            })
        }
        
    }
    $("#registrarPersona").click(function(){
        if (registrar==false){
            registrarPersona();
        } else{
            registrarUsuario();
            window.location.href = "index.php";
        }
    });
    function registrarUsuario(){//3º
        var datosUsuario = {
            'operacion':            'registrarUsuario',
            'idpersona':            $("#idpersona").val(),
            'nombreusuario':        $("#nombreusuario").val(),
            'claveacceso':          $("#claveacceso").val()
        }

        if (datosUsuario['idpersona']=="" || datosUsuario['nombreusuario']=="" || datosUsuario['claveacceso']==""){
            alert("Porfavor complete todos los campos obligatorios");
        } else{
            //console.log(datosUsuario); esto se envia por ajax, si quieres ver quita el comentario y ve a la consola
            $.ajax({
                url:        'controllers/CUsuario.php',
                type:       'GET',
                data:       datosUsuario,
                success: function (){
                    swal("Usuario registrado correctamente", "You clicked the button!", "success");
                }
            })
        }
        
    }
    function getIdPersona(){ //2º
        //OBTENGO EL ID DE LA PERSONA le asigna el idpersona al input invisible, ya puedo registrar ek usuario :D
        $.ajax({
            url:        'controllers/CPersona.php',
            type:       'GET',
            data:       'operacion=getIdPersona&nombre='+nombre,
            success: function (e){
                var matriz = JSON.parse(e);
                $("#idpersona").val(matriz.idpersona);
                console.log(matriz.idpersona);
            }
        })
    }
/* 
    function getIdPersona(){
        //OBTENGO EL ID DE LA PERSONA
        $.ajax({
            url:        'controllers/CPersona.php',
            type:       'GET',
            data:       'operacion=getIdPersona&nombre='+nombre,
            success: function (e){
                var matriz = JSON.parse(e);
                $("#idpersona").val(matriz.idpersona);
                console.log(matriz.idpersona);
                console.log(nombre);
            }
        })
    }

    function registrarUsuario(){
        var datosUsuario = {
            'operacion':            'registrarUsuario',
            'idpersona':            $("#idpersona").val(),
            'nombreusuario':        $("#nombreusuario").val(),
            'claveacceso':          $("#claveacceso").val()
        }

        if (datosUsuario['idpersona']=="" || datosUsuario['nombreusuario']=="" || datosUsuario['claveacceso']==""){
            alert("Porfavor complete todos los campos obligatorios");
        } else{
            console.log(datosUsuario);
            $.ajax({
                url:        'controllers/CUsuario.php',
                type:       'GET',
                data:       datosUsuario,
                success: function (){
                    alert("Usuario registrado correctamente")
                }
            })
        }
        
    }


    $("#formulario").on("click","#registrarPersona",function (){
        registrarPersona();
    })
    $("#formulario").on("click","#registrarUsuario",function (){
        registrarUsuario();
    }) */
</script>
