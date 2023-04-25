Editar salarios

<form action="{{ url('/salario/'. $salario->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('salario.form')
   
</form>