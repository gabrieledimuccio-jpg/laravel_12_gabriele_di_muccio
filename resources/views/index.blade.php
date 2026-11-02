<x-layout>
    
    <main class="main-content mt-5 pt-5">
        <h1 class="text-center title mt-5 pt-2"><img class="img-custom" src="{{ asset('media/palm-tree.png') }}" alt="img palma stilizzata" srcset="">LE TUE PROSSIME METE</h1>
        
        
        <div class="articles-grid d-flex justify-content-center">
            
            @forelse($articles as $article)
            
            <div class="article-card"> 
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
                <p>Non ci sono ancora ricette disponibili.</p>
            </div>
            @endforelse
            
        </div>
    </main>
</x-layout>