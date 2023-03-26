<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $business_name = $_POST["business_name"];
    $state = $_POST["state"];
    $phone_number = $_POST["phone_number"];

    // Open a file for writing and append the form data
    $file = fopen("form_data.txt", "a");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Business Name: " . $business_name . "\n");
    fwrite($file, "State: " . $state . "\n");
    fwrite($file, "Phone Number: " . $phone_number . "\n");
    fwrite($file, "\n"); // Add a newline at the end
    fclose($file);
}
?>
