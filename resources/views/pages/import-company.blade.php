
@extends('main')
@section('content')
<div class="container-fluid">
    @include('_partials/errors')
    <h1 class="mt-4">Ikelti imone</h1>
        <form action='checkImport' method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Ikelti .csv tipo faila:</label>
                <input class="form-control" type="file" name="data" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </form>
</div>
@endsection