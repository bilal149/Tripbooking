<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
            <tr>
                <th>Welcome</th>
        <th>Heading</th>
        <th>Sub Heading</th>
        <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $about->welcome }}</td>
            <td>{{ $about->heading }}</td>
            <td>{{ $about->sub_heading }}</td>
            <td>{{ $about->details }}</td>
                <td>
                    {!! Form::open(['route' => ['abouts.destroy', $about->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('abouts.show', [$about->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('abouts.edit', [$about->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
