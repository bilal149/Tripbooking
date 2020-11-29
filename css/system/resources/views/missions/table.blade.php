<div class="table-responsive">
    <table class="table" id="missions-table">
        <thead>
            <tr>
                <th>Heading</th>
        <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($missions as $mission)
            <tr>
                <td>{{ $mission->heading }}</td>
            <td>{{ $mission->details }}</td>
                <td>
                    {!! Form::open(['route' => ['missions.destroy', $mission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('missions.show', [$mission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('missions.edit', [$mission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
