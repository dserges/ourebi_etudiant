<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    @foreach($errors->all() as $message)
        <span>{{$message}}</span><br>
    @endforeach
<br>
    <form action="{{url('modifier-etudiant')}}" method="post">
        @csrf
        <input type="text" value="{{$etudiant->id}}" name="id" hidden>
        <input type="text" value="{{$etudiant->nom}}" name="nom" placeholder="Nom">
        <input type="text" value="{{$etudiant->prenom}}" name="prenom" placeholder="Prenom">
        <input type="text" value="{{$etudiant->filiere}}" name="filiere" placeholder="Filière">
        <input type="text" value="{{$etudiant->classe}}" name="classe" placeholder="Classe">
        <input type="submit" value="Modifier">
    </form>
</body>
</html>