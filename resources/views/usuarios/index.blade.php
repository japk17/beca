@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Lista de Usuarios</div>

					<div class="card-body">

						<div class="">

							<div class="row justify-content-end pb-2">

							<a href="{{url('/usuarios/create')}}" class="btn btn-success">Nuevo usuario</a>

						</div>

					<table class="table">
	
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Rol</th>
							</tr>
						</thead>
							<tbody>

								@foreach ($users as $usuario)
									<tr>
										<td>{{ $usuario->name }}</td>
										<td>{{ $usuario->email }}</td>
										<td>{{ $usuario->roles->implode('name', ',') }}</td>
										<td>
											<a href="{{ url('/usuarios/'.$usuario->id.'/edit' ) }}" class="btn btn-primary">Editar</a>
											@include('usuarios.delete', ['usuario' => $usuario])
										</td>
									</tr>
								@endforeach
							</tbody>
					</table>

				</div>
			</div>

@endsection