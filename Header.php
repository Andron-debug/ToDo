<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="Style.css" rel="stylesheet">
    <?php
        require("Sql.php");
        try
        {
            $db = new DateBase("localhost", "root", "", "task1");
        }
        catch (Exception $e)
        {
            echo $e -> getMessage();
        }
        session_start();
    ?>
</head>
<body>
