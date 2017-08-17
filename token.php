<?php
session_start();

include ("includes/functions.php");

$id = getUserId($_SESSION["username"]);
$device= getToken($id);

echo '<div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                      <h1>
                      Podešavanje tokena                        
                      </h1>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-shield fa-fw"></i> Token</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                             <div class="col-md-4 col-md-offset-4 text-center">
                                                    <div class="form-group">
                                                        <label for="usr">Broj tokena</label>
                                                        <input type="text" class="form-control text-center" id="tokenbroj" value="'. $device .'">
                                                    </div>
                                                </div>
                             </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                            <button type="button" onclick="izmeniToken()" id="izmeniToken" class="btn btn-default">Izmeni token</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

';
?>