<?php

    function loguearse($usuario,$password)
    {
        try
        {
            //instanciar la clase PDO
            $base = new PDO('mysql:host=localhost;dbname=prueba','root','');
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $base->exec('SET character SET utf8');
            $sql="select * from usuaros where nombre = binary :usuario and pass= binary :password"; //binary valida mayusculas y minusculas
            $resultado=$base->prepare($sql); //objeto PDO_stmt
            $resultado->bindValue(":usuario",$usuario);
            $resultado->bindValue(":password",$password); 
            $resultado->execute();
            if (($resultado->rowCount())!=0) {
                session_start();
                $_SESSION['usuario']=$usuario;
                header('Location:bienvenida.php');
            }
            else {
                echo '<div class="container" style="margin-top:30px;">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="alert alert-danger" role="alert">
                            <p class="mb-0"><strong>Usuario</strong> o <strong>Contraseña</strong> incorrectos!</p>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>';
            }
            $resultado->closeCursor(); //cerramos
        }
        catch (Exception $e)
        {
            die("Error ".$e->getMessage());
        }
    }

?>