@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
<div class="col-md-8">
	<div class="card" style="border: solid 1px black;">
<div class="card-header bg-dark">

<div class="row">
	<div class="col-md-10">

		<h2 class=" text-white">Facturación</h2>
	</div>
	<div class="col-md-2">

	<a href="{{route('facturas.create')}}" class="btn btn-danger">Nueva</a>

	</div>
</div>



</div>
<div class="card-body">

	<div class="container">
		<table class="table">
			<tr>
				
				<th>Factura Nro</th>
				<th>Fecha</th>
				<th>Provedor</th>
				<th>Acciones</th>
			</tr>
			@foreach($facturas as $f)
			<tr>
			
				<td>{{$f->fac_id}}</td>
				<td>{{$f->fac_fecha}}</td>
				<td>{{$f->fac_nombre}}</td>
				<td>
				@if($f->fac_estado==1)
				<a style="background:#46b6d0;" class="btn btn-primary" href="{{route('facturas.edit',$f->fac_id)}}">Editar</a>
				<a href="{{route('facturas.pdf',$f->fac_id)}}" class= "btn text-white "  style="background:#eb0009;">PDF</a>
				<a href="{{route('facturas.anular',$f->fac_id)}}" class= "btn text-white "  style="background:#ffA500;">X Anular</a>
				@else
				<a href="{{route('facturas.pdf',$f->fac_id)}}" class= "btn text-white "  style="background:#eb0009;">PDF</a>
				@endif
				</td>
			</tr>
			@endforeach
	
		</table>
	</div>
</div>
	</div>
</div>
	</div>
</div>


@endsection