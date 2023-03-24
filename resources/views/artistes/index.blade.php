<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Artistes') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="p-6 bg-black border-b border-gray-200">
                        <a class="btn btn-success" href="{{ route('artistes.create') }}">Ajouter un artiste</a>
                        <br /><br />
                        <table class="table table-bordered">
                            <thead>
                                <tr >
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Image</th>
                                    <th>Pays</th>
                                    <th>Date de naissance</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($artistes as $artiste)
                                <tr class="text-white">
                                    <td>{{ $artiste->id }}</td>
                                    <td>{{ $artiste->nom }}</td>
                                    <td><img  src="/images/artistes/{{ $artiste->image }}" style="width:70px;height:70px;border-radius: 50px;"></td>
                                    <td>{{ $artiste->pays }}</td>
                                    <td>{{ $artiste->date_naissance }}</td>
                                    <td class="d-flex text-center" style="justify-content: center;">
                                        <a class="btn btn-primary" style="height: 38px;" href="{{ route('artistes.edit', $artiste) }}">Modifier</a>
                                        <form method="POST" action="{{ route('artistes.destroy', $artiste) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ms-3" onclick="return confirm('Are you sure?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</section>