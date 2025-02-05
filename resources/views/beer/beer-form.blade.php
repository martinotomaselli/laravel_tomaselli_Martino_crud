<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Inserisci birra</h1>
            </div>
        </div>
        <!-- inserimento form -->
        <form method="POST" action="{{route("beer.Store")}}" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3 display-6 text-white">
                <label class="form-label">nome birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3 display-6 text-white">
                <label class="form-label">dimensione birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="cl">
            </div>
            <div class="mb-3 display-6 text-white">
                <label class="form-label">Nazionalità</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="naz">
            </div>
            <div class="mb-3 display-6 text-white">
                <label class="form-label">tipo di birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="type">
            </div>
            <!-- inserimento file input x le foto -->
            <div class="mb-3 display-6 text-white">
                <label for="formFile" class="form-label">Inserisci img</label>
                <input class="form-control" type="file" id="formFile" name="img"> 
            </div>
            <!-- inserimwnto textarea -->
            <div class="form-floating">
                <textarea name="descrizione" class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descrivi la birra</label>
            </div>
            <button type="submit" class="btn btn-primary">inserisci birra</button>
        </form>
    </div>

    <!-- "name", "type", "cl", "naz", "descrizione" -->
</x-layout>