<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de la page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('store') }}">
            {{-- <form action="/store" method="POST"> --}}
            @csrf       
            <h1>Ajouter un Article</h1>
            <div class="mb-3 border p-3">
                <label for="designation" class="form-label">Désignation:</label>
                <input type="text" class="form-control" id="designation" name="désignation">
            </div>
            <div class="mb-3 border p-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






{{-- <div class="container">
    <form method="POST" action="{{ route('store') }}">
        @csrf       
        <div class="form-group">
            <label>Désignation:</label>
            <input type="text" class="form-control" name="désignation">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" name="stock">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div> --}}







{{-- 
<div class="container">
    <form method="POST" action="{{ route('store') }}">
        @csrf   
        <div class="form-group">
            <label for="id">Identification:</label>
            <input type="text" class="form-control" name="id">
        </div>    
        <div class="form-group">
            <label>Désignation:</label>
            <input type="text" class="form-control" name="désignation">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" name="stock">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div> --}}