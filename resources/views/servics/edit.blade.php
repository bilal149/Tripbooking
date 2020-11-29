@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Servic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($servic, ['route' => ['servics.update', $servic->id], 'method' => 'patch']) !!}

                        @include('servics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection 