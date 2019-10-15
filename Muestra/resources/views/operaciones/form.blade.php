@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Operaciones</div>
                    <div class="card-body">
						@isset($error)
						<ul class="alert alert-danger">
                            <li>{{$error->getMessage()}}</li>
						</ul>
                        @endisset                        

                        <form action="/operaciones/suma" 
						method="POST" 
						name="frm_operaciones" 
						>
						@csrf
						<label for="a">a:</label>
						<input type="text" name="a"/>
						<label for="b">b:</label>
						<input type="text" name="b"/>
						@isset($respuesta)
                            <label>={{$respuesta}}</label>
                        @endisset
						
						<button type="submit">Calcular</button>
						</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection