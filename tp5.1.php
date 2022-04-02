<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="pt5css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo '<title>Perfil: ' . $_POST['name'] . ' ' . $_POST['subname'] . '</title>';
    ?>
</head>

<body>
    <div class="todo-perfil">

        <div class="principio">



            <style type="text/css">
                .principio,
                .info,
                .biografia {
                    background-color: <?php echo $_POST["color"] ?>;
                    border: solid 5px black;
                    box-shadow: 5px 5px 5px rgb(39, 37, 37);
                }
            </style>
            <div class="img-perfil">
                <?php
                // foto de perfil -->
                echo ' <img class="fto-perfil" src=' . $_POST["foto"] . '>';
                ?>
            </div>
            <div class="nombre">
                <?php

                //nombre y apellido
                echo '<h1>' . $_POST["name"] . " " . $_POST["subname"] . '</h1>';

                //nombre de usuario
                echo "<h2> @" . $_POST["user"] . "<h2>";
                ?>

            </div>
        </div>
        <div class="pruebatodo">
            <div class="biografia">
                <h3 style="text-align: center; margin-top:0%;  margin-bottom:5px ;">Biografia</h3>
                <?php
                echo '<div class="textito"><p>' . $_POST["texto"] . '</p></div>';
                ?>
            </div>
            <div class="info">
                <?php
                //email
                echo "<p>Email: " . $_POST["email"] . "</p>";

                //fecha cumpleaños
                echo "<p >Cumple años el: " . $_POST['date'] . "<p>";

                //edad
                echo "<p>Edad: " . $_POST['edad'] . " años</p>";

                //nacionalidad
                switch ($_POST['nacion']) {
                    case '1':
                        echo "<p>Nació en: Argentina </p>";
                        break;

                    case '2':
                        echo "<p>Nació en: Bolivia</p>";
                        break;

                    case '3':
                        echo "<p>Nació en: Uruaguay</p>";
                        break;

                    case '4':
                        echo "<p>Nació en: Brasil </p>";
                        break;

                    case '5':
                        echo "<p>Nació en: Chile </p>";
                        break;
                }

                //genero
                switch ($_POST['sexo']) {
                    case '1':
                        echo "<p>Género: Hombre</p>";
                        break;
                    case '2':
                        echo "<p>Género: Mujer</p>";
                        break;
                    case '3':
                        echo "<p>Género: Helicoptero apache</p>";
                        break;
                }
                //hobies
                echo "hobies: ";
                foreach ($_POST['hobi'] as $hobi) {
                    echo $hobi . " ";
                }

                ?>

            </div>










        </div>
    </div>
</body>

</html>