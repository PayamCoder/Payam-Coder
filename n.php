<?php
// مسیر فایل متنی که می‌خواهید بخوانید
$filePath = 'مسیر_فایل.txt';

// ابتدا بررسی می‌کنیم که فایل وجود دارد یا نه
if (file_exists($filePath)) {
    // خواندن متن از فایل به عنوان یک رشته
    $text = file_get_contents($filePath);

    // تبدیل متن به یک آرایه از خطوط
    $lines = explode("\n", $text);

    // حلقه برای نمایش هر خط در لیست
    foreach ($lines as $line) {
        echo $line . '<br>';
    }
} else {
    echo 'فایل مورد نظر وجود ندارد.';
}
?>
