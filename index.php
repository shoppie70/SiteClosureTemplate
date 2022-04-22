<?php
header("HTTP/1.0 410 Gone");
$site_title = 'Site Name';
$closed_date = date("Y年m月d日", strtotime('2022-04-22'));
?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, viewport-fit=cover" />
    <title>Webサイト閉鎖のお知らせ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-red-100">
        <div class="bg-white rounded-2xl border shadow-x1 p-10 max-w-lg w-full">
            <div class="flex flex-col items-center space-y-4">
                <h1 class="font-bold text-2xl text-gray-700 text-center">
                    Webサイト閉鎖のお知らせ
                </h1>
                <p class="text-sm text-gray-500 text-center">
                    誠に勝手ながら、<?php echo $site_title; ?>は<br>
                    <?php echo $closed_date; ?>をもちまして閉鎖いたしました。<br>
                    ご利用いただきまして誠にありがとうございました。
                </p>
                <small>
                    Copyright © <?php echo date('Y') . ' ' . $site_title; ?> .
                </small>
            </div>
        </div>
    </div>
</body>

</html>