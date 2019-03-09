<?php


echo '<head><title>Cookie Issuer.php</title></head>';
echo '<b>Hi,, I am The Cookie Issuer Page..</b><br>';

//setcookie('SubratPalhar92@gmail.com', 'Cookie Value', time() + 2592000, path, domain, secure, httponly);


echo '<pre>';
print_r($_COOKIE);
echo '</pre>';



//Cookie Path :: Upon sucess full login i can issue the cookie path as /
//But my default page : login.localhost.com
//after login the page will become localhost.com



//i want the cookie to be available only to the localhost.com and not to its sub-domain such as login.localhost.com








