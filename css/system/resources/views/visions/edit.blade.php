@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vision
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vision, ['route' => ['visions.update', $vision->id], 'method' => 'patch']) !!}

                        @include('visions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection