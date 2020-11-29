<div class="table-responsive">
    <table class="table" id="uploaders-table">
        <thead>
            <tr>
                <th>Heading</th>
        <th>Details</th>
        <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($uploaders as $uploader)
            <tr>
                <td>{{ $uploader->heading }}</td>
            <td>{{ $uploader->details }}</td>
            <td><img height="50px" class="img-rounded" width="100" height="200" src="{{ $uploader->image_url }}" /></td>
                <td>
                    {!! Form::open(['route' => ['uploaders.destroy', $uploader->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--a href="{{ route('uploaders.show', [$uploader->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('uploaders.edit', [$uploader->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a-->
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
