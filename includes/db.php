<?php
/* Porfolio sida skapad av Samuel Gjekic
 * 
 */
define('hostname', 'localhost');
define('username','bredfyco_testdb');
define('password','Hejdar0132');
define('dbname','bredfyco_testdb');

// Anslut till databas med hjälp av mySqli. Jag har även erfarenhet med PDO men valde att ta denna approach. 
try {
    $db = mysqli_connect(hostname,username,password,dbname);
    $db->set_charset("utf8");

} catch (\Safe\Exceptions\MysqliException $e) 
{
    // Vid fel avsluta script
    die('Anslutningen misslyckades: ' . $e->getMessage());
}
