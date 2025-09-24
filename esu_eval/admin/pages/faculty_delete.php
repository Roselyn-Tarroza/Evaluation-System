<?php
include("db.php");
$id = $_GET['id'];
$conn->query("DELETE FROM faculty WHERE id=$id");
