<?php 
include('simple_html_dom.php');
$url = 'http://thethao.vnexpress.net/photo/hau-truong/hom-nay-hoang-xuan-vinh-ve-nuoc-nguyen-tien-minh-quyet-dau-lin-dan-3452035.html';
$html = file_get_html($url);
$tieude = $html->find('.title_news',0);
$noidung = $html->find('#article_content',0);
?>
<h1><?=$tieude->plaintext?></h1>
<div id="content"><?=$noidung->innertext?></div>