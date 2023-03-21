<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'language.php'?>
    <?php
        if( !isset($_GET['language']) ){
            $language = 'fr';
        }else{
            $language = $_GET['language'];
        }
    ?>
</head>
<body>
    <h1><?=$lang['helloTitle'][$language]?></h1>
    <br>
    <form action="" method="get">
       English <input type="radio" name="language" value="en" id=""><br>
       French <input type="radio" name="language" value="fr" id=""><br>
       Kabyle  <input type="radio" name="language" value="kb" id=""><br>
        <input type="submit" value="<?=$lang['subbmitLangText'][$language]?>">
    </form>
</body>
</html>