<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="pt5css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tp5.1.php" method="post">

        <h1 class="crear">Cree su nueva cuenta</h1>
        <div class="todo">

            <!--email-->
            <div class="ingresos">
                <label for="email">Ingrese su email</label>
                <input type="email" name="email" id="email" placeholder="ejemplo@gmail.com" required>
            </div>


            <!--usuario-->
            <div class="ingresos">
                <label for="user">Cree su usuario</label>
                <input type="text" name="user" id="user" placeholder="ingrese su usuario" required>
            </div>
            <!-- foto perfil -->
            <div class="ingresos">
                <label for="foto">Ingrese la url de la imagen</label>
                <input type="text" name="foto" id="foto" placeholder="ingrese la URL" required>
            </div>

            <!--contraseña-->
            <div class="ingresos">
                <label for="pass">Cree su contraseña</label>
                <input type="password" name="contra" id="pass" placeholder="ingrese su contraseña" required>
            </div>

            <!--nombre-->
            <div class="ingresos">
                <label for="name">Ingrese su nombre</label>
                <input type="text" name="name" id="name" placeholder="ingrese su nombre" required>
            </div>

            <!--apellido-->
            <div class="ingresos">
                <label for="subname">Ingrese su apellido</label>
                <input type="text" name="subname" id="subname" placeholder="ingrese su apellido" required>
            </div>

            <!--edad-->
            <div class="ingresos">
                <label for="edad">Ingrese su edad</label>
                <input type="number" name="edad" id="edad" placeholder="ingrese su edad" min="1" max="99" required>
            </div>

            <!--color-->
            <div class="ingresos">
                <label for="color">Ingrese su color favorito</label>
                <input type="color" name="color" id="color">
            </div>
            <!--nacionalidad-->
            <div class="ingresos">
                <label for="nacion">Ingrese su nacionalidad</label>
                <select name="nacion" id="nacion" required>
                    <option value="1">Argentina</option>
                    <option value="2">Bolivia</option>
                    <option value="3">Uruguay</option>
                    <option value="4">Brasil</option>
                    <option value="5">Chile</option>
                </select>
            </div>

            <div class="ingresos">
                <!--cumpleaños-->
                <label for="date">¿Cual es su fecha de nacimiento?</label>
                <input type="date" name="date" id="date" required>
            </div>
            <!--sexo-->
            <fieldset>
                <legend>¿Cual es su genero?</legend>
                <input class="radio" type="radio" name="sexo" id="male" value="1 " required>
                <label class="sexo" for="male">Hombre</label>
                <input class="radio" type="radio" name="sexo" id="fem" value="2" required>
                <label class="sexo" for="fem">Mujer</label>
                <input class="radio" type="radio" name="sexo" id="otro" value="3" required>
                <label class="sexo" for="otro">Otro</label>
            </fieldset>

        </div>


        <!--area de texto-->

        <label class="hobiet" for="texto">Ingrese su biografía</label>
        <textarea class="textot" name="texto" id="texto" rows="8" maxlength="250" placeholder="250 caracteres maximos" required></textarea>

        <!--hobbies-->
        <fieldset>
            <legend class="caca">¿Cual son sus hobby?</legend>
            <div class="hobies">
                <input class="radio" type="checkbox" name="hobi[]" id="bailar" value="bailar">
                <label for="bailar">Bailar</label>


                <input class="radio" type="checkbox" name="hobi[]" id="cantar" value="cantar">
                <label for="cantar">Cantar</label>


                <input class="radio" type="checkbox" name="hobi[]" id="videojuegos" value="videojuegos">
                <label for="videojuegos">Videojuegos</label>


                <input class="radio" type="checkbox" name="hobi[]" id="programar" value="programar">
                <label for="programar">Programar</label>
            </div>
        </fieldset>



        <!--boton final-->
        <input class="boton" type="submit" value="Crear cuenta">

    </form>

</body>

</html>