<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Huggs</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('/assets/metisMenu/metisMenu.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('/assets/img/favicon.ico'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo base_url('index.php/Usuarios')?>">
                            <fieldset>
                                <div class="form-group input-group">
                                     <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                                    <input class="form-control" placeholder="Usuário" name="usuario" type="text" autofocus required="">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="fa fa-lock fa-fw"></span></span>
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="" required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Lembre-me">Lembre-me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                <br>
                                  <?php                                    
                                    if (isset($error_message)) {
                                    echo "<div class='alert alert-danger' role='alert'>";
                                    echo $error_message;
                                    echo "</div>";
                                    }
                                    ?>
                                    <?php 
                                        if (isset($mensagem_deslogar)) {
                                            echo "<div class='alert alert-success' role='alert'>";
                                            echo $mensagem_deslogar;
                                            echo "</div>";
                                            unset($mensagem_deslogar);
                                        }
                                     ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/jquery/jquery.min.js');?>"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('/aassets/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('/assets/dist/js/sb-admin-2.js');?>"></script>

</body>

</html>
