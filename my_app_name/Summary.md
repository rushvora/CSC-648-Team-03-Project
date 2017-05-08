//This is a summary of how login is set
//http://miftyisbored.com/a-complete-login-and-authentication-application-tutorial-for-cakephp-2-3
User.php
We can accept a username, password, and role
add.ctp
Form for username, password, and role
//In the controller directory we will place login and logout.
//AuthComponent, a class responsible for requiring login for certain actions, handling user sign-in and sign-out, and also authorizing logged in users to the 
//actions they are allowed to reach.
AppController.php
will contain loginRedirect after the user has passed all the credentials. The same parameters
apply for logoutRedirect. authenticate will using blowfish provides encryption rate Blowfish has 
64-bit block size and a variable key length from 32 bits up to 448
UsersController.php

