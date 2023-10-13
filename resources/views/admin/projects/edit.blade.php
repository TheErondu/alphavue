@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Editing post
    <a target='_blank' href='{{route('admin.projects.edit',$project->id)}}' class='float-right btn btn-primary'>View post</a>
    </h5>

    <form method='post' action='{{route("admin.projects.update",$project->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("admin.projects.form", ['project' => $project])

        <input type='submit' class='btn btn-primary' value='Save Changes' >

    </form>

@endsection
