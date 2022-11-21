/*
*
* Veritabanı bağlantısı için
* gerekli bağlantı bilgilerinin
* bulunduğu ayar dosyası.
*
*/

session_start();
ob_start();


header('Content-Type: text/html; Charset=UTF-8');
date_default_timezone_set('Europe/Istanbul');

define('MYSQL_HOST',	'localhost');
define('MYSQL_DB',		'profiyol');
define('MYSQL_USER',	'root');
define('MYSQL_PASS',	'');

include 'db.php';

//SQL baglanti
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "profiyol";

 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
 mysqli_set_charset($conn, "utf8mb4");

 if (!$conn) {
    die("baglanti hatasi" . mysqli_connect_error());
}

//PDO baglanti
$host 		= "localhost";
$dbname 	= "profiyol";
$charset 	= "utf8";
$root 		= "root";
$password 	= "";


	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
