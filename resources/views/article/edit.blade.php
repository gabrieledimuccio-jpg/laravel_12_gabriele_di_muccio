<x-layout>
    <main class="main-content mt-5 pt-3">
        <div class="form-container mt-5 pt-3 d-flex flex-column align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 d-flex flex-column align-items-center">
                        <div class="article-card card-create" >
                            <img src="{{ asset('/media/benjamin-chambon-zO0le9E7Ono-unsplash.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Dolomiti, Italia</h2>
                                <h6>I sentieri più belli</h6>
                                <div class="card-footer">
                                    <span class="time2">Estate</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-card  card-create-1">
                            <img src="{{ asset('/media/dawid-tkocz-MQfDZmBkLe8-unsplash.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Dubai</h2>
                                <h6>Tra grattaceli e innovazione </h6>
                                <div class="card-footer">
                                    <span class="time2">Primavera</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-4">    
                        <h2 class="text-center">Modifica destinazione</h2>  
                        <form action="{{ route('update', $article) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="img" class="form-label">Inserisci immagine</label>
                                <input name="img" type="file" class="form-control d-flex me-3" id="img" required>
                            </div>
                            <div class="mb-3">
                                <span class="form-label">Immagine attuale:</span>
                                <img src="{{ Storage::url($article->img) }}" alt="{{ $article->title }}" width="400" height="200" srcset="">
                            </div>
                            <div class="form-group">
                                <label for="title">Meta</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Londra" value="{{ old('title', $article->title) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="subtitle">Sottotitolo</label>
                                <textarea id="subtitle" name="subtitle" class="form-control" rows="3" placeholder="Patria del fish & chips" required>{{ old('subtitle', $article->subtitle) }}</textarea>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="best_time">Best time</label>
                                    <input type="text" id="best_time" name="best_time" class="form-control" placeholder="Inverno" value="{{ old('best_time', $article->best_time) }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="description">Itinerario</label>
                                <textarea id="description" name="description" class="form-control" rows="3" placeholder="Patria del fish & chips" required>{{ old('description', $article->description) }}</textarea>
                            </div>         
                            
                            <div class="mb-3 mt-2 d-flex flex-wrap justify-content-start">
                                @foreach($tags as $tag)
                                <div class="form-check">
                                    <input class="form-check-input" name="tags[]" type="checkbox" value="{{ $tag->id }}" id="checkDefault"
                                    @if($article->tags->contains($tag)) checked @endif>
                                    <label class="form-check-label me-5" for="checkDefault">
                                        {{ $tag->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="form-actions mt-3">
                                <a href="{{ route('show', $article) }}" class="btn btn-secondary">Annulla</a>
                                <button type="submit" class="btn btn-primary">Aggiorna Articolo</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center">
                        <div class="article-card card-create-1">
                            <img src="{{ asset('/media/mesut-kaya-eOcyhe5-9sQ-unsplash.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Cappadocia, Turchia</h2>
                                <h6>Mongolfiere e paesaggi mozzafiato</h6>
                                <div class="card-footer">
                                    <span class="time2">Primavera/Estate</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-card  card-create">
                            <img src="{{ asset('/media/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>Braies, Italia</h2>
                                <h6>Laghi e tramonti magici.</h6>
                                <div class="card-footer">
                                    <span class="time2">Primavera/Estate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </x-layout>
    