<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Municipality</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">
      <h1>Add Municipality</h1>

      <form method="POST" action="{{ route('municipios.store') }}">
        @csrf

        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" disabled placeholder="Auto-generated">
          <div class="form-text">The code is assigned automatically.</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Municipality Name</label>
          <input type="text" required class="form-control" id="name" name="name" placeholder="Enter municipality name">
        </div>

        <div class="mb-3">
          <label for="code" class="form-label">Department</label>
          <select class="form-select" id="code" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamento)
              <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>