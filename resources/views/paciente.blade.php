@extends('menu')

@section('content')
    <div class="alert alert-success">Aqui entrará os dados dos pacientes</div>

    @foreach ($paciente as $value )
        {{ $value -> nome }}
    @endforeach
@endsection