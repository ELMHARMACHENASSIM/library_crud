<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>create</title>
</head>

<body>
    <form action={{ route('books.store') }} method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">titre</label>
            <input type="text" name="titre" id="titre" required>
        </div>
        <div>
            <label for="">auteur</label>
            <input type="text" name="auteur" id="auteur" required>
        </div>
        <div>
            <label for="">résumé</label>
            <input type="text" name="resume" id="resume" required>
        </div>
        <div>
            <label for="">prix</label>
            <input type="number" name="prix" id="prix" required>
        </div>
        <div>
            <label for="">stock</label>
            <input type="number" name="stock" id="stock" required>
        </div>
        <div>
            <label for="">upload image</label>
            <input type="file" name="imageurl" id="imageurl" required>
        </div>
        <button type="submit">add book</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">titre</th>
                <th scope="col">auteur</th>
                <th scope="col">résumé</th>
                <th scope="col">image</th>
                <th scope="col">stock</th>
                <th scope="col">prix</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->titre }}</td>
                    <td>{{ $book->auteur }}</td>
                    <td>{{ $book->resume }}</td>
                    <td><img src="{{ asset('images/' . $book->imageurl) }}" alt="{{ $book->imageurl }}" width="50"></td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->prix }}</td>
                    <td>
                        @include('components.update')
                    </td>
                    <td>
                        <form action={{route('books.delete',$book->id)}}>
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

</body>

</html>
