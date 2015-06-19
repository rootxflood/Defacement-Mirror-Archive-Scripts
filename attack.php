<?php
include('header.php');
include('inc/config.php');
$site_hal = site_hal;
if (isset($_GET['zone'])) {
    $noS = $_GET['zone'];
}
else
    $noS = 1;

$offset = ($noS - 1) * $site_hal;
?><div class="container" style="background-image: url(http://defacezone.com/img/bg.png);>

<div class="widget">
    <h3 class="section-title first-title"><center><span class="fa fa-tags"></span><b> Attacks Archive</b></center></h3>
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
                
                $db->go("SELECT * FROM notify WHERE status = 1 ORDER BY tanggal DESC LIMIT $offset , $site_hal");
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
                       $hackk = $dat['hacker']

                    ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="attacker_<?php echo $dat['hacker']; ?>-1.html"><?php echo $dat['hacker']; ?></a></td>

               
                            <td><a href="<?php echo $dat['url']; ?>"><?php echo $url; ?></a></td>
                            <td class="text-center"><?php echo $cekHome; ?></td>
                            <td><center><img src='flags/<?php echo $cc; ?>.png' alt='<?php echo $cn; ?>' title='<?php echo $cn; ?>'></center></td>                            <td class="text-center"><?php echo $dat['serip']; ?></td>

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
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <div class="dataTables_paginate paging_bootstrap pagination">
                    <ul class="pagination pagination-sm">
                        <?php
                        $db->go("SELECT COUNT(*) AS jumData FROM notify WHERE status = 1");
                        $data = $db->fetchArray();

                        $jumData = $data['jumData'];
                        $jumPage = ceil($jumData / $site_hal);
                        // menampilkan link previous

                        if ($noS > 1)
                            echo "<li class='prev'><a href='archive-" . ($noS - 1) . ".html'>&laquo; prev</a></li>";

                        for ($page = 1; $page <= $jumPage; $page++) {
                            if ((($page >= $noS - 3) && ($page <= $noS + 3)) || ($page == 1) || ($page == $jumPage)) {
                                if (($showPage == 1) && ($page != 2))
                                    echo "";
                                if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                                    echo "";
                                if ($page == $noPage)
                                    echo " <li><a>" . $page . "</a></li> ";
                                else
                                    echo " <li><a href='archive-" . $page . ".html'>" . $page . "</a></li> ";
                                $showPage = $page;
                            }
                        }

                        // menampilkan link next

                        if ($noS < $jumPage)
                            echo "<li class='next'><a href='archive-" . ($noS + 1) . ".html'>next &raquo;</a></li>";
                        ?>
                    </ul>
                </div></div></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div><hr>
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
           
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
<?php
include('footer.php');
?>