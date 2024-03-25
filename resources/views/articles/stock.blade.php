<!-- resources/views/articles/stock.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Modifier le stock</h1>
        <form action="/modifierArticle" method="POST">
            @csrf
            <div class="mb-3">
                <label for="article" class="form-label">Article:</label>
                <select name="article" id="article" class="form-select">
                    @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->désignation }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Type:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="type_entree" value="entrée" checked>
                    <label class="form-check-label" for="type_entree">Entrée</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="type_sortie" value="sortie">
                    <label class="form-check-label" for="type_sortie">Sortie</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité:</label>
                <input type="number" name="quantite" id="quantite" class="form-control" value="10" required>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





     {{-- <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-select" required>
                    <option value="entrée">Entrée</option>
                    <option value="sortie">Sortie</option>
                </select>
            </div> --}}








    {{-- <form action="{{ route('articles.modifierStock') }}" method="post"> --}}
{{-- <div class="container">
    <h1>Modifier le Stock</h1>
    
        <form action="/modifierArticle" method="POST">
        
        @csrf
        <div class="form-group">
            <label for="article">Article:</label>
            <select name="article" id="article" class="form-control">
                @foreach($articles as $article)
                <option value="{{ $article->id }}">{{ $article->désignation }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control">
                <option value="entrée">Entrée</option>
                <option value="sortie">Sortie</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantité">Quantité:</label>
            <input type="number" name="quantité" id="quantité" class="form-control" value="10">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div> --}}







{{-- <div class="container">
    <h1>Modifier le stock</h1>
    <form action="/modifierArticle" method="POST">
            @csrf
    <div class="form-group">
        <label for="article">Article:</label>
        <select name="article" id="article" class="form-control">
            @foreach($articles as $article)
            <option value="{{ $article->id }}">{{ $article->désignation }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label>Type</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type_entree" value="entrée" checked>
                <label class="form-check-label" for="type_entree">Entrée</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="type_sortie" value="sortie">
                <label class="form-check-label" for="type_sortie">Sortie</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité</label>
            <input type="number" name="quantite" id="quantite" class="form-control" value="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div> --}}