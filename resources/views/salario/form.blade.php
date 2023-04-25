Salario:
    <input type="float" name="salario" id="salario" value="{{ isset($salario)?$salario->salario:'' }}" /><br />
FECHA DE INICIO
    <input type="date" name="fecha_de_inicio" id="fecha_de_inicio" value="{{ isset($salario)?$salario->fecha_de_inicio:'' }}" /><br />
FECHA DE FIN
    <input type="date" name="fecha_de_fin" id="fecha_de_fin" value="{{ isset($salario)?$salario->fecha_de_fin:'' }}" /><br />

    <button type="submit">Guardar</button>