@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Servics</h1>
        <h1 class="pull-right">
           <a class="btn btn-warning pull-right" data-toggle="modal"
           data-target="#admission-add-modal"
           style="margin-top: -10px;margin-bottom: 5px" href="#">
           <i class="fa fa-plus"></i> </a>

       
        </h1> 
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('servics.table')
                    {!! Form::open(['route' => 'servics.store', 'files'=>true]) !!}

                    @include('servics.fields')

                {!! Form::close() !!}

            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

