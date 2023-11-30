@extends("admin-layout")

@section("breadcrumb-item", "Songs")
@section("breadcrumb-item-active", "Lists")

@section("content")
<div class="row">
    <div class="col-sm-12 col-md-12">
        <h3 class="text-center"> List songs</h3>
        <a class="btn btn-primary" href="{{ route('admin.song.add') }}"> Add Song + </a>
    </div>
</div>
@endsection