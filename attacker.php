<?php
include('header.php');
include('inc/config.php');

$hacker = zeaNoSqli($_GET['haxor']);
$site_hal = site_hal;
if (isset($_GET['s'])) {
    $noS = $_GET['s'];
}
else
    $noS = 1;

$offset = ($noS - 1) * $site_hal;

if ($hacker == "" || strlen($hacker) < 4) {
    zeaTambahPesan("Hacker tidak ditemukan.");
    zeaRedirect('archive.php?search=1');
}

if (!$_GET['s']){
header("location:attacker_$hacker-1.html");
}

                $db->go("SELECT * FROM hacker WHERE hacker = '$hacker'");
$data = $db->fetchArray()

?><div class="templatemo-content-container"  >
<div class="widget">
    <h3 class="section-title first-title"><center><span class="fa fa-signal"></span> <b>Top 5 Team on Mirror-DB</b></center></h3>
    <div class="widget-content-white glossed">
        <div class="padded"><br>
            <table class="table table-striped table-bordered table-hover datatable"><thead>
                    <tr>
                        <th>Name</th>
                        <th>Domain</th>
                        <th class="text-center">H</th>
                        <th class="text-center">L</th>
                        <th class="text-center"><i class="fa fa-star"></th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Mirror</th>
                    </tr>
                </thead>
                <?php
                $db->go("SELECT * FROM notify WHERE hacker = '$hacker' ORDER BY tanggal DESC LIMIT $offset,$site_hal");
                while ($dat = $db->fetchArray()) {

                    if (strlen($dat['url']) > 45) {
                        $url = substr($dat['url'], 0, 45) . "...";
                    } else {
                        $url = $dat['url'];
                    }

			$getHome = parse_url($dat['url'], PHP_URL_PATH);
			if($getHome=="/" || $getHome=="/index.php" || $getHome=="/index.html" || $getHome=="/index.htm" || $getHome=="" ) {
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
		
                    ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="attacker_<?php echo $dat['hacker']; ?>-1.html"><?php echo $dat['hacker']; ?></a></td>
                            <td><a href="<?php echo $dat['url']; ?>"><?php echo $url; ?></a></td>
                            <td class="text-center"><?php echo $cekHome; ?></td>
                            <td><center><img src='flags/<?php echo $cc; ?>.png' alt='<?php echo $cn; ?>' title='<?php echo $cn; ?>'></center></td>
                            <td class="text-center"><?php echo $cekSpecial; ?></td>
                            <td class="text-center"><?php echo $dat['tanggal']; ?></td>
                            <td class="text-center">
                                <a href="mirror_<?php echo $dat['id']; ?>.html" class="btn btn-danger btn-xs"><i class="icon-external-link-sign"></i> Mirror</a>
                            </td>
                        </tr>
                    </tbody>
<?php } ?></div></div>
        </div>
    </div></table>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <div class="dataTables_paginate paging_bootstrap">
                    <ul class="pagination pagination-sm">
                        <?php
                        $db->go("SELECT COUNT(*) AS jumData FROM notify WHERE hacker = '$hacker'");
                        $data = $db->fetchArray();

                        $jumData = $data['jumData'];
                        $jumPage = ceil($jumData / $site_hal);
                        // menampilkan link previous

                        if ($noS > 1)
                            echo "<li class='prev'><a href='attacker_".$hacker."-" . ($noS - 1) . ".html'> Prev</a></li>";

                        for ($page = 1; $page <= $jumPage; $page++) {
                            if ((($page >= $noS - 3) && ($page <= $noS + 3)) || ($page == 1) || ($page == $jumPage)) {
                                if (($showPage == 1) && ($page != 2))
                                    echo "...";
                                if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                                    echo "...";
                                if ($page == $noPage)
                                    echo " <li><a>" . $page . "</a></li> ";
                                else
                                    echo " <li><a href='attacker_".$hacker."-" . $page . ".html'>" . $page . "</a></li> ";
                                $showPage = $page;
                            }
                        }

                        // menampilkan link next

                        if ($noS < $jumPage)
                            echo "<li class='next'><a href='attacker_".$hacker."-" . ($noS + 1) . ".html'>Next </a></li>";
                        ?>
                    </ul>
                </div></div>
            </div>
           
  
</div>
</div>


<tbody>
                        <tr>
                            <td class="text-center"><a href="attacker_<?php echo $dat['hacker']; ?>-1.html"><?php echo $dat['hacker']; ?></a></td>
                            <td><a href="<?php echo $dat['url']; ?>"><?php echo $url; ?></a></td>
                            <td class="text-center"><?php echo $cekHome; ?></td>
                            <td><center><img src='flags/<?php echo $cc; ?>.png' alt='<?php echo $cn; ?>' title='<?php echo $cn; ?>'></center></td>
                            <td class="text-center"><?php echo $cekSpecial; ?></td>
                            <td class="text-center"><?php echo $dat['tanggal']; ?></td>
                            <td class="text-center">
                                <a href="mirror_<?php echo $dat['id']; ?>.html" class="btn btn-danger btn-xs"><i class="icon-external-link-sign"></i> Mirror</a>
                            </td>
                        </tr>
                    </tbody>