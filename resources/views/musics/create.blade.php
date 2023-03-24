@yield('content')

<section class="mb-4">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                {{ __('Ajouter une Musique') }}
            </h2>
        </x-slot>
        <div class="container mt-5 ">
            <div class="row justify-content-center ">
                <div class="col-lg-6 ">
                    <div class="card bg-black text-white">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card-body">
                            <form method="POST" action="{{ route('musics.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Titre:</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image:</label>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Categorie:</label>
                                    <select name="category_id" class="form-select" placeholder="categorie">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="audio" class="form-label">Audio:</label>
                                    <input type="file" name="audio" class="form-control" id="audio" placeholder="audio">
                                </div>
                                <div class="form-group">
                                    <label for="artiste" class="form-label">Artiste ou Groupe:</label>
                                    <select name="artiste" class="form-select" id="artiste">
                                        <optgroup label="Artistes">
                                            @foreach ($artistes as $artiste)
                                            <option value="{{ $artiste->nom }}">{{ $artiste->nom }}</option>
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="Groupes">
                                            @foreach ($bandes as $bande)
                                            <option value="{{ $bande->nom }}">{{ $bande->nom }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ecrivain">Ecrivain:</label>
                                    <input type="text" name="ecrivain" class="form-control" id="ecrivain">
                                </div>
                                <div class="form-group">
                                    <label for="langue">Langue:</label>
                                    <input type="text" name="langue" class="form-control" id="langue">
                                </div>
                                <div class="form-group">
                                    <label for="date_sortie">Date de Sortie:</label>
                                    <input type="date" name="date_sortie" class="form-control" id="date_sortie">
                                </div>
                                <div class="form-group">
                                    <label for="durée">Durée:</label>
                                    <input type="text" name="durée" class="form-control" id="durée" step="60">
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