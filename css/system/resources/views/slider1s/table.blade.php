<div class="table-responsive">
    <table class="table" id="slider1s-table">
        <thead>
            <tr>
                <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($slider1s as $slider1)
            <tr>
                <td><img height="50px" src="{{ $slider1->image_url }}"/></td>  
                <td>
                    {!! Form::open(['route' => ['slider1s.destroy', $slider1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('slider1s.show', [$slider1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('slider1s.edit', [$slider1->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach 
        </tbody>
    </table>
</div>
