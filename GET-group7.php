<?php
if ($_GET["page"] == "FAQ"){
    include("page-form496.php");
}
else if ($_GET["page"] == "kunjungan"){
    include("page-form468.php");
}
else if ($_GET["page"] == "peminjaman"){
    include("page-form490.php");
}
else {
    echo "Halaman tidak ditemukan.";
}
?>