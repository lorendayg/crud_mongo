<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/boostrap5/bootstrap.min.css">
    <link rel="stylesheet" href="./public/fontawesome-free-7.1.0-web/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Crud mongo con php</title>

</head>
<body>
    <style>
    body {
    background-image: url('./public/img/image.png'); 
    background-size: cover;        
    background-position: center;   
    background-repeat: no-repeat;  
    background-attachment: fixed;  
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


h2 {
    text-align: center;
    font-size: 4rem;
    font-weight: bold;
    background: linear-gradient(90deg, #cc7709ff, #14e40d, #cc7709ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 
        1px 1px 2px #ffffffff,
        0 0 5px #cc7709ff,
        0 0 10px #ffffff,
        0 0 20px #d47d0aff;
    margin-bottom: 20px;
    animation: brilloTitulo 2s infinite alternate;
}

.card {
    background-color: rgba(255, 255, 255, 0.85); /* Blanco con 85% de opacidad */
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(175, 124, 13, 0.57);
    backdrop-filter: blur(4px); /* Efecto de desenfoque detrás (moderno y elegante) */
}


.table thead {
    background-color: #343a40;
    color: white;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn {
    border-radius: 20px;
}

.btn-outline-primary:hover {
    background-color: #007bff;
    color: white;
}

.btn-outline-warning:hover {
    background-color: #ffc107;
    color: white;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: white;
}

    </style>

    