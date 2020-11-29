@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Slid
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($slid, ['route' => ['slids.update', $slid->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('slids.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection