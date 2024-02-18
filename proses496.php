<?php
$pesan496 = $_GET['pesan'];
$bebas496 = $_GET['bebas'];
if (!empty($pesan496)) {
    $output = "Terima kasih atas pertanyaanmu: " . $pesan496;
} else {
    $output = "Pertanyaanmu sudah meluncur ke tim kami!";
}
$output .= "<br>tambahan: " . (!empty($bebas496) ? $bebas496 : 'Belum ada pertanyaan nih.');
echo $output;
?>

