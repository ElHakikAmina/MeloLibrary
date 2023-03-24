<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Bandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="p-6 bg-black  border-b border-gray-200">
                        <a class="btn btn-success" href="{{ route('bandes.create') }}">Ajouter une bande</a>
                        <br /><br />
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Image</th>
                                    <th>Pays</th>
                                    <th>Membres</th>
                                    <th>Date de création</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bandes as $bande)
                                <tr>
                                    <td>{{ $bande->nom }}</td>
                                    <td><img  src="images/bandes/{{ $bande->image }}" style="width:70px;height:70px;border-radius: 50px;"></td>
                                    <td>{{ $bande->pays }}</td>
                                    <td>2</td>
                                    <td>{{ $bande->date_creation }}</td>
                                    <td class="d-flex text-center" style="justify-content: center;">
                                        <a class="btn btn-primary" style="height: 38px;" href="{{ route('bandes.edit', $bande) }}">Update</a>
                                        <form method="POST" action="{{ route('bandes.destroy', $bande) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ms-3" onclick="return confirm('Are you sure?')">Delete</button>
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