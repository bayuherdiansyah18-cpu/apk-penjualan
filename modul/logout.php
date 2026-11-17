<?php
//untuk memulai atau melanjutkan sesi sebelumnya
session_start();
//kosongkan demua data session
session_unset();
//hancurkan  session yang tersimpan di server
session_destroy();

//arahkan kembali pengguna ke halaman form login
header("Location:login.php");
exit;
?>