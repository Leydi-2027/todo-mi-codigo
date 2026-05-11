<?php 
    session_start(); 
    include("../php/conexion.php"); 
    // 🔐 SOLO ADMIN 
    if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'admin') { 
    header("Location: ../index.php"); 
    exit(); 
    } 
    // Consulta productos 
    $sql = "SELECT * FROM productos"; 
    $resultado = $conn->query($sql); 
?> 

<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
    <meta charset="UTF-8"> 
    <title>Ver Productos</title> 
     
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
    " rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font
    awesome/7.0.1/css/all.min.css"> 
    </head> 
<body> 