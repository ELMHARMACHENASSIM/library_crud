<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$book->id}}">
    update
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$book->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel{{$book->id}}">update</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{route('books.update',$book->id)}} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">titre</label>
                  <input type="text" class="form-control" name="titre" value={{old('titre',$book->titre)}} id="titre" required>
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">auteur</label>
                  <input type="text" class="form-control" name="auteur" value={{old('auteur',$book->auteur)}} id="auteur" required>
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">résumé</label>
                    <input type="text" class="form-control" name="resume" value={{old('resume',$book->resume)}} id="resume" required>
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">stock</label>
                    <input type="number" class="form-control" name="stock" value={{old('stock',$book->stock)}} id="stock" required>
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">prix</label>
                    <input type="number" class="form-control" name="prix" value={{old('prix',$book->prix)}} id="prix" required>
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">upload image</label>
                    <input type="file" class="form-control" name="imageurl" id="imageurl" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>