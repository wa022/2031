<?php
// تحقق مما إذا كانت البيانات مرسلة بطريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تحقق من وجود البيانات المطلوبة
    if (isset($_POST["rating"])) {
        // احصل على قيمة التقييم من النموذج
        $rating = $_POST["rating"];

        // هنا يمكنك القيام بأي شيء تريده مع قيمة التقييم، مثل حفظها في قاعدة بيانات أو معالجتها بشكل آخر
        // في هذا المثال، سنقوم بطباعة القيمة فقط
        echo "تم استلام التقييم بنجاح. التقييم: " . $rating;
    } else {
        echo "خطأ: لم يتم إرسال قيمة التقييم.";
    }
} else {
    // إذا تم الوصول إلى هذه الصفحة بدون إرسال بيانات، يمكنك توجيه المستخدم إلى صفحة أخرى مثلاً.
    echo "خطأ: الوصول غير مصرح به.";
}
?>
