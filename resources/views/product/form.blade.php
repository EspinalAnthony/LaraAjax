<div class="box-body">
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">

        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Precio</label>
        <div class="col-sm-10">

        {!! Form::text('price', null, ['class' => 'form-control']) !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-4">

        {!! Form::submit($button, ['class' => 'btn btn-primary', 'id' => 'btn-form']) !!}

        </div>
    </div>
</div>