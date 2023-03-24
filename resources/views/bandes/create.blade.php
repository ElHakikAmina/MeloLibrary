<section class="mb-4">
<x-app-layout>
   <h4 class="text-white text-center">Créer une nouvelle bande</h4>
    <div class="container mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-lg-6 ">
                <div class="card bg-black text-white">
                    <div class="card-body">
                        <form method="POST" action="{{ route('bandes.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" name="nom" class="form-control" id="nom">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>
                            <div class="form-group">
                                <label for="artistes">Bande:</label>
                                <select name="artistes[]" id="artistes" class="form-select" multiple>
                                    @foreach ($artistes as $artiste)
                                    <option value="{{ $artiste->id }}">{{ $artiste->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pays">Pays:</label>
                                <input type="text" name="pays" class="form-control" id="pays">
                            </div>
                            <div class="form-group">
                                <label for="date_creation">Date de création:</label>
                                <input type="date" name="date_creation" class="form-control" id="date_creation">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</section>