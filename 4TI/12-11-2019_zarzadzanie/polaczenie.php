<?php

$conn = @new mysqli('localhost', 'root', '', 'zarzadzanie_zadaniami');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}