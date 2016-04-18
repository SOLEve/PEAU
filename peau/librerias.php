<?php
    function conectar()
    {
        $servidor = "localhost";
        $usuario = "vis11777_cloud";
        $clave = "mysqladmin*01";
        $link = mysql_connect($servidor,$usuario,$clave);
        if (!$link)
        {
            mostrar_mensaje("NO SE PUEDE CONECTAR CON EL SERVIDOR DE LA BASE DE DATOS");
            die("NO SE PUEDE CONECTAR CON EL SERVIDOR DE LA BASE DE DATOS");
        }
        if (mysql_select_db("vis11777_peau",$link))
        {
            mysql_query ("SET NAMES 'utf8'");
            return $link;
        }else
        {
            //base de datos no disponible
            mostrar_mensaje("Base de datos no disponible");
            return NULL;
        }
    }
    
    function conectar1()
    {
        $mysqli = new mysqli("localhost","vis11777_cloud","mysqladmin*01","vis11777_peau");
    
    
        if ($mysqli->connect_errno)
        {
            echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            return NULL;
        }else
        {
            return $mysqli;
        }

    }

    function actualizar_bd($sql)
    {
        $link = conectar();
        return mysql_query($sql,$link);

        //mostrar_mensaje("SUS DATOS HAN SIDO GUARDADOS");
    }
    

    function consultar($sql)
    {
        $link = conectar();
        $res = mysql_query($sql,$link);
        return $res;
    }


    function actualizar_bd1($sql)
    {
        $link = conectar1();
        return mysqli_query($link,$sql);
    }
    

    function consultar1($sql)
    {
        $link = conectar1();
        $res = mysqli_query($link,$sql);
        return $res;
    }
    

    function validar()
    {
        echo '<script language="JavaScript" type="text/javascript">
                document.location= "index_administrador.php";
                </script>';
    }
?>
