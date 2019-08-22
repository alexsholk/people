<?php $env = $env ?? 'PROD' ?>
<head>
    <meta charset="UTF-8">
    <title>InToPeople</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link href="styles/css/index<?= $env == 'PROD' ? '.min' : '' ?>.css" rel="stylesheet">
</head>