<?php
// Define the file name
$filename = 'visitor_info.txt';

// Gather visitor information
$ip_address = $_SERVER['REMOTE_ADDR']; // Visitor's IP address
$user_agent = $_SERVER['HTTP_USER_AGENT']; // Visitor's browser and OS
$request_uri = $_SERVER['REQUEST_URI']; // The URI the visitor accessed
$timestamp = date('Y-m-d H:i:s'); // Current date and time

// Prepare the string to be written to the file
$log_entry = "IP Address: $ip_address\nUser Agent: $user_agent\nRequest URI: $request_uri\nTimestamp: $timestamp\n\n";

// Check if the file exists, if not, create it
if (!file_exists($filename)) {
    $file = fopen($filename, 'w'); // Create the file
} else {
    $file = fopen($filename, 'a'); // Open the file in append mode
}

// Write the log entry to the file
fwrite($file, $log_entry);

// Close the file
fclose($file);
?>
