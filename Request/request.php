<?php
require('msAuth.php');

$Auth = new msAuth('YWRtaW5AbWFuZ28g0LvQsNCy0LrQsDoxN2M2ZjY1NGU4', 'https://online.moysklad.ru/api/remap/1.1/entity/product');
$curlOpt = $Auth->setCurlOpt();
?>
<pre>
    <?
    print_r($Auth->getRequest($curlOpt));
    ?>
</pre>
