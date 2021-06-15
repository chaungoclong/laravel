@extends("layouts.main")

@section("content")
<form action="{{ route("class.update") }}" method="post">
    @csrf
    <a href="{{ route("class.list") }}" class="btn btn-success">LIST</a>
    <div class="form-group">
        <label for="class_name">Email address</label>
        <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Enter Class's Name"
            value="{{ $classRoom->class_name }}">
        <input type="hidden" name="class_id" value="{{ $classRoom->class_id }}">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop