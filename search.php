<?php
include('inc/config.php');
include('header.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="widget">
    <h3 class="section-title first-title"><i class="icon-table"></i> Notify Results</h3>
    <div class="widget-content-white glossed">
        <div class="padded">
            <?php
            $value = zeaNoSqli($_POST['search']);
            if ((isset($value)) AND ($value <> "")) {

                $db->go("SELECT * FROM notify WHERE url LIKE '%$value%'");
                $hit1 = $db->numRows();

                if ($hit1 > 0) {
                    $db->go("SELECT * FROM notify WHERE url LIKE '%$value%'");
                    while ($data = $db->fetchArray()) {
                        echo '<p><a href="' . $data['url'] . '">' . $data['url'] . '</a> Notified By <strong>' . $data['hacker'] . '</strong><hr/>';
                    }
                } else {
                    echo '<p><strong>Data tidak ditemukan di database notify</strong></p>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="widget">
        <h3 class="section-title first-title"><i class="icon-table"></i> News Results</h3>
        <div class="widget-content-white glossed">
            <div class="padded">
                <?php
                $db->go("SELECT * FROM berita WHERE content LIKE '%$value%'");
                $hit1 = $db->numRows();

                if ($hit1 > 0) {
                    $db->go("SELECT * FROM berita WHERE content LIKE '%$value%'");
                    while ($data = $db->fetchArray()) {
                        echo '<p><a href="news.php?id=' . $data['id'] . '">' . $data['title'] . '</a> Author <strong>' . $data['author'] . '</strong> Created On <strong>' . $data['tanggal'] . '<hr/>';
                    }
                } else {
                    echo '<p><strong>Data tidak ditemukan di database berita</strong></p>';
                }
                ?>
            </div>
        </div>
    </div><div class="widget">
        <h3 class="section-title first-title"><i class="icon-table"></i> Events Results</h3>
        <div class="widget-content-white glossed">
            <div class="padded">
                <?php
                $db->go("SELECT * FROM events WHERE deskripsi LIKE '%$value%'");
                $hit1 = $db->numRows();

                if ($hit1 > 0) {
                    $db->go("SELECT * FROM events WHERE deskripsi LIKE '%$value%' DESC");
                    while ($data = $db->fetchArray()) {
                        echo '<p><a href="events.php?id=' . $data['id'] . '">' . $data['judul'] . '</a> Author <strong>' . $data['author'] . '</strong> Created On <strong>' . $data['tangal'] . '</strong><hr/>';
                    }
                } else {
                    echo '<p><strong>Data tidak ditemukan di database events</strong></p>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php
} else {
    zeaTambahPesan("Anda belum menginputkan data apapun");
    zeaRedirect('index.html');
}
include('footer.php');
?>