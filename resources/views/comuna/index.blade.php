<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Comunas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-4">
      <h1>Listado de Comunas</h1>
      <a href="{{ route('comunas.create') }}" class="btn btn-success mb-3">Add</a>

      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Commune</th>
            <th scope="col">Municipality</th>
            <th scope="col" style="width: 160px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comunas as $comuna)
          <tr>
            <td>{{ $comuna->comu_codi }}</td>
            <td>{{ $comuna->comu_nomb }}</td>
            <td>{{ $comuna->muni_nomb }}</td>
            <td>
              <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}" class="btn btn-info btn-sm">Edit</a>

              <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger btn-sm" type="submit" value="Delete">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>