<?php

include "DB-Conn.php";

$id = $_GET["id"];

$sql = "DELETE FROM `tasks` WHERE id = ?";

$query = $conn->prepare($sql);
$query->execute(array($id));

header("Location: Home.php");

?>