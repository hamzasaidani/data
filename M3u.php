<?php
$res = '';
$res = "#EXTINF:-1 tvg-id=\"" . $_GET[id] . "\" group-title=\"" . $_GET[group] . "\" tvg-logo=\"" . $_GET[logo] . "\"," . $_GET[title];
echo $res;
file_put_contents('free_playlist.m3u',$res,FILE_APPEND);
?>
