@extends("layouts.main")

@section("content")
<form action="{{ route("class.store") }}" method="post">
    @csrf
    <a href="{{ route("class.list") }}" class="btn btn-success">LIST</a>
    <div class="form-group">
        <label for="class_name">Email address</label>
        <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Enter Class's Name">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop