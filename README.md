"# StrawberryLightning-Finals"

Team: Strawberry Lightning

Course: IT 311 Webtech / 2021

Description: A website wherein users can see the different convention events such as anime & manga, games, fandoms, and comics.

Members:
    BAYUBAY, Irish Erika
    CHAROPANG, Quina Mae
    MANALANG, Hanna
    MOTIC, Dhenny
    SANTOS, Christine Meg
    SALVADOR, Matt Wilfred

**IMPORTANT**

(This is integrated to MAMP version)
If you are using a WAMP (Windows, Apache, MySQL and PHP) server, it is required to remove the word root in both process.php and index.php.
- process.php
      ** remove the second root (password should be null) only

      from $conn = new mysqli('localhost', 'root', 'root', 'users');
      to $conn = new mysqli('localhost', 'root', '', 'users');

- index.php
    ** remove the root in the password only

      from  $host="localhost";
            $user="root";
            $password="root";
            $db="users";

      to    $host="localhost";
            $user="root";
            $password="";
            $db="users";
