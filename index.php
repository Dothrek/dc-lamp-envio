<?php

// Creating the connection with our database
$connect = mysqli_connect(
    'db',
    'lamp_docker',
    'password',
    'lamp_docker'
);

// Getting all the data we have inside the blog table
$query = 'SELECT * FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

// Listing all of our data
while($record = mysqli_fetch_assoc($result)) {
    echo '<h2>' . $record['title'] . '</h2>';
    echo '<p>' . $record['content'] . '</p>';
    echo 'Posted: ' . $record['date'];
    echo '<hr>';
};