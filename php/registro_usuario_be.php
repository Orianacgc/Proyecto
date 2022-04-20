<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, nombre_usuario, telefono, correo, contrasena) 
                VALUES('$nombre_completo', '$nombre_usuario', '$telefono', '$correo', '$contrasena')";
    
    //VERIFICAR QUE EL CORREO NO SE REPITAEN LA BASE DE DATOS
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("ESTE CORREO YA ESTA REGISTRADO, INTENTA CON OTRO");
            window.location = "../indexlogin.php";
        </script>
        ';
        exit();
    }
    //VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITAEN LA BASE DE DATOS
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("ESTE NOMBRE DE USUARIO YA ESTA REGISTRADO, INTENTA CON OTRO");
            window.location = "../indexlogin.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("USUARIO ALMACENADO EXITOSAMENTE");
                window.location = "../indexlogin.php";
            </script>
        ';
    }else{
        echo '

            <script>
                alert("NO SE ALMACENO");
                window.location = "../indexlogin.php";
            </script>
        ';
    }
    mysqli_close($conexion);

?>