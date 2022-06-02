<style>
    *{
        font-family:sans-serif ;
        font-size:15px;
    }
</style>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card-header bg-dark" style="color:black;">
    <div class="card-row"> 
        <h3>
        Reportes
        </h3>


</div>
<div style="background:#2BA0CC; text-align:center ;" >Detalle del Reporte</div>
<table style="width:85%">

              
    <div class="card-body">         
    <table class="table table-striped table-bordered table table-sm" style="margin-top:1% " >

<th style="text-align:center;font-size:10pt;color:green;">Producto</th>
<th style="text-align:center;font-size:10pt;color:green;">Codigo</th>
<th style="text-align:center;font-size:10pt;color:green;">Stock</th>
<th style="text-align:center;font-size:10pt;color:green;">Precio</th>
<th style="text-align:center;font-size:10pt;color:green;">Categoria</th>
<th style="text-align:center;font-size:10pt;color:green;">Provedor</th>
@isset($reporte)
@foreach($reporte as $rep)

<tr>
    <td>{{$rep->prod_nombre}}</td>
    <td>{{$rep->prod_codigo}}</td>
    <td>{{$rep->inv_cantidad}}</td>
    <td>${{$rep->prod_precio}}</td>
    <td>{{$rep->bod_nombre}}</td>
    <td>{{$rep->prov_nombre}}</td>
</tr>
@endforeach
@endisset
                   </table>
                    </div>

                    </div>

                </div>
            </div>

		</div>
	</div>
</div>


