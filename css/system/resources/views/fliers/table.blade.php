<div class="table-responsive">
    <table class="table" id="fliers-table">
        <thead>
            <tr>
                <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fliers as $flier)
            <tr>
                <td><img height="50px" class="img-rounded" width="100" height="200" src="{{ $flier->image_url }}" /></td>

                <td>
                    {!! Form::open(['route' => ['fliers.destroy', $flier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fliers.show', [$flier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fliers.edit', [$flier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
