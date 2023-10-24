 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "maximklava@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Отправьте пользователя на страницу "Спасибо" после отправки формы
    header("Location: thank_you.php");
}
?>
