@extends('layout.master')

@section('content')

        <div class="col-md-6 col-md-offset-2">
            <div id="success_message"></div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Listado de Producto</h3>
                </div>

                <div class="panel-body">

                <a href="{{ url('/create') }}">
                        <button class="btn btn-primary" type="button"><i class="fa fa-plus-circle">
                            </i> Agregar
                        </button>
                </a>

                <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr data-id="{{ $product->id }}">
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ url('/' . $product->id . '/edit') }}">
                                        <button class="btn btn-social-icon btn-info" type="button" title="Actualizar">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>

                                    <button class="btn btn-social-icon btn-danger" type="submit" title="Eliminar">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {!! Form::open(['route' => ['product.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'myForm']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    {!! Html::script('js/ajax.js') !!}
@endsection
