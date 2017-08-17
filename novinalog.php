<?php
session_start();

include ("includes/functions.php");

echo '<div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                      <h3>Račun:
                        <select class="selectpicker" id="izaberi" onchange="promenaNaloga(this.value)">
                        <option value="izaberi">Izaberite račun...</option>
                          '. racuni() .'
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
                            <button type="button" onclick="uplati()" id="uplati" class="btn btn-default" disabled>Izvrši uplatu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

';

function racuni()
{


    $userid = getUserId($_SESSION["username"]);
    $niz = getRacuni($userid);

    $brojevi = array_keys($niz);

    $result="";
    foreach ($brojevi as $broj)
    {
        $result.= "<option>" . $broj . "</option>";
    }

    return $result;
}
?>