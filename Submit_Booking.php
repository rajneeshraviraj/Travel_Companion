<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $travelers = $_POST['travelers'];

    // Email address where the booking details will be sent
    $to = "aman9155635728@gmail.com";
    $subject = "New Booking: $destination";

    // Compose the message body
    $message = "New booking details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Destination: $destination\n";
    $message .= "Travel Date: $date\n";
    $message .= "Number of Travelers: $travelers\n";

    // Additional headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Booking submitted successfully. We will contact you shortly.');</script>";
    } else {
        echo "<script>alert('Failed to submit booking. Please try again later.');</script>";
    }
} else {
    // Redirect or handle invalid requests
    header("Location: index.html");
    exit();
}
?>
