@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Week
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($week, ['route' => ['weeks.update', $week->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('weeks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection