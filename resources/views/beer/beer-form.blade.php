<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-danger">Inserisci birra</h1>
            </div>
        </div>
        <!-- inserimento form -->
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">nome birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">dimensione birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Nazionalità</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">tipo di birra</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
            </div>
                    <!-- inserimwnto textarea -->
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descrivi la birra</label>
            </div>
            <button type="submit" class="btn btn-primary">inserisci birra</button>
        </form>
    </div>


</x-layout>