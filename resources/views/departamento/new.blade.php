<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">
      <h1>Add Department</h1>

      <form method="POST" action="{{ route('departamentos.store') }}">
        @csrf

        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" disabled placeholder="Auto-generated">
          <div class="form-text">The code is assigned automatically.</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Department Name</label>
          <input type="text" required class="form-control" id="name" name="name" placeholder="Enter department name">
        </div>

        <div class="mb-3">
          <label for="code" class="form-label">Country</label>
          <select class="form-select" id="code" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($paises as $pais)
              <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-warning">Cancel</a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>