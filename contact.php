<?php include 'includes/header.php'; ?>

<h2>Contact Us</h2>
<p>If you have any questions, suggestions, or want to get involved in our environmental initiatives, please feel free to contact us using the form below.</p>
<form action="contact.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your-email@example.com";
    $subject = "Contact Us Form Submission";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $email_headers)) {
        echo "<p>Thank you! Your message has been sent.</p>";
    } else {
        echo "<p>Oops! Something went wrong, and we couldn't send your message.</p>";
    }
}
?>

<?php include 'includes/footer.php'; ?>
