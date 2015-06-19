<?php 
ob_start();
/**
 * Rama Zeta Configuration Files - Thanks to allah , my family , and my friends :)
 * File Component
 */
function readmoreberita($string,$id){ 
    
    if(strlen($string) > 250){
        $pecah = substr($string, 0, 300); 
        $string = $pecah . "<br/><div class='pull-right'><a href='news.php?id=".$id."' class='btn btn-primary'>Read More</a></div>";
    } else {
        $string;
    }
    return $string; 
    
}
function readmoreevents($string,$id){ 
    
    if(strlen($string) > 250){
        $pecah = substr($string, 0, 300); 
        $string = $pecah . "<br/><div class='pull-right'><a href='events.php?id=".$id."' class='btn btn-primary'>Read More</a></div>";
    } else {
        $string;
    }
    return $string; 
    
}
function special_telor($nilai){
    if($nilai == '0'){
        echo '<i class="icon-thumbs-up"></i>';
    } else if($nilai == '1'){
        echo '<i class="icon-star"></i>';
    } else {
        echo '<i class="icon-thumbs-down"></i>';
    }
}
function cek_konten($teks) {
    $penting = array("hacker","hacked","cracked","tusboled","owned","Owned","touched","cracker","heker");
    $hasil = 1;
    $jml_kata = count($penting);
    
    for ($i=0;$i<$jml_kata;$i++){
        if (stristr($teks,$penting[$i])){ 
            $hasil=0; }
 
        }
    return $hasil;
 }
 
function zeaNoSqli($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}
function zeaAlert($alert){
    echo"<script>alert('".$alert."');</script>";
}
function zeaDataAda($data){
    if(isset($data)){
        echo $data;
    }
}
function zeaKhususAdmin()
{
    if(!isset($_SESSION['ZEA']['AUTH_ADMIN_LOGGED']))
    {
        zeaTambahPesan('Untuk mengakses halaman ini , anda perlu login sebagau Administrator');
        zeaRedirect('index.php');
    }
}

function zeaIsAdminLogin()
{
    return isset($_SESSION['ZEA']['AUTH_ADMIN_LOGGED']);
}
function zeaAdminLogout()
{
    unset($_SESSION['ZEA']['AUTH_ADMIN_LOGGED']);
    zeaTambahPesan('Anda berhasil logout');
}

function zeaRedirect($url = '')
{
    header('Location: '.$url);
    exit();
}

function zeaBuildUrl()
{
    return $_SERVER['PHP_SELF'].(isset($_SERVER['QUERY_STRING'])&&!empty($_SERVER['QUERY_STRING'])?'?'.$_SERVER['QUERY_STRING']:'');
}

function zeaTambahPesan($msg = '')
{
    $_SESSION['ZEA']['PSN'] = !isset($_SESSION['ZEA']['PSN']) ? $msg : $msg.'<br/>'.$_SESSION['ZEA']['PSN'];
}

function zeaTampilPesan($return_string = false)
{
    if(isset($_SESSION['ZEA']['PSN']))
    {
        $msg = trim($_SESSION['ZEA']['PSN']);
        unset($_SESSION['ZEA']['PSN']);
        
        if($return_string)
            echo '<div class="alert alert-success alert-dismissable">
                    <i class="icon-remove-sign"></i>'.$msg.'
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  </div>';
        else
            echo '<div class="alert alert-danger alert-dismissable">
                    <i class="icon-remove-sign"></i>'.$msg.'
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  </div>';
    }
}
function zeaCobaLogin($uname = '', $pass = '')
{
    if($uname == zea_admin_uname && $pass == zea_admin_password)
    {
        $_SESSION['ZEA']['AUTH_ADMIN_LOGGED'] = true;
        zeaRedirect('admin.php');
    }
    
    return false;
}

function get_curl_remote_ips($fp) {
    rewind($fp);
    $str = fread($fp, 8192);
    $regex = '/\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b/';
    if (preg_match_all($regex, $str, $matches)) {
        return array_unique($matches[0]);  // Array([0] => 74.125.45.100 [2] => 208.69.36.231)
    } else {
        return false;
    }
}
?>