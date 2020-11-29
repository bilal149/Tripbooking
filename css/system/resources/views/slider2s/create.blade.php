@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Slider2
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'slider2s.store', 'files' => true]) !!}

                        @include('slider2s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
