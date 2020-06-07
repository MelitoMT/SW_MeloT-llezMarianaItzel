<?php
    echo"<link rel='stylesheet' href='./Statics/Actividad7.2-Formulario.css'>";
    echo"<div class='grid'>
        <div></div>
        <div>";
        if (isset($_POST['Registrarse'])){
            $rfc=$_POST['user'];
            $contraseña=$_POST['contraseña'];
            $verify=preg_match("/^([A-Z]{4}|[A-Z]{5})([0-9]{2})(((0)[1-9])|((1)[0-2]))(((0)[1-9])|([1-2][0-9])|((3)[0-1]))[A-Z\d]{3}?/",$rfc);
            if($verify==0){
                echo"<h2>La RFC ingresada:".$rfc."es incorrecta</h2><br>";
            }
            $verifycontra=preg_match("/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!-.]).{10,25})/",$contraseña);
            if($verifycontra==0){
                echo"<h2>Su contraseña ingresada:".$contraseña."es insegura</h2><br>";
            }
            if($verify>0 && $verifycontra>0){
                echo"<h2>Ha ingresado los datos correctamente</h2>";
                //header
            }
        }
        echo"<form action='Actividad7.2-Formulario.php' method='post'>
            <label for='nombre'>Nombre</label>
            <br>
            <input type='text' name='nombre'>
            <br>
            <label for='nombre'>Apellido Paterno</label>
            <br>
            <input type='text' name='apPat'required>
            <br>
            <label for='nombre'>Apellido Materno</label>
            <br>
            <input type='text' name='apMat' required>
            <br>
            <label for='nombre'>Fecha de Nacimiento</label>
            <br>
            <input type='date' name='nacimiento' required>
            <br>
            <label for='nombre'>Colegio</label>
            <br>
            <select name='colegio' required>
                <option value='Física'>Física</option>
                <option value='Informática'>Informática</option>
                <option value='Matemáticas'>Matemáticas</option>
                <option value='Biología'>Biología</option>
                <option value='Educación Física'>Educación Física</option>
                <option value='Morfología, Fisiología y Salud'>Morfología, Fisiología y Salud</option>
                <option value='Orientación Educativa'>Orientación Educativa</option>
                <option value='Psicologia e Higiene Mental'>Psicologia e Higiene Mental</option>
                <option value='Química'>Química</option>
                <option value='Ciencias Sociales'>Ciencias Sociales</option>
                <option value='Geografía'>Geografía</option>
                <option value='Historia'>Historia</option>
                <option value='Alemán'>Alemán</option>
                <option value='Artes Plásticas'>Artes Plásticas</option>
                <option value='Danza'>Danza</option>
                <option value='Dibujo y Modelado'>Dibujo y Modelado</option>
                <option value='Filosofía'>Filosofía</option>
                <option value='Francés'>Francés</option>
                <option value='Inglés'>Inglés</option>
                <option value='Italiano'>taliano</option>
                <option value='Letras Clásicas'>Letras Clásicas</option>
                <option value='Literatura'>Literatura</option>
                <option value='Música'>Música</option>
                <option value='Teatro'>Teatro</option>
                <option value='Estudios Técnicos Especializados'>Estudios Técnicos Especializados</option>
            </select>
            <br>
            <label for='nombre'>RFC</label>
            <br>
            <input type='text' name='user' value='' required pattern='([A-Z]{4}|[A-Z]{5})([0-9]{2})(((0)[1-9])|((1)[0-2]))(((0)[1-9])|([1-2][0-9])|((3)[0-1]))[A-Z\d]{3}?' title='Ingrese una RFC con el formato correcto, sólo se acepta formato de personas físicas.'>
            <br>
            <label for='contraseña'>Contraseña</label>
            <br>
            <input type='password' name='contraseña' value='' required pattern='((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!-.]).{10,25})' title='Contraseña insegura, debe contener mayúsculas, minúsculas, números y por lo menos dos carácteres especiales.'>
            <br>
            <input type='submit' value='Registrarse' name='Registrarse'>
        </form>
        </div>
        <div></div>
    </div>";
?>
