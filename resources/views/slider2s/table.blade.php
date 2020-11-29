<div class="table-responsive">
    <table class="table" id="slider2s-table">
        <thead>
            <tr>
                <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($slider2s as $slider2)
            <tr>
                <td><img height="50px" src="{{ $slider2->image_url }}"/></td>  
                <td>
                    {!! Form::open(['route' => ['slider2s.destroy', $slider2->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('slider2s.show', [$slider2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('slider2s.edit', [$slider2->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
