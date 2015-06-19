<?php

$site_hal = site_hal;
if (isset($_GET['zone'])) {
    $noS = $_GET['zone'];
}
else
    $noS = 1;

$offset = ($noS - 1) * $site_hal;
?><div class="container" style="background-image: url(http://defacezone.com/img/bg.png); >

<div class="widget">
    <h3 class="section-title first-title"><center><i class="fa fa-arrow-right"></i>
<b> Recent 5 Entry in Attack Archive</b></center></h3>
    <div class="widget-content-white glossed">
        <div class="padded">
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Domain</th>
                        <th class="text-center">H</th>
                        <th class="text-center">L</th>
<th class="text-center">IP</th>
                        <th class="text-center"><i class="fa fa-star"></th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Mirror</th>
                    </tr>
                </thead>
                <?php
                $db->go("SELECT * FROM notify WHERE status = 1 ORDER BY tanggal DESC LIMIT 5");
                while ($dat = $db->fetchArray()) {

                    if (strlen($dat['url']) > 45) {
                        $url = substr($dat['url'], 0, 45) . "...";
                    } else {
                        $url = $dat['url'];
                    }

			$getHome = parse_url($dat['url'], PHP_URL_PATH);
			if($getHome=="/" || $getHome == "/index.php" || $getHome == "/index.html" || $getHome == "/index.htm" || $getHome == "" ) {
			$cekHome = 'H';
			} else {
			$cekHome = '';
			}

							$apikey = urapikey of ipinfodb here
if ($ip = $dat['serip']) {
			$ipdetail = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key={$apikey}&ip={$ip}&format=json"));
			$cn = $ipdetail->countryName;
			$cc = $ipdetail->countryCode;
			}
			
		
			
			if ($dat['type'] == "1" && $dat['status'] == "1") {
			$cekSpecial = '<i class="fa fa-star">';
			}
			else {
			$cekSpecial = '<i class="fa fa-star-o">';
			}					
					
			
 if ($dat['mass'] == 1) {
$mass = "M";
} else {
$mass = "";
}
                    ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="attacker_<?php echo $dat['hacker']; ?>-1.html"><?php echo $dat['hacker']; ?></a></td>
                            <td><a href="<?php echo $dat['url']; ?>"><?php echo $url; ?></a></td>
                            <td class="text-center"><?php echo $cekHome; ?></td>
                                                        <td><center><img src='flags/<?php echo $cc; ?>.png' alt='<?php echo $cn; ?>' title='<?php echo $cn; ?>'></center></td>
                          <td class="text-center"><?php echo $dat['serip']; ?></td>

<td class="text-center"><?php echo $cekSpecial; ?></td>
                            <td class="text-center"><?php echo $dat['tanggal']; ?></td>
                            <td class="text-center">
                                <a href="mirror_<?php echo $dat['id']; ?>.html" class="btn btn-danger btn-xs"><i class="icon-external-link-sign"></i> Mirror</a>
                            </td>
                        </tr>
                    </tbody>
<?php } ?>
        </div>
    </div></table>