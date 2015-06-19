<?php
error_reporting(0);
session_start();
include('inc/config.php');
$poc= $_POST['poc'];
$url = $_POST['url'];
$team = $_POST['team'];
$team = htmlspecialchars($team, ENT_QUOTES);
$hacker = $_POST['hacker'];
$hacker = htmlspecialchars($hacker, ENT_QUOTES);
$regip = $_SERVER[REMOTE_ADDR];
$low_hacker = strtolower($hacker);
$up_hacker = strtoupper($hacker);
if (strstr($url, "www")) {
    $pertama = strpos($url, ".");
    $med = substr($url, $pertama + 1);
    $ilkson = strpos($med, "/");
    $med = substr($url, $pertama + 1, $ilkson + 1);
    $length = strlen($med);
    $son = substr($med, $length - 1);
    if ($son == "/") {
        $ara = substr($med, 0, $length - 1);
    } else {
        $ara = $url . "";
    }
} else {
    $med = substr($url, 7);
    $ilkson = strpos($med, "/");
    $med = substr($med, 0, $ilkson + 1);

    $length = strlen($med);
    $son = substr($med, $length - 1);

    if ($son == "/") {
        $ara = substr($med, 0, $length - 1);
    } else {
        $ara = $url . "/";
    }
}
$db->go("SELECT * FROM notify WHERE url LIKE '%$ara%'");
$kontrol = $db->numRows();
if ($kontrol > 0) {
     zeaTambahPesan("<strong>$url</strong> Already Notified");
     zeaRedirect('single.notify');
} else {
    $wrapper = fopen('php://temp', 'r+');
    $crl = curl_init();
    $ch = curl_init($url);
    curl_setopt($crl, CURLOPT_TIMEOUT, "30");
    curl_setopt($crl, CURLOPT_URL, "$url");
    curl_setopt($crl, CURLOPT_HEADER, 0);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_STDERR, $wrapper);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = addslashes(curl_exec($crl));
    $result = curl_exec($ch);
    curl_close($crl);
    curl_close($ch);
    $ips = get_curl_remote_ips($wrapper);
    fclose($wrapper);
    $ip = end($ips);
}
if ($content == "") {
    zeaTambahPesan("<strong>$url</strong> Domain Is Inactive/Blank Page");
    zeaRedirect('single.notify');
} else if (cek_konten($content)) {
    zeaTambahPesan("<strong>$url</strong> Domain Hasn't Been Defaced !!");
    zeaRedirect('single.notify');
} else {
    $cekdulu = array("$low_hacker", "$up_hacker", "$hacker");
    $hitung = count($cekdulu);
    for ($i = 0; $i < $hitung; $i++) {
        if (stristr($content, $cekdulu[$i])) {
            $status = 1;
        } else {
            $status = 0;
        }
    }
    $hacker = addslashes($hacker);
    $regip = $_SERVER['REMOTE_ADDR'];
    $special = "0";
    if ((strstr($url, ".gov")) or (strstr($url, ".edu")) or (strstr($url, ".pk")) or (strstr($url, ".gob")) or (strstr($url, ".edu")) or (strstr($url, ".mil")) or (strstr($url, "https://"))) {
        $special = "1";
    }
    $query = $db->go("INSERT INTO notify (id, hacker, url, content, tanggal, type, status, hit, regip, serip, poc) VALUES(NULL, '$hacker', '$url', '$content', now(), '$special','$status','1','$regip','$ip','$poc') ");
    $db->go("SELECT * FROM hacker WHERE hacker = '$hacker'");
    $hacker_s = $db->numRows();
    if ($hacker_s > 0) {
        $query2 = $db->go("UPDATE hacker SET onholds = onholds + " . ($status == "1" ? "'1'" : "'0'") . ", deface = deface + 1 , special = special + " . ($special == "1" ? "'1'" : "'0'") . " WHERE hacker = '$hacker'");
    } else { 
        $query2 = $db->go("INSERT INTO hacker (id, hacker, team, deface, special, onholds) VALUES('', '$hacker', '$team', '1', " . ($special == "1" ? "'1'" : "'0'") . ", " . ($status == "1" ? "'1'" : "'0'") . ") ");
    } 
    $db->go("SELECT * FROM team WHERE team = '$team'");
    $team_s = $db->numRows();
    if ($team_s > 0) {
        $query3 = $db->go("UPDATE team SET tot_deface = tot_deface + 1 , member = member + 1 WHERE team = '$team'");
    } else {
        $query3 = $db->go("INSERT INTO team (team, member, tot_deface) VALUES ('$team','1','1')");
    }
    if ($query && $query2 && $query3) {
        if ($status == 1) {
            zeaTambahPesan("<strong>$url</strong> Domain Added In Archives");
            zeaRedirect('single.notify');
        }
        if ($status == 0) {
            zeaTambahPesan("<strong>$url</strong> Domain Added On Hold");
            zeaRedirect('single.notify');
        }
    } else {
        zeaTambahPesan("<strong>$url</strong> Domain fails added. Please try again");
        zeaRedirect('single.notify');
    }
}
?>