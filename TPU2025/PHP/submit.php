<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $description = htmlspecialchars($_POST['description']);
    
    // Prepare data to be written into the text file
    $data = "Name: $name\nSubject: $subject\nDescription: $description\n\n";
    
    // Define the file path
    $file = './submissions.txt';

    // Open the file for appending
    $handle = fopen($file, 'a');
    
    // If the file is open successfully, write data and close
    if ($handle) {
        fwrite($handle, $data);
        fclose($handle);
        echo "Your submission was successful!";
    } else {
        echo "There was an error saving your submission.";
    }
}
?>
