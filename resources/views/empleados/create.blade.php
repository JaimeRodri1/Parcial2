<form method="POST" action="{{ route('empleados.store') }}">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" required>
    <br>
    <label>Apellido</label>
    <input type="text" name="apellido" required>
    <br>
    <label>Edad</label>
    <input type="number" name="edad" required>
    <br>
    <label>Departamento</label>
    <input type="text" name="departamento" required>
    <br>
    <button type="submit">Crear Empleado</button>
</form>
