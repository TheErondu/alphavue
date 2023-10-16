@extends('binshopsblog_admin::layouts.admin_layout')
@section('content')
    <h5>Admin - Make changes to the Homepage </h5>

    <form method='post' action='{{ route('admin.home.sections.update') }}' enctype="multipart/form-data">

        @csrf
        @method('patch')
        @include('admin.homepage.form', ['sections' => $sections])

        <input type='submit' class='btn btn-primary' value='Save Changes'>

    </form>
@endsection
