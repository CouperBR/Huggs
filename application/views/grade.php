<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adicionar Grade - Huggs</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Huggles - Painel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a><i class="fa fa-gear fa-fw"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('index.php/Usuarios/deslogar') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/PageLoad/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>                        </li>
                        <li>
                            <a data-toggle="collapse" href="#Professores" aria-expanded="false" aria-controls="Professores"><i class="fa fa-group fa-fw"></i> Professores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse" id="Professores">
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/adicionarProfessores') ?>">Adicionar</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/professoresCadastrados') ?>">Cadastrados</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#Materias" data-toggle="collapse" data-target="#Materias" aria-expanded="false" aria-controls="Materias"><i class="fa fa-book fa-fw"></i> Cursos & Matérias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse" id="Materias">
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/adicionarcursos') ?>">Adicionar Cursos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/adicionarmaterias') ?>">Adicionar Matérias</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/cursoscadastrados') ?>">Cursos Cadastrados</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/PageLoad/materiascadastradas') ?>">Matérias Cadastradas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a><i class="fa fa-table fa-fw"></i> Grades</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="<?php echo base_url('index.php/Grade/adicionarGrade')?>">
                            <div class="form-group">
                                <label required="">Curso</label>

                                        <select class="form-control" name="curso">
                                                <?php 
                                                echo $opcao_cursos;
                                                ?>
                                        </select> <br>
                
                                            <select class="form-control" name="turno">
                                                <option value="1">Manhã</option>
                                                <option value="2">Tarde</option>
                                                <option value="3">Noite</option>
                                            </select>
                                            <br>
                                            <div>
                                                <button type="submit" class="form-control btn btn-primary">Gerar Grade</button>
                                            </div>
                                            <div>  
                                                        
                                            </div>
                            </div>
                        </form>
                        <?php 
                        /*
                            if (isset($segunda)) 
                            {

                                var_dump($sexta);
                                
                            $segunda1 = $segunda->first_row();
                            $segunda2 = $segunda->last_row();
                            $terca1 = $terca->first_row();
                            $terca2 = $terca->last_row();
                            $quarta1 = $quarta->first_row();
                            $quarta2 = $quarta->last_row();
                            $quinta1 = $quinta->first_row();
                            $quinta2 = $quinta->last_row();
                            $sexta1 = $sexta->first_row();
                            $sexta2 = $sexta->last_row();
                            $sabado1 = $sabado->first_row();
                            $sabado2 = $sabado->last_row();

                        echo "<table class='table table-striped'>
                          <thead>
                            <tr>
                              <th scope='col'>#</th>
                              <th scope='col'>Segunda</th>
                              <th scope='col'>Terça</th>
                              <th scope='col'>Quarta</th>
                              <th scope='col'>Quinta</th>
                              <th scope='col'>Sexta</th>
                              <th scope='col'>Sabado</th>
                            </tr>
                          </thead>
                          <tbody>";

                            echo "<tr>
                              <th scope='row'>Horario 1</th>
                              <td>" . $segunda1->NomeProfessor . "(" . $segunda1->NomeMateria . ")</td>" .
                              "<td>" . $terca1->NomeProfessor . "(" . $terca1->NomeMateria . ")</td>" .
                              "<td>" . $quarta1->NomeProfessor . "(" . $terca1->NomeMateria . ")</td>" .
                              "<td>" . $quinta1->NomeProfessor . "(" . $terca1->NomeMateria . ")</td>" .
                              "<td>" . $sexta1->NomeProfessor . "(" . $terca1->NomeMateria . ")</td>" .
                              "<td>" . $sabado1->NomeProfessor . "(" . $terca1->NomeMateria . ")</td>" .
                            "</tr>
                            <tr>
                              <th scope='row'>Horario 2</th>
                              <td>" . $segunda2->NomeProfessor . "(" . $segunda2->NomeMateria . ")</td>" .
                              "<td>" . $terca2->NomeProfessor . "(" . $terca2->NomeMateria . ")</td>" .
                              "<td>" . $quarta2->NomeProfessor . "(" . $quarta2->NomeMateria . ")</td>" .
                              "<td>" . $quinta2->NomeProfessor . "(" . $quinta2->NomeMateria . ")</td>" .
                              "<td>" . $sexta2->NomeProfessor . "(" . $sexta2->NomeMateria . ")</td>" .
                              "<td>" . $sabado2->NomeProfessor . "(" . $sabado2->NomeMateria . ")</td>" .                          
                            "</tr>";
                          echo "</tbody>";
                        echo "</table>";

                        }
                        */
                    ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

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
