<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Les categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="p-6 bg-black border-b border-gray-200">
                        <a class="btn btn-success" href="{{ route('categories.create') }}">Ajouter une categorie</a>
                        <br /><br />
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    {{-- <th>#</th> --}}
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    {{-- <td>{{ $category->id }}</td> --}}
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td><img  src="/images/categories/{{ $category->image }}" style="width:70px;height:70px;border-radius: 50px;"></td>
                                    <td class="d-flex text-center" style="justify-content: center;">
                                        <a class="btn btn-primary" style="height: 38px;" href="{{ route('categories.edit', $category) }}">Modifier</a>
                                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
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