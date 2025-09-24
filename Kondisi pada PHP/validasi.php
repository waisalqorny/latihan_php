<?php
$email_input = "waizzz@polije.ac.id"; // Coba hilangkan '@'

if (strpos($email_input, '@') !== false) {
    echo "Format email '$email_input' valid.";
} else {
    echo "Format email '$email_input' tidak valid.";
}
?>