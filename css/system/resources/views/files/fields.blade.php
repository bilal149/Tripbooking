<!--//{//!!// Form::open(['action' => 'FileController@store' , 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
-->

<form action="{{ action('FileController@testing') }}" enctype="multipart/form-data" role="form" method="POST">
{{Form::file('image',['class'=>'form-control'])}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('files.index') }}" class="btn btn-default">Cancel</a>
</div>
{!! Form::close() !!} 