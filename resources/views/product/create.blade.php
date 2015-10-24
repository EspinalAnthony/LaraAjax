@extends('layout.master')

@section('content')

        <div class="col-md-6 col-md-offset-2">
            <div id="success_message"></div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Producto</h3>
                </div>

                <div class="panel-body">

                {!! Form::open(array('url' => '/', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'myForm')) !!}

                @include('product.form', ['button' => 'Agregar'])

                {!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection

@section('scripts')
    {!! Html::script('js/ajax.js') !!}
@endsection
