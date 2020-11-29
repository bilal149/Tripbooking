<div class="table-responsive">
    <table class="table" id="slids-table">
        <thead>
            <tr>
                <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($slids as $slid)
            <tr>
                <td><img height="50px" src="{{ $slid->image_url }}"/></td>
                <td>
                    {!! Form::open(['route' => ['slids.destroy', $slid->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('slids.show', [$slid->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('slids.edit', [$slid->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
