<?php date_default_timezone_set("Asia/Calcutta") ?>

<?php
include "header.php";
include "inc/config.php";

$today = date('Y-m-j');
$month = date('Y-m')
?>
<?php
                       $info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

$current_time = "$hour:$min:$sec";
$current_date = "$date/$month/$year";
                        ?>  <div class="container" style="background-image: url(http://defacezone.com/img/bg.png); >
            <!-- Example row of columns --><script>alert("We are patching mass sorry for inconvience")</script>
<div class="col-md-12"><h3 class="section-title first-title"><center><span class="fa fa-code"></span> <b>Statistics</b></center></h3>
 <div class="widget-content-white glossed">
        <div class="padded">
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th class="text-center">Total Hacker</th>
                        <th class="text-center">Total Team</th>
                        <th class="text-center">Total Deface</th>
                                              <th class="text-center">Total Deface in Attack Archive</th>                                              <th class="text-center">Total Special Deface </th>

<th class="text-center">Total Attack Onholds</th>
                    </tr>
                </thead>
              
                    <tbody>
                        <tr>   <?php
                        $db->go("SELECT * FROM hacker");
                        $data = $db->numRows();
                        ?>                  
                            <td class="text-center" ><?php echo $data; ?></a></td>
 <?php
                        $db->go("SELECT * FROM team");
                        $data = $db->numRows();
                        ?>                    

                            <td class="text-center"><?php echo $data; ?></td>
<?php
                        $db->go("SELECT * FROM notify");
                        $data1 = $db->numRows();
                        ?>          
<td class="text-center"><?php echo $data1; ?></td>
<?php
                        $db->go("SELECT * FROM notify  WHERE status = 1");
                        $data3 = $db->numRows();
                        ?>            <td class="text-center"><?php echo $data3; ?></td>
<?php
                    				 $db->go("SELECT * FROM notify WHERE status = 1 AND type = 1");
                        $data1 = $db->numRows();
                        ?>           <td class="text-center"><?php echo $data1; ?></td>

<?php
                $db->go("SELECT * FROM notify WHERE status = 0");
                        $data2 = $db->numRows();
                                                ?>            <td class="text-center"><?php echo $data2; ?></td>

                            </tr>
                    </tbody>
        </div>
    </div></table></div>
<div class="col-md-6"><h3 class="section-title first-title"><center><span class="fa fa-trophy"></span> <b>Top 5 Hacker's on Mirror-DB</b></center></h3>
 <div class="widget-content-white glossed">
        <div class="padded">
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Team Name</th>
                        <th>Total Deface</th>
                        <th>Special Deface</th>
                    </tr>
                </thead>
                <?php
                $db->go("SELECT * FROM hacker ORDER BY deface DESC LIMIT 5");
                $no = 1;
                while ($data = $db->fetchArray()) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no; ?></a></td>
                            <td class="text-center"><a href="attacker_<?php echo $data['hacker']; ?>-1.html"><?php echo htmlspecialchars($data['hacker']); ?></a></td>
<td class="text-center"><?php echo htmlspecialchars($data['team']); ?></td>
                            <td class="text-center"><?php echo $data['deface']; ?></a></td>
                            <td class="text-center"><?php echo $data['special']; ?></td>
                        </tr>
                    </tbody>
    <?php $no++;
} ?>
        </div>
    </div></table></div></div></div>

<div class="col-md-6"><?php include "atop5.php"; ?>
</div></div></div></div></div></div></div>
<div class="col-md-12"><?php include "recent.php"; ?></div></div></div></div></div></div></div>

<div class="col-md-12"><?php include "reon.php"; ?>

</div>
    </div> </div></div>
</div>
            <hr>

            <?php
include "footer.php"; ?>





        <script type="text/javascript" src="http://facilityregistry.dghs.gov.bd/library/jstree-bootstrap-theme-master/jquery.js"></script>
        <script type="text/javascript" src="http://facilityregistry.dghs.gov.bd/library/jstree-bootstrap-theme-master/jquery.cookie.js"></script>
        <script type="text/javascript" src="http://facilityregistry.dghs.gov.bd/library/jstree-bootstrap-theme-master/jquery.hotkeys.js"></script>
        <script type="text/javascript" src="http://facilityregistry.dghs.gov.bd/library/jstree-bootstrap-theme-master/jquery.jstree.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        
        <script src="http://facilityregistry.dghs.gov.bd/library/Slidorion/dist/jquery.slidorion.min.js"></script>
        
        <script src="js/main.js"></script>
        
        <script src="http://facilityregistry.dghs.gov.bd/library/slimbox-2.05/js/slimbox2.js"></script>

        <script type="text/javascript">
        $(function() {
            $("#org_list").jstree({
                "plugins": ["themes", "html_data", "ui", "crrm", "hotkeys"],
                "core": {
                    "animation": 100
                },
                "themes": {
                    "theme": "proton"
                },
            })
        });
        </script>

        <script>
            $(function() {
                $('#slidorion').slidorion({
                    effect: 'slideRandom',
                    hoverPause: true,
                    interval: 20000,
                    speed: 800,
                    controlNav: false,
                    controlNavClass: 'nav'
                });
            });
        </script>
        <!-- Google Analytics Code-->
        <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42800859-2', 'dghs.gov.bd');
    ga('send', 'pageview');

</script>
    

<div id="jstree-marker" style="display: none;">»</div><div id="jstree-marker-line" style="display: none;"></div><div id="vakata-contextmenu"></div><div id="lbOverlay" style="display: none;"></div><div id="lbCenter" style="display: none;"><div id="lbImage"><div style="position: relative;"><a id="lbPrevLink" href="#"></a><a id="lbNextLink" href="#"></a></div></div></div><div id="lbBottomContainer" style="display: none;"><div id="lbBottom"><a id="lbCloseLink" href="#"></a><div id="lbCaption"></div><div id="lbNumber"></div><div style="clear: both;"></div></div></div><iframe frameborder="0" scrolling="no" style="border: 0px; display: none; background-color: transparent;"></iframe><div id="GOOGLE_INPUT_CHEXT_FLAG" input="null" input_stat="{&quot;tlang&quot;:true,&quot;tsbc&quot;:true,&quot;pun&quot;:true,&quot;mk&quot;:false,&quot;ss&quot;:true}" style="display: none;"></div></body></html>


        </div>