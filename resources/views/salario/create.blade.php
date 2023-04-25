Registrar nuevo Salario

<form action="{{ url('/salario') }}" method="POST">
    @csrf
    @include('salario.form')
   
</form>