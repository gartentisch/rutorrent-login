<?php
// put your own auth scheme in here.
// $uname is guaranteed to be clean, $upass NOT!


function auth_ok($uname,$upass) {
   if ($uname == "user1" && $upass == "password")
    return true;
   if ($uname == "username" && crypt($upass,"salt") == "passwordhash")
    return true;


   return false;	

}
?>
