<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Toutes les musiques') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="p-6 bg-black border-b border-gray-200">
                        <a class="btn btn-success" href="{{ route('musics.create') }}">Ajouter une Musique</a>
                        <br /><br />
                       
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    {{-- <th>#</th> --}}
                                    <th>Title</th>
                                    <th>Artiste</th>
                                    <th>Ecrivain</th>
                                    <th>Langue</th>
                                    <th>Date_Sortie</th>
                                    <th>Duree</th>
                                    <th class="text-center">Image</th>
                                    
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($musicx as $mu)
                                <tr class="text-white">
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>{{ $mu->title }}</td>
                                    <td>{{ $mu->artiste }}</td>
                                    <td>{{ $mu->ecrivain }}</td>
                                    <td>{{ $mu->langue }}</td>
                                    <td>{{ $mu->date_sortie }}</td>
                                    <td>{{ $mu->durée }}</td>
                                    <td class="text-center"><img src="/images/music/{{ $mu->image }}" style="width:70px;height:70px;border-radius: 50px;"></td>
                                    <td class="d-flex text-center" style="justify-content: center;">
                                        <a class="btn btn-info" style="height: 38px;" href="{{ route('musics.edit', $mu) }}">Modifier</a>
                                        <form method="POST" action="{{ route('musics.destroy', $mu) }}">
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