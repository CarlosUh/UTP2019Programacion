<html>
<head>
	<title>Programacion 2019</title>
</head>
<body>
<table>
	<tbody>
		<tr>
			<td>Arriba-Izquierda
				@section('upleft')
					@show
			</td>
			<td>
				<div id="arriba">
				@section('up')
					@show
				</div>
			</td>
		</tr>
		<tr>
			<td>Abajo-Izquierda
				@section('downleft')
					@show
			</td>
			<td>
				<div id="abajo">
					@yield('cuerpo')
				</div>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>