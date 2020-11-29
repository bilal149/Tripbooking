<div class="table-responsive">
    <table class="table" id="servics-table">
        <thead>
            <tr>
                <th>Image</th>
        <th>Heading</th>
        <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servics as $servic)
            <tr>
                <tr>
            <td>{{ $servic->heading }}</td>
            <td>{{ $servic->details }}</td>
            <td><img src="{{asset('posts/' .$servic->image)}}"
                class="rounded-circle" width="50" height="50" style="border-radius:50%; vertical-alight:middle">
                </td>    
            <td>
                    {!! Form::open(['route' => ['servics.destroy', $servic->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servics.show', [$servic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servics.edit', [$servic->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
