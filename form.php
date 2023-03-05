<?php
// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los valores del formulario
    $lastName = $_POST['lastName'];
    $surName = $_POST['surName'];
    $firstName = $_POST['firstName'];
    $nameComplete = $_POST['nameComplete'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $bloodType = $_POST['bloodType'];
    $identificationType = $_POST['identificationType'];
    $street = $_POST['street'];
    $municipality = $_POST['municipality'];
    $state = $_POST['state'];
    $numExt = $_POST['numExt'];
    $numInt = $_POST['numInt'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];
    $numCel = $_POST['numCel'];
    $numTel = $_POST['numTel'];

    // Configurar los detalles del correo electrónico
    $to = 'tadeo.mejia@hospitalmoscati.com';
    $subject = 'Información del formulario';
    $message = "Apellido paterno: $lastName\n"
        . "Apellido materno: $surName\n"
        . "Nombre: $firstName\n"
        . "Nombre completo: $nameComplete\n"
        . "Fecha de nacimiento: $birthdate\n"
        . "Género: $gender\n"
        . "Tipo de sangre: $bloodType\n"
        . "Tipo de identificación: $identificationType\n"
        . "Calle: $street\n"
        . "Municipio / Ciudad: $municipality\n";
    $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ejemplo@dominio.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Enviar el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo 'El formulario se ha enviado correctamente.';
    } else {
        echo 'Error al enviar el formulario.';
    }

} else {
    echo 'Error: El formulario no ha sido enviado.';
}
