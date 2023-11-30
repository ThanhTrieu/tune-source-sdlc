@extends("admin-layout")

@section("breadcrumb-item", "Song")
@section("breadcrumb-item-active", "Create")

@section("content")
<div class="row">
    <div class="col-sm-12 col-md-12">
        <h4 class="text-center"> Add Song</h4>
        <a class="btn btn-info btn-sm" href="{{ route('admin.song') }}"> Back to list song</a>
    </div>
</div>
@endsection