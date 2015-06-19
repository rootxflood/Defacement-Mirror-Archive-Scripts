<?
function h_paging($search,$nomor,$jumlah_h,$limit){
$next = $search + 1;
$prev = $search - 1;

if ($jumlah_h > 10){

if ($search == 1) {

$pertama = 1;
$terakhir = 10;

for ($i=$pertama;$i<=$terakhir;$i++){
    if ($i == $search){
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} elseif ($search < 6){

$pertama = 1;
$terakhir = 10;

echo '<li class="prev"><a href="'.$PHP_SELF.'?search='.$prev.'"><i class="icon-double-angle-left"> Previous</a></li>';

for ($i=$pertama;$i<=$terakhir;$i++){
    if ($i == $search){ 
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} elseif ($search == $jumlah_h){

$pertama = $search - 10;
$terakhir = $jumlah_h;

echo '<li class="prev"><a href="'.$PHP_SELF.'?search='.$prev.'"><i class="icon-double-angle-left"> Previous</a></li>';

for ($i=$pertama;$i<=$terakhir;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

} elseif ($search > $jumlah_h-5){
    $pertama = $jumlah_h - 10;
    $terakhir = $jumlah_h;

    echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

for ($i=$pertama;$i<=$terakhir;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} else {

$pertama = $search - 5;
$terakhir = $search + 5;

echo '<li class="prev"><a href="'.$PHP_SELF.'?search='.$prev.'"><i class="icon-double-angle-left"> Previous</a></li>';

for ($i=$pertama;$i<=$terakhir;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} // sayfa ilk son kontrol

} else { // 10 dan büyük deðilse

if ($jumlah_h > 1){
if ($search == 1){

for ($i=1;$i<=$jumlah_h;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li class="next"><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} elseif ($search == $jumlah_h) {

echo '<li class="prev"><a href="'.$PHP_SELF.'?search='.$prev.'"><i class="icon-double-angle-left"> Previous</a></li>';

for ($i=1;$i<=$jumlah_h;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li> ';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

} else {

echo '<li class="prev"><a href="'.$PHP_SELF.'?search='.$prev.'"><i class="icon-double-angle-left"> Previous</a></li>';

for ($i=1;$i<=$jumlah_h;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?search='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

echo '<li><a href="'.$PHP_SELF.'?search='.$next.'">Next <i class="icon-double-angle-right"></a></li>';

} // sayfa ilk son kontrol

} else { // tek sayfaysa

for ($i=1;$i<=$jumlah_h;$i++){
    if ($i == $search) {
        echo '<li><a>'.$i.'</a></li>';
    }
    else {
        echo '<li><a href="'.$PHP_SELF.'?s='.$i.'">'.$i.'</a></li>';
    }
} //for bitim

} // 1 sayfadan büyük mü kontrolü

} // 10 dan büyük kontrol

return $search;
return $nomor;
return $jumlah_h;
return $limit;
} // sayfala fonksiyonu bitimi
function paging($search, $nomor, $jumlah_h, $limit, $hacker) {
    $next = $search + 1;
    $prev = $search - 1;

    if ($jumlah_h > 10) {

        if ($search == 1) {

            $pertama = 1;
            $terakhir = 10;

            for ($i = $pertama; $i <= $terakhir; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                } else {
                    echo '<li><a href="'. $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                }
            } //for bitim

            echo '<li class="next"><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></i></a></li>';
        } elseif ($search < 6) {

            $pertama = 1;
            $terakhir = 10;

            echo '<li class="prev"><a href="' . $PHP_SELF . '?search=' . $prev . '&haxor=' . $hacker . '"><i class="icon-double-angle-left"></i> Previous</a></li>';

            for ($i = $pertama; $i <= $terakhir; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                } else {
                    echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                }
            } //for bitim

            echo '<li class="next"><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></a></li>';
        } elseif ($search == $jumlah_h) {

            $pertama = $search - 10;
            $terakhir = $jumlah_h;

            echo '<li class="prev"><a href="' . $PHP_SELF . '?search=' . $prev . '&haxor=' . $hacker . '"><i class="icon-double-angle-left"></i> Previous</a></li>';

            for ($i = $pertama; $i <= $terakhir; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                } else {
                    echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                }
            } //for bitim
        } elseif ($search > $jumlah_h - 5) {

            $pertama = $jumlah_h - 10;
            $terakhir = $jumlah_h;

            echo '<li class="prev"><a href="' . $PHP_SELF . '?search=' . $prev . '&haxor=' . $hacker . '"><i class="icon-double-angle-left"></i> Previous</a></li>';

            for ($i = $pertama; $i <= $terakhir; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                } else {
                    echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                }
            } //for bitim

            echo '<li class="next"><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></i></a></li>';
        } else {

            $pertama = $search - 5;
            $terakhir = $search + 5;

            echo '<li class="prev"><a href="' . $PHP_SELF . '?search=' . $prev . '&haxor=' . $hacker . '"><i class="icon-double-angle-left"></i> Previous</a></li>';

            for ($i = $pertama; $i <= $terakhir; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                } else {
                    echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li.';
                }
            } //for bitim

            echo '<li class="next"><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></i></a></li>';
        } // sayfa ilk son kontrol
    } else { // 10 dan büyük deðilse
        if ($jumlah_h > 1) {
            if ($search == 1) {

                for ($i = 1; $i <= $jumlah_h; $i++) {
                    if ($i == $search) {
                        echo '<li><a>' . $i . '</a></li>';
                    } else {
                        echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                    }
                } //for bitim

                echo '<li class="next"><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></i></a></li>';
            } elseif ($search == $jumlah_h) {

                echo '<a href="' . $PHP_SELF . '?search=' . $prev . '&haxor=' . $hacker . '"><i class="icon-double-angle-left"> Previous</i></a></li>';

                for ($i = 1; $i <= $jumlah_h; $i++) {
                    if ($i == $search) {
                        echo '<li><a>' . $i . '</a></li>';
                    }
                    else{
                        echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                    }
                } //for bitim
            } else {

                echo '<li><a href="' . $PHP_SELF . '?search=' . $prev. '&haxor=' . $hacker . '"><i class="icon-double-angle-left"> Previous</i></a></li>';

                for ($i = 1; $i <= $jumlah_h; $i++) {
                    if ($i == $search){
                        echo '<li><a>' . $i . '</a></li>';
                    }
                    else {
                        echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                    }
                } //for bitim

                echo '<li><a href="' . $PHP_SELF . '?search=' . $next . '&haxor=' . $hacker . '">Next <i class="icon-double-angle-right"></a></li>';
            } // sayfa ilk son kontrol
        } else { // tek sayfaysa
            for ($i = 1; $i <= $jumlah_h; $i++) {
                if ($i == $search) {
                    echo '<li><a>' . $i . '</a></li>';
                }
                else{
                    echo '<li><a href="' . $PHP_SELF . '?search=' . $i . '&haxor=' . $hacker . '">' . $i . '</a></li>';
                }
            } //for bitim
        } // 1 sayfadan büyük mü kontrolü
    } // 10 dan büyük kontrol

    return $search;
    return $nomor;
    return $jumlah_h;
    return $limit;
}

// sayfala fonksiyonu bitimi
?>