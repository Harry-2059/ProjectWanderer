<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body{
            background-image: url(main.jpg);
            background-size: cover;
            background-position: center;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
           
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .form-container label {
            color: white;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="section-navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html">
                    <img
                        src="logo.png"
                        alt=" this is site logo"
                        width="56"
                        height="auto "
                    />
                </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li class="nav-item">
                        <a href="welcome.php" class="nav-link">home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">about</a>
                    </li>
                    <li class="nav-item"><a href="/" class="nav-link">service</a></li>
                    <li class="nav-item"><a href="/" class="nav-link">contact</a></li>
                    <li class="nav-item cart-btn flex">
                        <a href="addCart.html" class="nav-link cart-btn"
                            ><i class="fa-solid fa-cart-shopping"></i
                        ></a>
                        <span></span>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <h1><span><a href="">The Shop_Nest</a></span></h1>
    <?php
    $showAlert = false;
    $match = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        if ($password !== $confirm_password) {
            $match = false;
        } else {
            // Add code to login the user
            $showAlert = true;
        }
    }

   ?>