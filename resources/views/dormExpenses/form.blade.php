<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>DATE:</strong>
            {!! Form::text('datetime', null, array('placeholder' => 'datetime','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>elec_cost:</strong>
            {!! Form::text('elec_cost', null, array('placeholder' => 'elec_cost','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>water_cost:</strong>
            {!! Form::text('water_cost', null, array('placeholder' => 'water_cost','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>