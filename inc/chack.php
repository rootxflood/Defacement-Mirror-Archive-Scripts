<?

include "config.php";

$id = $_GET['id'];
$id = zeaNoSqli($id);

$check = $db->go("SELECT content FROM notify WHERE id = '$id' ");
$content = @mysql_result($check,0,0);

echo $content;

?>