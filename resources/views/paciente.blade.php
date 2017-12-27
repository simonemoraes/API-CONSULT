@extends('menu') @section('content')

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">Telefone</th>
			</tr>
		</thead>
		<tbody>
                <tr>
			@foreach ($paciente as $pacientes )
			
				<th>$pacientes.id</th>
				<td>$pacientes.nome</td>
				<td>$pacientes.email</td>
				<td>$pacientes.telefone</td>
			
            @endforeash
        </tr>
		</tbody>
	</table>
</div>

@endsection