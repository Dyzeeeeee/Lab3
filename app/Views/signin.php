<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Coffee Shop Login</title>
    <style>
        body {
            background-color: #f2e1d9;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* justify-content: center; */
            margin-top: 30px;
            /* min-height: 100vh; */
            /* Ensure full viewport height */
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            /* Adjust as needed */
        }

        p {
            margin: 0px;
            padding: 0px;
            font-size: smaller;
        }

        h4 {
            color: #874d3d;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .form-control {
            border-color: #874d3d;
            height: 20px;
            font-size: smaller;
        }

        .btn-success {
            background-color: #874d3d;
            border-color: #874d3d;
        }

        .btn-success:hover {
            background-color: #6c3b30;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
            /* Add margin below the logo */
            width: 70px;
            /* Set the width and height of the circular container */
            height: 70px;
            background-color: #874d3d;
            /* Circle background color */
            border-radius: 50%;
            /* Make it circular */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            max-width: 70px;
            /* Adjust the size of the logo */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <a href="/shop"><img src="<?= base_url() ?>images/apple-touch-icon.png" alt="Coffee Logo" class="logo"></a>
    </div>
    <h4 class="text-center">Sign in to your account</h4>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url(); ?>loginAuth" method="post">
                    <div class="form-group mb-3">
                        <p> Email </p>

                        <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <p> Password </p>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">
                            <p>Login</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

    <div>
        <p>No account yet? <a href="/register">Register</a></p>
    </div>

</body>

</html>