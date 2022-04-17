<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

// if used with 'EOD' there will be no substitutions

$str = <<<'EOD'
CREATE TABLE `contacts` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `age` INT(3) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    PRIMARY KEY  (`id`)
  );
EOD;


// $stmt = $mysqli->prepare("INSERT INTO contacts (name,age,email) VALUES(?, ?, ?)");
// $stmt->bind_param("sis", $name, $age, $email);
// $stmt->execute();
// printf("New record has ID %d.\n", $mysqli->insert_id);

// $query = "SELECT Name, CountryCode, District FROM myCity";
// $result = $mysqli->query($query);
// while ($row = $result->fetch_row()) { // fetch_assoc
//     printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
// }
// $result->free();

/* close connection */
$mysqli->close();
?>