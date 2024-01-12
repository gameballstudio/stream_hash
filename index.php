<?php

/**
 * @file PHP File Transfer Module of TAW Framework
 * @author David Trinh <namtt@gbcluster.com>
 * @version 1.0
 */


?>

</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Image Data Encription & Decription Transmition Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="taw.css" />
    <script src="taw-min.js"></script>
</head>
<body onload="init()">
    <div class="intro">Click on image to proceed</div>
    <hr />
    <table class="table_image_choice">
        <tr class="image_tr">
            <td class="image_td">
                <img id='img1' class="image_pick" src="" onclick="img1_click(img1_data)" />
            </td>
            <td class="image_td">
                <img id='img2' class="image_pick" src="" onclick="img2_click(img2_data)" />
            </td>
            <td class="image_td">
                <img id='img3' class="image_pick" src="" onclick="img3_click(img3_data)" />
            </td>
            <td class="image_td">
                <img id='img4' class="image_pick" src="" onclick="img4_click(img4_data)" />
            </td>
        </tr>
    </table>
    <hr />
    <div class="intro">DATA URI BASE64 VALUE</div>
        <textarea id='uri' class="text_value" placeholder="This is data base64 of the selected image" disabled></textarea>
    <hr />

    <div class="intro">ENCRIPTED VALUE</div>
        <textarea id='en_mess' class="text_value" placeholder="This is the encripted value of the selected image" disabled></textarea>
    <hr />
    <div class="intro">DECRIPTED RESULT</div>
        <textarea id='de_mess' class="text_value" placeholder="This is the decripted value after decripting" disabled></textarea>
        <center>
            <img id='original' class="image_result" src="" />
            <img id='arrow' class="image_result" src="" />
            <img id='result' class="image_result" src="" />
        </center>
    <hr />

    <?php include_once('logo.php'); ?>
</body>
</html>