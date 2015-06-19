<?php
include('inc/config.php');
include('header.php');


$id = zeaNoSqli($_GET['id']);
$db->go("SELECT * FROM notify WHERE id = '$id'");


$control = $db->numRows();

if ($control == 0) {
    zeaTambahPesan("Catatan tidak ada. Silahkan periksa kembali");
    zeaRedirect('archive.php?search=1');
} else {
    $db->go("SELECT * FROM notify WHERE id = '$id'");
    $mirror = $db->fetchArray();
    ?><div class="container"  >

<center><h3> View <span class="fa fa-eye"></span> Mirror : <strong><? echo' ' . $mirror['url'] . ' ' ?></strong>   </h3></center>
<div class="black">
      <?php
          
										$apikey = urapikey of ipinfodb here
if ($ip = $mirror['serip']) {
           	$ipdetail = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key={$apikey}&ip={$ip}&format=json"));
			$cn = $ipdetail->countryName;
			$cc = $ipdetail->countryCode;
			}
    

          ?>
    <div class="widget-content-white glossed">
        <div class="padded">
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th class="text-center">Notified on</th>
                        <th class="text-center">Notified by</th>
                        <th class="text-center">Domain</th>                        <th class="text-center">PoC</th>

                        <th class="text-center">Server IP</th>
<th class="text-center">L</th>
                        <th class="text-center">Full Screen</th>
                    </tr>
                </thead>
               
                    <tbody>
                        <tr>
                            <td class="text-center"><strong> <? echo' ' . $mirror['tanggal'] . ' ' ?></strong></td>
                            <td class="text-center"><strong><? echo' ' . htmlspecialchars($mirror['hacker']) . ' ' ?></strong></td>
                            <td class="text-center"><strong><? echo' ' . htmlspecialchars($mirror['url']) . ' ' ?></strong></td>
                            <td class="text-center"> <strong><? echo' ' . htmlspecialchars($mirror['poc']) . ' ' ?></strong></td>
                            <td class="text-center"> <strong><? echo' ' . $mirror['serip'] . ' ' ?></strong></td>
<td><center><img src='flags/<?php echo $cc; ?>.png' alt='<?php echo $cn; ?>' title='<?php echo $cn; ?>'>
<?php echo $cnn; ?>
</center></td>
                          
<td class="text-center"><strong>
                                <? echo " <a href='full_{$id}.html'  class='btn btn-success btn-xs' <i class='icon-external-link-sign'></i> View </a> " ?></strong>
                            </td>
                        </tr>
                    </tbody></table></div></div></div>
<div class="well"><iframe src= "inc/chack.php?id=<? echo $_GET['id']; ?>" style="border:0px #000000 none;" width="100%" height="450px" border="0" scrolling="auto" frameborder="no"/></iframe></div>
    </div></div><hr>
<?php } ?><?php include "footer.php"; ?>