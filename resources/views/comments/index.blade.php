<section class="mb-4">

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('Les commentaires') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container">
                        <div class="p-6 bg-black border-b border-gray-200">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Effectue Le</th>
                                        <th>Nom User</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comments as $comment)
                                    <tr>
                                        {{-- <td>{{ ++$i }}</td> --}}
                                        <td>{{ $comment->body }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td>{{ $comment->user->name }}</td>
                                        <td class="d-flex text-center" style="justify-content: center;">
                                            {{-- <a class="btn btn-primary" style="height: 38px;" href="{{ route('comments.edit', $comment) }}">Update</a> --}}
                                            <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ms-3" onclick="return confirm('Are you sure?')">Supprimer</button>
                                            </form>
                                            @if($comment->status == 'pending')
                                            <form method="POST" action="{{ route('comments.update', $comment) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="approved">
                                                <button type="submit" class="btn btn-success ms-3" onclick="return confirm('Are you sure?')">Valider</button>
                                            </form>
                                            @endif
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