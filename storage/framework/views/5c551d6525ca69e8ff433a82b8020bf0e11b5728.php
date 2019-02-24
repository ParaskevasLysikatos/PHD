<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudentRegister</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<h1> Register as Student</h1>
<form  method="POST" >
    <?php echo csrf_field(); ?>
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="S-Username" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="S-Password" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Enter e-mail" name="S-Email" required>

        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>

/**
 * Created by PhpStorm.
 * User: PAR-LENOVO
 * Date: 11/2/2018
 * Time: 3:38 PM
 */
