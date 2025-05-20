<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">
      <h1>Edit Country</h1>

      <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="pais_codi" class="form-label">Code</label>
          <input type="text" class="form-control" id="pais_codi" value="{{ $pais->pais_codi }}" disabled>
        </div>

        <div class="mb-3">
          <label for="pais_nomb" class="form-label">Country Name</label>
          <input type="text" class="form-control" id="pais_nomb" name="pais_nomb" value="{{ $pais->pais_nomb }}" required>
        </div>

        <div class="mb-3">
          <label for="pais_capi" class="form-label">Capital</label>
          <input type="text" class="form-control" id="pais_capi" name="pais_capi" value="{{ $pais->pais_capi }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>