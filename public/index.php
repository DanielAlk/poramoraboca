<?php
include '../environment/init.php';
include $app->layout;
if (method_exists($app, 'buffer')) $app->buffer();
?>