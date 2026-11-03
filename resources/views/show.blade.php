<x-layout>
    <div class="container-fluid">
        <div class="row mt-5">
            <h2 class="mt-5 pt-3 text-center">Itinerario per: {{ $article->title }}</h2>
            <div class="col-12 d-flex justify-content-center mt-1 pt-5">
                <div class="article-card w-50 mb-3"> 
                    <img src="{{ Str::contains($article->img, 'media/') ? asset($article->img) : Storage::url($article->img) }}" class="card-img-top" alt="img articolo">
                    <div class="card-body">
                        
                    <p>{{ $article->description}}</p>
                </div>
                <div class="card-footer">
                    <span class="time2">Stagione migliore: {{ $article->best_time }}</span>
                     <div class="d-flex gap-2 align-items-center" >

                    <a href="{{ route('edit', $article) }}" class="btn btn-edit-custom">✏️ Modifica</a>

                    <form action="{{ route('destroy', $article) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa ricetta?')">🗑️ Elimina</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-layout>