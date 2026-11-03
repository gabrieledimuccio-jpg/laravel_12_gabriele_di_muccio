<x-layout>
    
    <main class="main-content mt-5 pt-5">
        <h1 class="text-center title mt-5 pt-2"><img class="img-custom" src="{{ asset('media/palm-tree.png') }}" alt="img palma stilizzata" srcset="">LE TUE PROSSIME METE</h1>
        
        
        <div class="d-flex flex-wrap justify-content-center gap-4">
            
            @forelse($articles as $article)
            
            <div class="article-card w-25 mb-3"> 
                <img src="{{ Str::contains($article->img, 'media/') ? asset($article->img) : Storage::url($article->img) }}" class="card-img-top" alt="img articolo">
                <div class="card-body">
                    
                    <h2>{{ $article->title }}</h2>
                    <h3>{{ $article->subtitle }}</h3>
                </div>
                <div class="card-footer">
                    <span class="time2">{{ $article->best_time }}</span>
                    <a href="{{ route('show', $article) }}" class="link-detail">Vedi Itinerario &rarr;</a>
                </div>
            </div>
            @empty
            <div class="text-muted fs-5 mt-5">
                <p>Non ci sono ancora destinazioni disponibili.</p>
            </div>
            @endforelse
            
        </div>
    </main>
</x-layout>