<?php
  // echo $contact->send();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "noveliamegapuspita@gmail.com";

    $email_body = "Anda telah menerima pesan baru dari pengguna $name.\n" .
        "Berikut adalah pesannya:\n\n$message";

    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    // Kirim email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Pesan Anda telah berhasil dikirim.";
    } else {
        echo "Maaf, terjadi kesalahan dalam mengirim pesan.";
    }
} else {
    // Jika bukan metode POST, kembalikan status error
    http_response_code(403);
    echo "Ada masalah dengan permintaan Anda, silakan coba lagi.";
}

?>
