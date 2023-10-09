<?php
    echo "<p>Directorio Raíz: </p>" . $_SERVER['DOCUMENT_ROOT'];
    echo "<p>Protocolo: </p>" . $_SERVER['SERVER_PROTOCOL'];
    echo "<p>Nombre del servidor: </p>" . $_SERVER['SERVER_NAME'];
    echo "<p>Tipo de petición: </p>" . $_SERVER['REQUEST_METHOD'];
    echo "<p>Dirección ip: </p>" . $_SERVER['REMOTE_ADDR'];