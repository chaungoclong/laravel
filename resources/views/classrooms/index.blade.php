@extends("layouts.main")

@section("content")
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($classrooms as $item)
            <tr>
                <td>{{ $item->class_id }}</td>
                <td>{{ $item->class_name }}</td>
                <td><a class="btn btn-danger" href="{{ route("class.delete", $item->class_id) }}">DELETE</a></td>
                <td><a class="btn btn-primary" href="{{ route("class.edit", $item->class_id) }}">EDIT</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop