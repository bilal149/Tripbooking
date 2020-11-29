<div class="table-responsive">
    <table class="table" id="visions-table">
        <thead>
            <tr>
                <th>Heading</th>
        <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($visions as $vision)
            <tr>
                <td>{{ $vision->heading }}</td>
            <td>{{ $vision->details }}</td>
                <td>
                    {!! Form::open(['route' => ['visions.destroy', $vision->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('visions.show', [$vision->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('visions.edit', [$vision->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
