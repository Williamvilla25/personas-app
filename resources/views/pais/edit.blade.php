<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Country</title>
  </head>
  <body>
    <div class="container">
       <h1>Edit Country</h1>
       <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
       @method('put')
       @csrf
  <div class="mb-3">
    <label for="codigo" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id"
      disabled = "disabled" value="{{ $pais->pais_codi}}">
    <div id="codigoHelp" class="form-text">Country Id</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Country</label>
    <input type="text" required class="form-control" id="name" placeholder="Country name"
    name="name" value="{{ $pais->pais_nomb}}" >
  </div>
  <label for="capital">Capital:</label>
  <select class="form-select" id="capital" name="code" required>
  <option selected disabled value="">Chose one...</option>
  @foreach ($paises as $pais)
    <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb}}</option>
  @endforeach
</select>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
  </div>
</form> 
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>