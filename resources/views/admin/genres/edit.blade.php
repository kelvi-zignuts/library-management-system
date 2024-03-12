<x-app-layout>
    <div class="container mt-4">
        <a href="{{ route('admin.books.index') }}" class="btn btn-primary"
            style="margin-left: 10px; margin-bottom: 10px;">Back</a>
    </div>
    <div class="container mt-4 d-flex justify-content-center align-items-center">
        <div class="card" style="width: 50%; margin-top: 20px;">
            <div class="card-header text-center">
                <h1 class="card-title">Edit Genre</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.genres.update', $genre->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="genre_name">Name</label>
                        <input type="text" class="form-control" id="genre_name" name="genre_name"
                            value="{{ $genre->genre_name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description"
                            name="description">{{ old('description', $genre->description) }}</textarea>
                    </div>
                    <button class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>