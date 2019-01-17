

<?php
    define ('SERVERNAME', 'localhost');
    define ('USERNAME', 'c2362Jolan');
    define ('PASSWORD', '123456789');
    define ('DATABASE', 'c2362ValidatingSanitizing');

    $mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>