<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Electricity Bill(unit):</strong>
            {!! Form::text('elec_unit', null, array('placeholder' => 'Electricity Bill(unit)','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Water Bill(unit):</strong>
            {!! Form::text('water_unit', null, array('placeholder' => 'Water Bill(unit)','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date:</strong>
            {!! Form::date('date', null, array('placeholder' => 'YYYY-MM-DD hh:mm:ss','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>