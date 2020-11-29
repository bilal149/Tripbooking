<!-- Welcome Field -->
<div class="form-group">
    {!! Form::label('welcome', 'Welcome:') !!}
    <p>{{ $about->welcome }}</p>
</div>

<!-- Heading Field -->
<div class="form-group">
    {!! Form::label('heading', 'Heading:') !!}
    <p>{{ $about->heading }}</p>
</div>

<!-- Sub Heading Field -->
<div class="form-group">
    {!! Form::label('sub_heading', 'Sub Heading:') !!}
    <p>{{ $about->sub_heading }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{{ $about->details }}</p>
</div>

