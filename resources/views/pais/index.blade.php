<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Países</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-4">
      <h1>Listado de Países</h1>
      <a href="{{ route('paises.create') }}" class="btn btn-success mb-3">Add</a>

      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Country</th>
            <th scope="col">Capital</th>
            <th scope="col" style="width: 160px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($paises as $pais)
          <tr>
            <td>{{ $pais->pais_codi }}</td>
            <td>{{ $pais->pais_nomb }}</td>
            <td>{{ $pais->pais_capi }}</td>
            <td>
              <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi]) }}" class="btn btn-info btn-sm">Edit</a>

              <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}" method="POST" style="display: inline-block;">
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