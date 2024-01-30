<?php
$ftp = ftp_connect("localhost");
ftp_login ($ftp, "Manuel", "1234");
ftp_pasv ($ftp, true); //MODO PASIVO, la conexion inicia por el usuario


//Mostrar elementos de la carpeta a la cual el usuario tiene permiso
foreach (ftp_nlist($ftp, "") as $val)
    {
        print $val . "<br>";
    }

//Descargar archivo
if (ftp_get ($ftp, "informe.docx", "informe 1.docx", FTP_BINARY))
    {
        print "</p> Ha descargado el informe correctamente </p>";
    }
else
    {
        print "<p> Error de descarga </p>";
    }

//subir archivo

if (ftp_put ($ftp, "informes/index.html", "replace.html", FTP_BINARY))
    {
        print "<p>Se subio correctamente</p>";
    }
else
    {
        print "<p>Error al subir el archivo</p>";
    }
?>
