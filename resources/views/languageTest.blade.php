<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/languageTest" method="post">
        @csrf
        <select name="lang" id="">
            <option value="en">English</option>
            <option value="fr">Français</option>
        </select>
        <input type="submit" value="OK">
    </form>
    <p>Texte Statique</p>
    <h1>bonjour</h1>
    <p>Texte dynamique :D !</p>
    <h1> {{__('msg.bonjour')}} </h1>
</body>
</html>