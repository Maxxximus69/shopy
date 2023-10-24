<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="contact">
        <h1>Contact Us</h1>
        <p>Have a question or feedback for us? We'd love to hear from you. Please fill out the form below, and we'll get back to you as soon as possible.</p>

        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
