<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">
                    Catalogo Birre
                </h1>
               @foreach($beers as $beer)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{Storage::url("$beer->img")}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$beer->name}}</h5>
                                <p class="card-text">{{$beer->cl}}</p>
                                <p class="card-text">{{$beer->type}}</p>
                                <p class="card-text">{{$beer->naz}}</p>
                                <p class="card-text">{{$beer->descrizione}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>