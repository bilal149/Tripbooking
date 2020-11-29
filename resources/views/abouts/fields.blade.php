<!-- Welcome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('welcome', 'Welcome:') !!}
    {!! Form::text('welcome', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', 'Heading:') !!}
    {!! Form::text('heading', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sub Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_heading', 'Sub Heading:') !!}
    {!! Form::text('sub_heading', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('abouts.index') }}" class="btn btn-default">Cancel</a>
</div>
