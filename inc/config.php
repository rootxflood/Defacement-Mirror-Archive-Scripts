<?php
ob_start();
/**
 * Script Design By D34D ZoNe
 *
 */

define('zea_db_host','localhost'); //hostname
define('zea_db_name','dbanmehere'); //database_name
define('zea_db_uname',	'dbuserhere'); //username
define('zea_db_pass','urdbpassword'); //password



if(file_exists('mysql.class.php'))
{
    require_once('mysql.class.php');
    require_once('lib.php');
    require_once('paging.php');
} elseif(file_exists('inc/mysql.class.php'))
{
    require_once('inc/mysql.class.php');
    require_once('inc/lib.php');
    require_once('inc/paging.php');
} elseif(file_exists('../inc/mysql.class.php'))
{
    require_once('../inc/mysql.class.php');
    require_once('../inc/lib.php');
    require_once('../inc/paging.php');
} elseif(file_exists('../../inc/mysql.class.php'))
{
    require_once('../../inc/mysql.class.php');
    require_once('../../inc/lib.php');
    require_once('../../inc/paging.php');
} elseif(file_exists('../../../inc/mysql.class.php'))
{
    require_once('../../../inc/mysql.class.php');
    require_once('../../../inc/lib.php');
    require_once('../../../inc/paging.php');
} else
    die('Error: Tidak bisa load komponen files');


$db = new zeamysql(zea_db_host, zea_db_name, zea_db_uname, zea_db_pass);


$db->go("SELECT * FROM uadmin WHERE id = 1");
$data = $db->fetchArray();

define('zea_admin_uname',   $data['uname']);
define('zea_admin_password',    $data['password']);
define('zea_admin_name',    $data['fname']);

$db->go("SELECT * FROM setting");
$setting = $db->fetchArray();

define('url_site',  '#');
define('url_image_berita',  'uploads/image/berita');
define('site_title',    $setting['title']);
define('site_subtitle',    $setting['subtitle']);
define('site_description',    $setting['description']);
define('site_logo',     $setting['logo']);
define('site_hal',      $setting['jum_hal']);

$LOAD_RESULTS_OVERRIDE = false;
?>