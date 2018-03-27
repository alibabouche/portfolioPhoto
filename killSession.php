<?php

	session_start();

	$_SESSION["connection"] = false;

	session_destroy();

	header("Location: index.php");