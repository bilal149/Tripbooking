{!! Form::open(['action' => 'ImageController@store' , 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
{{Form::file('image',['class'=>'form-control'])}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('images.index') }}" class="btn btn-default">Cancel</a>
</div>
{!! Form::close() !!} 