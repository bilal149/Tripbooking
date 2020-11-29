@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            File
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($file, ['route' => ['files.update', $file->id], 'method' => 'patch']) !!}

                        @include('files.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection