<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $name = $_POST['name'];
        $identificationType = $_POST['identificationType'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $bloodType = $_POST['bloodType'];
        $estado = $_POST['estado'];
        $municipio = $_POST['municipio'];
        $calle = $_POST['calle'];

        $to = "ejemplo@correo.com";
        $subject = "Formulario de contacto";

        $message = "
        <html>
    <head>
        <title>Formulario de contacto</title>
    </head>
    <body>
    <p>Información enviada desde el formulario:</p>
    <table>
        <tr>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Tipo de identificación</th>
            <th>Género</th>
            <th>Fecha de nacimiento</th>
            <th>Tipo de sangre</th>
            <th>Estado</th>
            <th>Municipio / Ciudad</th>
            <th>Calle</th>
        </tr>
        <tr>
            <td>$firstName</td>
            <td>$lastName</td>
            <td>$name</td>
            <td>$identificationType</td>
            <td>$gender</td>
            <td>$birthdate</td>
            <td>$bloodType</td>
            <td>$estado</td>
            <td>$municipio</td>
            <td>$calle</td>
        </tr>
    </table>
    </body>
</html>
";

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($to,$subject,$message,$headers);
        echo "El correo ha sido enviado correctamente.";
    }
?>

<?php

if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $name = $_POST['name'];
    $identificationType = $_POST['identificationType'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $bloodType = $_POST['bloodType'];
    $telefonoFijo = $_POST['telefonoFijo'];
    $telefonoMovil = $_POST['telefonoMovil'];
    $email = $_POST['email'];

    $to = 'correo@ejemplo.com';
    $subject = 'Nueva solicitud de formulario';
    $message = "Apellido paterno: " . $firstName . "\n" . "Apellido materno: " . $lastName . "\n" . "Nombre: " . $name . "\n" . "Tipo de identificación: " . $identificationType . "\n" . "Género: " . $gender . "\n" . "Fecha de nacimiento: " . $birthdate . "\n" . "Tipo de sangre: " . $bloodType . "\n" . "Teléfono fijo: " . $telefonoFijo . "\n" . "Teléfono móvil: " . $telefonoMovil . "\n" . "Correo electrónico: " . $email;
    $headers = "De: " . $email;

    if(mail($to, $subject, $message, $headers)){
        echo 'Enviado';
    } else {
        echo 'Error al enviar';
    }
}

?>