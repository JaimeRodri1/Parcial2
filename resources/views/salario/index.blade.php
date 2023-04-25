<table border= 1>
    <thead>
        <tr>
            <th>#</th>
            <th>Salario</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($salarios as $salario)
        <tr>
            <td>{{ $salario->id }}</td>
            <td>{{ $salario->salario }}</td>
            <td>{{ $salario->fecha_de_inicio }}</td>
            <td>{{ $salario->fecha_de_fin }}</td>
            <td>
                <form method="POST" action="{{ url('/salario/'. $salario->id) }}">
                @csrf
                <a href="{{ url('/salario/'. $salario->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbodyt
</table>