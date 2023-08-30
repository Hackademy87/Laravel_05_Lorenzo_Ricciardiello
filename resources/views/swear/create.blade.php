<!-- $table->string('name');
$table->string('gender');
$table->string('category');
$table->float('price');
$table->text('description');
$table->string('img'); -->
<x-layout>

<x-slot name='title'>card</x-slot>








<div class="container">
<h2 class="my-4">Inserisci il nuovo prodotto</h2>
<div class="row">
<form action="{{route('vestiti.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="d-flex justify-content-between">
<div class="col-12 col-md-6">
<div class="mb-3 mx-5">
<label class="form-label">Nome</label>
<input type="text" class="form-control" name="name" >
</div>
<div class="mb-3 mx-5">
<label class="form-label">Genere</label>
<input type="text" class="form-control" name="gender" >
</div>
<div class="mb-3 mx-5">
<label class="form-label">Categoria</label>
<input type="text" class="form-control" name="category" >
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="mb-3 mx-5">
<label class="form-label">Prezzo</label>
<input type="numeric" class="form-control" name="price" >
</div>
<div class="mb-3 mx-5">
<label class="form-label">Immagine</label>
<input type="file" class="form-control" name="img" >
</div>
</div>
</div>
<div class="mb-3">
<label class="form-label">Descrizione</label>
<textarea class="form-control" name="description" cols="30" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-primary">Invia</button>
</form>
</div>
</div>



</x-layout>