<!--
    setup page 
    https://qiita.com/naente_dev/items/d259ea84c172deeff7d8 
-->

<?php $test = 10; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Sample</title>
</head>

<body>
    <h2>Setup</h2>
    <ol>
        <li>
            create docker for php
        </li>
        <li>
            create fuel php folder in html folder
            curl https://get.fuelphp.com/oil | sh
            oil create <project name>
        </li>
        <li>
            docker-compose up
        </li>
    </ol>
    <h1>Links</h1>
    <ul>
        <li>
            <a href="http://localhost:4040">phpmyadmin</a>
        </li>
    </ul>
    <h2>Fuel Php</h2>
    <ul>
        <li>
            <a href="http://localhost:8080/sample_framework/public/">welcome</a>
        </li>
        <li>
            <a href="http://localhost:8080/sample_framework/public/index.php/welcome/index">welcome, long paths</a>
        </li>
        <li>
            <a href="http://localhost:8080/sample_framework/public/index.php/home/index">added view</a>
        </li>
    </ul>
    <h2>Fuel PHP Dev memo</h2>
    <p>開発時によく使うディレクトリ</p>
    <h3>sample_framework/fuel/app</h3>
    <ul>
        <li>sample_framework/fuel/app/classes/controller</li>
        <li>sample_framework/fuel/app/classes/model</li>
        <li>sample_framework/fuel/app/views</li>
        <li>sample_framework/fuel/app/logs</li>
    </ul>
    <h3>sample_framework/fuel/public</h3>
</body>

</html>