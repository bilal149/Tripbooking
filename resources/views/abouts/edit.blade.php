@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            About
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($about, ['route' => ['abouts.update', $about->id], 'method' => 'patch']) !!}

                        @include('abouts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection