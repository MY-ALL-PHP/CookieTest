<?php

// /home/subrat/Desktop/SubrattarbuS/Work/CookieTester/SubCookie/index.php
setcookie('SubratPalhar92@gmail.com', 'Cookie Value', time() + 2592000, './sublogin/twosublogin'); //, path, domain, secure, httponly


/*

how about if we issue the cookies In the innermost {Somewhere in the middle of the folder} we will place our login credentials and we will serve our host like below ::

> Each "parent-folder" will prepend the "path-name" perior to the hostname, and all subinner folders will be appended with the URL

--root
    |
    |--|
    |  |--var
    |       |--www
    |           |--html
    |               |
    |               |--MyProject
    |               |
    |               |--www.login.google.com
    |                               |--SubInnerDir
    |                                       |--SubSubInnerDir
    |
    |

After login with  [login.google.com] my next host address will be   [MyProject.google.com]  & the subsequent host will be   [html.MyProject.google.com]
--So the benifit will be when i will issue the cookie for www.login.google.com
in that way the cookie will be available to the same host -www.login.google.com- and other child hosts such as -MyProject.google.com- & -html.MyProject.google.com-
:: The Benifit will be if the login Directory have the acess to the cookie, then it will redirect the user according to the requested url {{{Which is purely based on host}}}

--Where as the --SubInnerDir-- && --SubSubinnerDir-- will be appended to the hostname as below::
>> SubInnerDir Will be available @ wwww.login.google.com/SubInnerDir
>> SubSubInnnerDir will be avaiable @ www.login.google.com/SubinnerDir/SubSubInnerDir



Make the configuration like this :
the aim is the create   the virtual host like this...




*/



echo '<head><title> Login :: </title></head>';

echo '<b>hi,, I am the login page i am forwarded by the Front controller index page    i will set the cookie to the location : ../SubCookie</b><br>';



echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

