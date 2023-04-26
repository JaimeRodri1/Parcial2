<form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
    @csrf
    @method('PUT')
    <label>Nombre</label>
    <input type="text" name="nombre" value="{{ $empleado->nombre }}" required>
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido" value="{{ $empleado->apellido }}" required>
    <br>
    <label>Edad</label>
    <input type="number" name="edad" value="{{ $empleado->edad }}" required>
    <br>
    <label>Departamento</label>
    <input type="text" name="departamento" value="{{ $empleado->departamento }}" required>
    <br>
    <button type="submit">Actualizar Empleado</button>
</form>
