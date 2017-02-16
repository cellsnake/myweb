<?php
$res = null;
if (isset($_GET['nouser'])) {
    $res = $_GET['nouser'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login MyWeb</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/base.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/javascript">

    </script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="login.php">
                <img style="float: left;" alt="Brand" src="img/cell_logo.png" width="25px"><span>Home</span>
            </a>
        </div>
    </nav>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="register.php" name="login_form">
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-6">

                        <img id="userimg" src="img/user.png" class="img-rounded"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">Email</label>
                    <input class="col-sm-9" type="email" name="email" placeholder="demo@info.com"/>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">PassWord</label>
                    <input class="col-sm-9" type="password" name="password" placeholder="password"/>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                    </div>
                </div>
                <?php if($res == 1) echo "<span style='color:tomato;'>Usuario o Contraseña Incorrectos</span>" ?>
            </form>
        </div>

    </div>
    <footer class="text-center">
        <span><i>Copyright 2016 cellsnaketutoriales.blogspot.com</i></span>
    </footer>
</div>
</body>
</html>
