<!-- Heading Field -->
<div class="form-group">
    {!! Form::label('heading', 'Heading:') !!}
    <p>{{ $uploader->heading }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{{ $uploader->details }}</p>
</div>

<!-- Image Url Field -->
<div class="form-group">
    {!! Form::label('image_url', 'Image Url:') !!}
    <p>{{ $uploader->image_url }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $uploader->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $uploader->updated_at }}</p>
</div>

