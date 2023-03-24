<section class="mb-4">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier la catégorie') }}
        </h2>
    </x-slot>

    <div class="container mt-3 col-md-5">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-black text-white border-b border-gray-200">
                        <form method="POST" action="{{ route('categories.update', $category) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="image">Nom:</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="image">Description:</label>
                                <input type="text" name="description" value="{{ $category->description }}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <br>
                                <img src="/images/categories/{{ $category->image }}" width="300px">
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