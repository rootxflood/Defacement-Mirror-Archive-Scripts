<?php
$site_hal = site_hal;
if (isset($_GET['s'])) {
    $noS = $_GET['s'];
}
else
    $noS = 1;

$offset = ($noS - 1) * $site_hal;
?><div class="widget">
    <h3 class="section-title first-title"><center><span class="fa fa-signal"></span> <b>Top 5 Team on Mirror-DB</b></center></h3>
    <div class="widget-content-white glossed">
        <div class="padded"><br>
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
                $db->go("SELECT * FROM team ORDER BY member DESC LIMIT 5");
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