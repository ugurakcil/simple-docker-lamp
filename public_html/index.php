
DATASINS - SIMPLE DOCKER LAMP STACK
<hr>

<?php
$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

/* check connection */
if (mysqli_connect_errno()) {
    printf("MySQL connecttion failed: %s", mysqli_connect_error());
} else {
    printf("MySQL Server %s", mysqli_get_server_info($link));
}

mysqli_close($link);
?>