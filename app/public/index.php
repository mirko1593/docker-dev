<pre><?php

echo "Hostname of redis can be found:" . gethostbyname('redis') . "\n";

$hostname = 'mysql';
$dbname = 'fnworks';
$user = 'deployer';
$password = 'password';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connecting to database at hostname 'mysql': " . gethostbyname('mysql') . "\n";
} catch (Exception $e) {
    echo $e->getMessage();
}

?></pre>
