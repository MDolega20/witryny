<?php

session_start();

// unset($_SESSION['user']);
session_unset();
Header("Location: index.php");