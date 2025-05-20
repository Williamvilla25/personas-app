<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Commune</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">
      <h1>Edit Commune</h1>

      <form method="POST" action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" value="{{ $comuna->comu_codi }}" disabled>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Commune Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $comuna->comu_nomb }}" required>
        </div>

        <div class="mb-3">
          <label for="code" class="form-label">Municipality</label>
          <select class="form-select" id="code" name="code" required>
            <option disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio)
              <option value="{{ $municipio->muni_codi }}" {{ $comuna->muni_codi == $municipio->muni_codi ? 'selected' : '' }}>
                {{ $municipio->muni_nomb }}
              </option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('comunas.index') }}" class="btn btn-warning">Cancel</a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>