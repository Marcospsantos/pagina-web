<?php

	include "includes/conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM pacientes WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listapacientes.php");