<?php
include('header.php');
include('inc/config.php');
$site_hal = site_hal;
if (isset($_GET['s'])) {
    $noS = $_GET['s'];
}
else
    $noS = 1;

$offset = ($noS - 1) * $site_hal;
?><div class="container" style="background-image: url(http://defacezone.com/img/bg.png); ><div class="widget">
    <h3 class="section-title first-title"><center><span class="fa fa-signal"></span> <b>Team Ranking</b></center></h3>
    <div class="widget-content-white glossed">
        <div class="padded">
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
<center>
                        <th>Name</th>
                        <th>Total Deface</th>
                        
                 </center>
                    </tr>
                </thead>
                <?php
                $db->go("SELECT * FROM team ORDER BY member DESC LIMIT $offset, $site_hal");
                $no = 1;
                while ($data = $db->fetchArray()) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no; ?></a></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['team']); ?></a></td>
                          
                            <td class="text-center"><?php echo $data['tot_deface']; ?></a></td>
                          
                        </tr>
                    </tbody>
    <?php $no++;
} ?>
        </div>
    </div></table>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <div class="dataTables_paginate paging_bootstrap">
                    <ul class="pagination pagination-sm">
                        <?php
                        $db->go("SELECT COUNT(*) AS jumData FROM hacker ORDER BY deface");
                        $data = $db->fetchArray();

                        $jumData = $data['jumData'];
                        $jumPage = ceil($jumData / $site_hal);
                        // menampilkan link previous

                        if ($noS > 1)
                            echo "<li class='prev'><a href='team-rank-" . ($noS - 1) . ".html'> Prev</a></li>";

                        for ($page = 1; $page <= $jumPage; $page++) {
                            if ((($page >= $noS - 3) && ($page <= $noS + 3)) || ($page == 1) || ($page == $jumPage)) {
                                if (($showPage == 1) && ($page != 2))
                                    echo "...";
                                if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                                    echo "...";
                                if ($page == $noPage)
                                    echo " <li><a>" . $page . "</a></li> ";
                                else
                                    echo " <li><a href='team-rank-" . $page . ".html'>" . $page . "</a></li> ";
                                $showPage = $page;
                            }
                        }

                        // menampilkan link next

                        if ($noS < $jumPage)
                            echo "<li class='next'><a href='team-rank-" . ($noS + 1) . ".html'>Next </a></li>";
                        ?>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div></div><hr>
<?php include('footer.php'); ?>