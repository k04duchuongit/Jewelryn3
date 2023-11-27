<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelryn3</title>

    <link rel="stylesheet" href="../content/Css/libary.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../content/font/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;500;600&family=Nunito+Sans:opsz,wght@6..12,200;6..12,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../content/font/Themifi_icon - Sao chép/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../content/Css/style.css">
    <link rel="stylesheet" href="../content/Css/setout.css">
   
</head>
<body>
    <div class="mycontainer">
        <header class="header_admin">
            <div class="grid wide">
                <h1 class="admin_title">Admin Jewelryn3.</h1>
                <p class="name_damin">
                    hi <span>
                        <?php 
                        if(!empty( $_SESSION['name_login'])){
                          $name_admin =  $_SESSION['name_login'];
                          echo $name_admin;
                        }
                        ?>
                    </span> !
                </p>
            </div>
</header>