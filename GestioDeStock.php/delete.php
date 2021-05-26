<?php
include "connect.php";

$id = ($_GET['id']);
$Category = ($_GET['cat']);
if ($id) {
    echo '<script> alert ("do you want delet this product !!")</script>'; 
    $stmt = "DELETE FROM catigorys WHERE id=:id";
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":id" => $id));
    if ($pdor) {
        header("location:./Show.php?produit=$Category");
    }
} else {
    header("location:./Show.php");
}
