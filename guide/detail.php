<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "base.php";
    $objresto=new MyTable("restaurant");

    $data=["la tavola",1, "rue des mimosa Aix-en-Provence 13100", 50, "Restaurant Fabulous, addition sulfureuse", 9.9, "2021-08-15"];
    $objresto->modifierOccurence(2,$data);
?>
</body>
</html>