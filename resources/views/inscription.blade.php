<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<a href="/etudiants">Voir la liste</a>
    @foreach($errors->all() as $message)
        <span>{{$message}}</span><br>
    @endforeach
<br>
    <form action="{{ url('/inscription') }}" method="post">
        @csrf
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="filiere" placeholder="Filière">
        <input type="text" name="classe" placeholder="Classe">
        <input type="submit" value="Inscrire">
    </form>
</body>
</html>