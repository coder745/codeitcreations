<?php
//Code adopted from: http://www.rohitab.com/discuss/index.php?showtopic=19042
function agent($browser) {
$useragent = $_SERVER['HTTP_USER_AGENT'];
return strstr($useragent,$browser);
}

if(agent("Firefox") != FALSE) {
return true;
}
else if(agent("America Online Browser") != FALSE) {
exit('<div class="browserError">This web page does not support the AOL Browser. Why not to switch to standard-complaint brower, like 
<a href="http://www.mozilla.com/firefox/">Firefox</a></div>');
}
else if(agent("Opera") != FALSE) {
return true;
}
else if(agent("Safari") != FALSE) {
return true;
}
else if(agent("MSIE 6.0") != FALSE) {
exit('<div class="browserError">This browser is too old to suppport this site, please upgrade:
<a href="http://www.microsoft.com/Windows/internet-explorer/">Here</a></div>');
}
else if(agent("MSIE 5.5") != FALSE) {
exit('<div class="browserError">This browser is too old to suppport this site, please upgrade:
<a href="http://www.microsoft.com/Windows/internet-explorer/">Here</a></div>');
}
else if(agent("MSIE 7.0") != FALSE) {
return true;
}
else if(agent("MSIE 8.0") != FALSE) {
return true;
}
else {
return true;
}
?>