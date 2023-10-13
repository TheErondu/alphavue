@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Add Project</h5>

    <form method='post' action='{{route("admin.projects.store")}}'  enctype="multipart/form-data" >

        @csrf
        @include("admin.projects.form", ['project' => $project])

        <input type='submit' class='btn btn-primary' value='Add new project' >

    </form>

@endsection
