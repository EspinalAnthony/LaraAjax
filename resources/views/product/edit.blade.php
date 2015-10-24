@extends('layout.master')

@section('content')

        <div class="col-md-6 col-md-offset-2">
            <div id="success_message"></div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar Producto</h3>
                </div>

                <div class="panel-body">

                {!! Form::model($product, ['method' => 'PUT', 'route' => ['product.update', $product->id], 'class' => 'form-horizontal', 'id' => 'myForm']) !!}

                @include('product.form', ['button' => 'Actualizar'])

                {!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection

@section('scripts')
    {!! Html::script('js/ajax.js') !!}
@endsection
