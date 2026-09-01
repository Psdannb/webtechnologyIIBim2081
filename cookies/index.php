<?php
/*
A cookie is a small text file that is stored in the user's browser. Cookies are used to store information that can be retrieved later, making them ideal for scenarios where you need to remember user preferences, such as:
    1. User login status (keeping users logged in between sessions)
    2.Language preferences
    3.Shopping cart contents
    4. Tracking user activity for analytics purposes

Cookies in PHP are created using the setcookie() function. When a cookie is set, the data is stored in the user’s browser and sent to the server with each subsequent request made by the browser.

syntax: setcookie(name, value, expire, path, domain, security);
where: 
Name: It is used to set the name of the cookie.
Value: It is used to set the value of the cookie.
Expire: It is used to set the expiry timestamp of the cookie, after which the cookie can't be accessed.
Path: It is used to specify the path on the server for which the cookie will be available
Domain: It is used to specify the domain for which the cookie is available.
Security: It indicates that the cookie should be sent only if a secure HTTPS connection exists.

#**** How Do Cookies Work? **#
Cookies work in the following ways:

Setting Cookies: A cookie is set using the setcookie() function in PHP. The cookie data is stored on the user’s browser and sent along with each HTTP request to the server.


Reading Cookies: Once a cookie is set, it can be accessed using the $_COOKIE superglobal array. This allows you to retrieve cookie values that were set on the user’s browser.

Expiration of Cookies: Cookies can be set to expire after a certain period. When a cookie expires, it is automatically deleted by the browser. Cookies can also be manually deleted by calling the setcookie() function with a past expiration date.

Sending Cookies to the Browser: Cookies are sent to the browser as HTTP headers. Since HTTP headers must be sent before any actual content (HTML, etc.), setcookie() must be called before any output is sent to the browser.

#*** How to Use Cookies in PHP? **#
1. Creating Cookies
example:   setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
This will Create a cookie named Auction_Item and assign the value Luxury Car to it. The cookie will expire after 2 days(2 days * 24 hours * 60 mins * 60 seconds)


2.Checking Whether a Cookie Is Set Or Not
It is always advisable to check whether a cookie is set or not before accessing its value. Therefore, to check whether a cookie is set or not, the PHP isset() function is used. To check whether a cookie "Auction_Item" is set or not, the isset() function is executed as follows:


      if (isset($_COOKIE["Auction_Item"]))
    {
        echo "Auction Item is a  " . $_COOKIE["Auction_Item"];
    }
    else
    {
        echo "No items for auction.";
    }


3.Accessing Cookie Values
For accessing a cookie value, the PHP $_COOKIE superglobal variable is used. It is an associative array that contains a record of all the cookies values sent by the browser in the current request. The records are stored as a list where the cookie name is used as the key. To access a cookie named "Auction_Item", the following code can be executed.
 echo "Auction Item is a  " . $_COOKIE["Auction_Item"];

 4. Deleting Cookies
 The setcookie() function can be used to delete a cookie. For deleting a cookie, the setcookie() function is called by passing the cookie name and other arguments or empty strings, however, this time, the expiration date is required to be set in the past. To delete a cookie named "Auction_Item", the following code can be executed.

 setcookie("Auction_Item", "", time() - 60); 

 


*/

?>