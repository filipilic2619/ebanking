<?php
include ("includes/functions.php");

$broj = $_POST["id"];

$brojPrikaz1 = substr_replace(substr_replace($broj, "-", 3, 0), "-", strlen(substr_replace($broj, "-", 3, 0))-2, 0);
$niz = getPodaciRacuna($broj);



echo '<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">' . $niz[1] .'</h1>

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
                                                    <div class="huge">' . $brojPrikaz1 . '</div>

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
                                                    <div class="huge">' . $niz[0] .'</div>

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
                                                    <div class="huge">' . $niz[2] .'</div>

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
                                <table class="table table-bordered table-hover table-striped" id="tbl">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Svrha</th>
                                        <th>Datum </th>
                                        <th>Iznos</th>
                                       <th>Stanje</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 ' . tabela() . ' 
                                 
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div> ';

function tabela()
{

    $transakcije = getTransakcije($_POST["id"]);
    $result="";
    foreach ($transakcije as $trans)
    {
        $stanje =number_format((float)$trans[4], 2, '.', '') . "";

        $result.= "<tr><td>". explode(';', $trans)[0] . "</td><td>". explode(';', $trans)[1] . "</td><td>". explode(';', $trans)[2] . "</td><td>". explode(';', $trans)[3] . "</td><td>". explode(';', $trans)[4] . "</td></tr>";
    }

    return $result;
}

      ?>