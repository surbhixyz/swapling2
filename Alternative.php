<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $category = $_POST["Category"];
    $message = $_POST["Message"];
    
    // Open a file for writing and append the form data
    $file = fopen("form_data.txt", "a");
    fwrite($file, "Name: " . $name . "\n");
    fwrite($file, "E-mail: " . $email . "\n");
    fwrite($file, "Category: " . $category . "\n");
    fwrite($file, "Message: " . $message . "\n");
    fwrite($file, "\n"); // Add a newline at the end
    fclose($file);
}
?>
