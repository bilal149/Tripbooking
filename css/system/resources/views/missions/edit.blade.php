@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mission
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mission, ['route' => ['missions.update', $mission->id], 'method' => 'patch']) !!}

                        @include('missions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection