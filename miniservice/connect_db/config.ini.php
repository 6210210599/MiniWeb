<?php

define("CONF_DB_HOST", "localhost");
define("CONF_DB_USERNAME", "root");
define("CONF_DB_PASSWORD", "");
define("CONF_DB_NAME", "miniservice");

$mysqli = new mysqli(CONF_DB_HOST, CONF_DB_USERNAME, CONF_DB_PASSWORD, CONF_DB_NAME);

/*
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";*/