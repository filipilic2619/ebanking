<?php
session_start();
if(isset($_SESSION['code']) && isset($_SESSION['username'])){
   // echo "OK";
}else {
header("location: index.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-banking</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">


    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>


    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>




    <script src="js/bootstrap.min.js"></script>

</head>

<body>


<div id="wrapper">


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-header">

            <div class="navbar-brand">E-banking</div>
        </div>

        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="ime"></a>
                <ul class="dropdown-menu">



                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Odjava</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#racuni"><i class="fa fa-fw fa-money"></i> Računi <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="racuni" class="collapse">

                    </ul>
                </li>
                <li>
                    <a href='javascript:void(0)' onclick='noviNalog()'><i class="fa fa-fw fa-file-text-o"></i> Novi nalog </a>
                </li>


                <li>
                    <a href="javascript:void(0)" onclick="token()"><i class="fa fa-fw fa-shield"></i> Podešavanje tokena</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-line-chart"></i> Kursna lista</a>

                </li>


            </ul>
        </div>

    </nav>

    <div id="page-wrapper">

        <div class="container-fluid" id="glavno">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Tekući račun
                    </h1>

                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-dollar fa-fw"></i> Pregled stanja</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Broj računa</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <div class="huge">340-322413-86</div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Valuta</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <div class="huge">RSD</div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <span>Stanje</span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <div class="huge">150.000</div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-line-chart fa-fw"></i> Pregled promena</h3>
                        </div>
                        <div class="panel-body">
                            <canvas id="myChart" style="height: 393px;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Pregled transakcija</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="tabela">
                                <table class="table table-bordered table-hover table-striped">


                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>






</body>
<script>
    grafik();
</script>

</html>

