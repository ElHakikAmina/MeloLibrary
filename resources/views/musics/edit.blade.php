<section class="mb-4">

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
                {{ __('Modifier la musique') }}
            </h2>
        </x-slot>

        <div class="container mt-3 col-md-5">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-black border-b text-white border-gray-200">
                            <form method="POST" action="{{ route('musics.update', $music) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" value="{{ $music->title }}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="{{ asset('/images/music/' . $music->image) }}" width="300px">
                                </div>
                                <div class="form-group">
                                    <label for="artiste" class="form-label">Artiste ou Groupe:</label>
                                    <select name="artiste" class="form-select" id="artiste">
                                        <optgroup label="Artistes">
                                            @foreach ($artistes as $artiste)
                                            <option value="{{ $artiste->nom }}" {{ $artiste->id == $selectedArtist ? 'selected' : '' }}>
                                                {{ $artiste->nom }}
                                            </option>
                                            @endforeach
                                        </optgroup>
                                        <optgroup label="Groupes">
                                            @foreach ($bandes as $bande)
                                            <option value="{{ $bande->nom }}" {{ $bande->id == $selectedArtist ? 'selected' : '' }}>
                                                {{ $bande->nom }}
                                            </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                    <input type="hidden" name="artiste_id" value="{{ $selectedArtist }}">
                                </div>

                                <div class="mb-3">
                                    <label for="audio" class="form-label">Audio:</label>
                                    <input type="file" name="audio" class="form-control" id="audio" placeholder="audio">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="artiste">Artiste:</label>
                                    <input type="text" name="artiste" value="{{ $music->artiste }}" class="form-control" />
                                </div> --}}
                                <div class="form-group">
                                    <label for="image">Ecrivain:</label>
                                    <input type="text" name="ecrivain" value="{{ $music->ecrivain }}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="image">Langue:</label>
                                    <input type="text" name="langue" value="{{ $music->langue }}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="image">Date de Sortie:</label>
                                    <input type="text" name="date_sortie" value="{{ $music->date_sortie }}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="image">Durée:</label>
                                    <input type="text" name="durée" value="{{ $music->durée }}" class="form-control" />
                                </div>
                                <br>
                                <button type="submit" class="btn btn-info">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

</section>