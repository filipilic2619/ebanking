<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <script src="js/jquery.js"></script>
<!--    <script src="js/main.js"></script>-->


    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>


<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <div class="navbar-brand">E-banking</div>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Moji podaci</a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Odjava</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#racuni"><i class="fa fa-fw fa-money"></i> Računi <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="racuni" class="collapse">

                    </ul>
                </li>
                <li>
                    <a href="charts.html"><i class="fa fa-fw fa-file-text-o"></i> Novi nalog </a>
                </li>
                <li>
                    <a href="tables.html"><i class="fa fa-fw fa-list-ul"></i> Pregled plaćanja </a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-fw fa-line-chart"></i> Kursna lista</a>
                </li>
                <li>
                    <a href="bootstrap-grid.html"><i class="fa fa-fw fa-shield"></i> Podešavanje tokena</a>
                </li>
                <li>
                    <a href="bootstrap-elements.html"><i class="fa fa-fw fa-envelope-o"></i> Kontakt</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid" id="glavno">

            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                      <h3>Račun:
                        <select class="selectpicker" id="izaberi">
                            <option>340-322651-73</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                      </h3>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-file-text-o fa-fw"></i> Novi nalog</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Platioc</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Broj računa</label>
                                                        <input type="text" class="form-control text-center" id="racunplatioca" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Ime i prezime</label>
                                                        <input type="text" class="form-control text-center" id="imeplatioca" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Iznos</label>
                                                        <input type="text" class="form-control text-center" id="iznos">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Primaoc</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Broj računa</label>
                                                        <input type="text" class="form-control text-center" id="racunprimaoca">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Ime i prezime</label>
                                                        <input type="text" class="form-control text-center" id="imeprimaoca">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Plaćanje</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-5 text-center">
                                                    <div class="form-group">
                                                        <label for="model">Model</label>
                                                        <select class="form-control text-center" id="model" style="text-align: center;">
                                                            <option value="00">00</option>
                                                            <option value="97">97</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Poziv na broj</label>
                                                        <input type="text" class="form-control text-center" id="poziv">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Svrha plaćanja</label>
                                                        <input type="text" class="form-control text-center" id="svrha">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Datum izvršenja</label>
                                                        <input type="date" class="form-control text-center" id="datum">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                            <button type="button" class="btn btn-default">Izvrši uplatu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->





</body>

</html>

