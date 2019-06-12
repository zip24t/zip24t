<?php 
include('simple_html_dom.php');
$url = 'http://thethao.vnexpress.net/photo/hau-truong/hom-nay-hoang-xuan-vinh-ve-nuoc-nguyen-tien-minh-quyet-dau-lin-dan-3452035.html';
$html = file_get_html($url);
echo $html;
?>