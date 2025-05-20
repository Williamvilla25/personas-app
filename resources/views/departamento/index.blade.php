<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-4">
      <h1>Listado de Departamentos</h1>
      <a href="{{ route('departamentos.create') }}" class="btn btn-success mb-3">Add</a>

      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Department</th>
            <th scope="col">Country</th>
            <th scope="col" style="width: 160px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($departamentos as $departamento)
          <tr>
            <td>{{ $departamento->depa_codi }}</td>
            <td>{{ $departamento->depa_nomb }}</td>
            <td>{{ $departamento->pais_nomb }}</td>
            <td>
              <a href="{{ route('departamentos.edit', ['departamento' => $departamento->depa_codi]) }}" class="btn btn-info btn-sm">Edit</a>

              <form action="{{ route('departamentos.destroy', ['departamento' => $departamento->depa_codi]) }}" method="POST" style="display: inline-block;">
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