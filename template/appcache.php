<?php
if(!defined('IN_KKFRAME')) exit();
$cache_hash = getSetting('file_hash');
if(!$cache_hash) saveSetting('file_hash', $cache_hash = random(16));
?>
CACHE MANIFEST
# Tieba Sign (<?php echo VERSION; ?>)
# Cache-ID: "<?php echo $cache_hash; ?>"
# Author: kookxiang ( www.ikk.me )
favicon.ico
style/background.jpg
style/checkmark.png
style/close.gif
style/delete.png
style/done.gif
style/error.gif
style/loading.gif
style/main.css?version=<?php echo VERSION; ?> 
style/member.png
style/msg_bg.png
style/retry.gif
style/triangle.mobile.png
style/triangle.png
style/warn.png
system/js/fwin.js?version=<?php echo VERSION; ?> 
system/js/main.js?version=<?php echo VERSION; ?> 
system/js/member.js?version=<?php echo VERSION; ?> 

NETWORK:
./
*
