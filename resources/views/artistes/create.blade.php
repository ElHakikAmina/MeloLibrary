<section class="mb-4">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Artiste') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('artistes.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom Complet:</label>
                                <input type="text" name="nom" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Pays:</label>
                                <input type="text" name="pays" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Date de naissance:</label>
                                <input type="text" name="date_naissance" class="form-control" id="description">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
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