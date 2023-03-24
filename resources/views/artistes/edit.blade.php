<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artiste Edit') }}
        </h2>
    </x-slot>

    <div class="container mt-3 col-md-5">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-black text-white border-b border-gray-200">
                        <form method="POST" action="{{ route('artistes.update', $artiste) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom Complet:</label>
                                <input type="text" name="nom" value="{{ $artiste->nom }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="pays">Pays:</label>
                                <input type="text" name="pays" value="{{ $artiste->pays }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="date_naissance">Date de naissance:</label>
                                <input type="text" name="date_naissance" value="{{ $artiste->date_naissance }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <br>
                                <img src="/images/artistes/{{ $artiste->image }}" width="200px">
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