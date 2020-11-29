@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Slider1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($slider1, ['route' => ['slider1s.update', $slider1->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('slider1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection