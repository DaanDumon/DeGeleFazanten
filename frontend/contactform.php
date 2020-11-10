<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name']
    $subject = $_POST['subject']
    $mailFrom = $_POST['mail']
    $message = $_POST['message']

    $mailTo = "gele.fazanten@outlook.be"
    $headers = "FROM: ".$mailFrom;
    $text = $name." send you an e-mail.\n\n".$message


    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");
}