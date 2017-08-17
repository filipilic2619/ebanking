<?php

include("config.php");

function checkLogin($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $query = $conn->prepare($sql);
   $query->bind_param("ss", $username, $password);
   $query->execute();
   $query->store_result();
   if ($query->num_rows > 0)
   {
       return 1;
   }
   else
   {
       return 0;
   }
   $query->close();
}

function checkUsername($username)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();
    if ($query -> num_rows > 0) {
        return 1;
    }
    else
    {
        return 0;
    }
}



function getUserId($username)
{
    global $conn;
    $sql = "SELECT user_id FROM users WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function addVerification ($userID, $code)
{
    if(checkVerification($userID))
    {
        global $conn;
        $insert = "UPDATE verification SET code=? WHERE user_id=?";
        $query = $conn->prepare($insert);
        $query->bind_param("ii", $code, $userID);
        $query->execute();
        $query->close();
    } else
    {
        global $conn;
        $insert = "INSERT INTO verification (user_id, code) VALUES (?, ?)";
        $query = $conn->prepare($insert);
        $query->bind_param("ii", $userID, $code);
        $query->execute();
        $query->close();
    }


}

function checkVerification($userID)
{
    global $conn;
    $sql = "SELECT * FROM verification WHERE user_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $userID);
    $query->execute();
    $query->store_result();
    if ($query -> num_rows > 0) {
        return 1;
    }
    else
    {
        return 0;
    }
}

function checkCode($userID, $code)
{
    global $conn;
    $sql = "SELECT datetime FROM verification WHERE user_id=? AND code=? AND datetime > date_sub(now(), interval 2 minute)";
    $query = $conn->prepare($sql);
    $query->bind_param("ii", $userID, $code);
    $query->execute();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function getUserIdbyDevice($deviceId)
{
    global $conn;
    $sql = "SELECT user_id FROM devices WHERE device_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $deviceId);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function getCode($userID)
{
    global $conn;
    $sql = "SELECT code FROM verification WHERE user_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $userID);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function getRacuni($userID)
{
    $niz = array();
    global $conn;
    $sql = "SELECT broj_racuna, naziv FROM racuni WHERE user_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $userID);
    $query->execute();
    $query->store_result();
    $query->bind_result($broj, $naziv);

    while ($query->fetch())
    {
        $niz[$broj] = $naziv;
    }
    $query->free_result();
    $query->close();
    return $niz;
}

function getPodaciRacuna($broj)
{
    $niz = array();
    global $conn;
    $sql = "SELECT valuta, naziv, stanje FROM racuni WHERE broj_racuna=?";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $broj);
    $query->execute();
    $query->store_result();
    $query->bind_result($valuta, $naziv, $stanje);

    while ($query->fetch())
    {
        $niz[0] = $valuta;
        $niz[1] = $naziv;
        $niz[2] = $stanje;
    }
    $query->free_result();
    $query->close();
    return $niz;
}

function getTransakcije($broj)
{
    $niz = array();
    global $conn;
    $sql = "SELECT id_transakcije, svrha, datum, iznos, stanje FROM transakcije WHERE racunprimaoc=? OR racunplatilac=?";
    $query = $conn->prepare($sql);
    $query->bind_param("ss", $broj, $broj);
    $query->execute();
    $query->store_result();
    $query->bind_result($id, $svrha, $datum, $iznos, $stanje);
    $n=0;
    while ($query->fetch())
    {
        $niz[$n] = $id . ";" . $svrha . ";" . $datum . ";" . $iznos . ";" . $stanje;
        $n++;
    }
    $query->free_result();
    $query->close();
    return $niz;
}

function getIme($userID)
{
    global $conn;
    $sql = "SELECT ime FROM users WHERE user_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $userID);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function uplata($nazivplatilac, $nazivprimaoc, $racunplatilac, $racunprimaoc, $svrha, $datum, $iznos, $stanje, $model, $poziv)
{
    global $conn;
    $insert = "INSERT INTO transakcije (nazivplatilac, nazivprimaoc, racunplatilac, racunprimaoc, svrha, datum, iznos, stanje, model, poziv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $query = $conn->prepare($insert);
    $query->bind_param("ssssssssss", $nazivplatilac, $nazivprimaoc, $racunplatilac, $racunprimaoc, $svrha, $datum, $iznos, $stanje, $model, $poziv);
    $query->execute();
    $query->close();
}

function getStanje($broj)
{
    global $conn;
    $sql = "SELECT stanje FROM racuni WHERE broj_racuna=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $broj);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function setStanje($stanje, $broj)
{
    global $conn;
    $insert = "UPDATE racuni SET stanje=? WHERE broj_racuna=?";
    $query = $conn->prepare($insert);
    $query->bind_param("ss", $stanje, $broj);
    $query->execute();
    $query->close();
}

function getToken($userid)
{
    global $conn;
    $sql = "SELECT device_id FROM devices WHERE user_id=?";
    $query = $conn->prepare($sql);
    $query->bind_param("i", $userid);
    $query->execute();
    $query->store_result();
    $query->bind_result($id);
    $result = "";
    while ($query->fetch())
    {
        $result = $id;
    }
    $query->free_result();
    $query->close();
    return $result;
}

function setToken($userid, $token)
{
    global $conn;
    $insert = "UPDATE devices SET device_id=? WHERE user_id=?";
    $query = $conn->prepare($insert);
    $query->bind_param("ss", $token, $userid);
    $query->execute();
    $query->close();
}

