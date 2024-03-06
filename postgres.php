<?php
$host = 'postgres';
$user = 'db_user';
$pass = 'db_password';
$db = 'test_database';

$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

if (!$conn) {
    die("Connection failed");
}

echo "Connected to PostgreSQL successfully";

// Your PHP code for PostgreSQL interactions goes here

$sql = "CREATE DATABASE blog";

if ($conn->query($sql) == TRUE)
{
    echo "Database created successfully\n";
} 
else 
{
    echo "Error creating database: " . $conn->error;
    echo "\n";
    
}

$sql = "CREATE TABLE IF NOT EXISTS posts (user_id SERIAL PRIMARY KEY, title varchar(255), content varchar(255));";

if ($conn->query($sql) == TRUE)
{
    echo "Table created successfully\n";
    echo "\n";
}
else 
{
    echo "Error creating table: " . $conn->error;
    echo "\n";
}


$sql = "INSERT INTO posts(title, content) VALUES('Hello World', 'This is a sample blog post')";

if ($conn->query($sql) == TRUE)
{
    echo "Data inserted successfully\n";
    echo "\n";
}
else 
{
    echo "Error inserting data: " . $conn->error;
    echo "\n";
}

$sql = "SELECT * FROM posts";
try{
    $statement = $conn->query($sql);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo $e->getMessage();
}

if ($result) {
	// show the publishers
	foreach ($result as $post) {
		echo $post['title'] . '<br>';
	}
}




$conn = null;
?>