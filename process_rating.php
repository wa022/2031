<?php
// المسار إلى ملف النص الذي سيستخدم لتخزين التقييمات
$ratingsFile = "https://wa022.github.io/2031/ratings.txt";

// تحقق مما إذا كانت البيانات مرسلة بطريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تحقق من وجود البيانات المطلوبة
    if (isset($_POST["rating"])) {
        // احصل على قيمة التقييم من النموذج
        $rating = $_POST["rating"];

        // فتح ملف النص بنمط الإلحاق لإضافة التقييم الجديد
        $file = fopen($ratingsFile, "a");
        if ($file) {
            // إضافة التقييم الجديد إلى نهاية الملف
            fwrite($file, $rating . PHP_EOL);
            fclose($file);
            echo "تم تسجيل التقييم بنجاح!";
        } else {
            echo "حدث خطأ أثناء فتح ملف التقييمات.";
        }
    } else {
        echo "خطأ: لم يتم إرسال قيمة التقييم.";
    }
} else {
    echo "خطأ: الوصول غير مصرح به.";
}
?>
