<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "levi@123";
$dbname = "krishadb"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all records from the students table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Initialize an array to hold the result set
$students = array();

if ($result->num_rows > 0) {
    // Fetch all records and store them in the $students array
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();

// Function to determine if an array is associative
function isAssociativeArray($array) {
    if (array() === $array) return false;
    return array_keys($array) !== range(0, count($array) - 1);
}

// Function to determine if an array is multidimensional
function isMultidimensionalArray($array) {
    if (is_array($array)) {
        foreach ($array as $element) {
            if (is_array($element)) {
                return true;
            }
        }
    }
    return false;
}

// Determine if the $students array is associative or multidimensional
if (isAssociativeArray($students)) {
    echo "The array is associative.";
} elseif (isMultidimensionalArray($students)) {
    echo "The array is multidimensional.";
} else {
    echo "The array is neither associative nor multidimensional.";
}

// Output the $students array for debugging purposes
echo "<pre>";
print_r($students);
echo "</pre>";
?>
