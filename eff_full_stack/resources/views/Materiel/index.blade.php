<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste du matériel</title>
    </head>
    <body>
    <h1>Liste du matériel</h1>
    <button>
    <a href='{{ route('Materiel.create') }}'>Ajouter un nouveau matériel</a>
    </button>
    <br><br>
    <table>
    <thead>
    <tr>
    <th>Code</th>
    <th>Marque</th>
    <th>Catégorie</th>
    <th>Date début d'utilisation</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($listMat as $materiel) 
    <tr>
    <td>{{ $materiel->codeMat }}</td>
    <td>{{ $materiel->marque }}</td>
    <td>{{ $materiel->categorie }}</td>
    <td>{{ $materiel->dateDebutUtilisation->format('Y-m-d')}}</td>
    <td>
    <form method="POST" action="{{ route('Materile.supprimer', $materiel->codeMat) }}">
    @csrf
    @method('DELETE') 
    <button type="submit">Supprimer</button></form></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </body>
</html>
