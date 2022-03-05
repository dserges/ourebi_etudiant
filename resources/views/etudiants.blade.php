<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Ajouter un etudiant</a>
    <table border="1">
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Filiere</th>
        <th>Classe</th>
        <th>Action</th>
        </tr>
        @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->filiere }}</td>
                <td>{{ $etudiant->classe }}</td>
                <td> 
                    <a href="{{url('modifier-etudiant')}}/{{$etudiant->id}}">Modifier</a>
                    <a href="{{url('supprimer-etudiant')}}/{{$etudiant->id}}">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>