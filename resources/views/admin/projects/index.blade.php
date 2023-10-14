@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")

    @if(count($projects) > 0)
        <div class='search-form-outer mb-3'>
            <form method='get' action='{{route("binshopsblog.admin.searchblog", app('request')->get('locale'))}}' class='text-center'>
                <input style="display: inline-block; width: 50%" type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
                <input style="display: inline-block" type='submit' value='Search' class='btn btn-primary m-2'>
            </form>
        </div>

        <h5>Manage projects</h5>
    @endif

    @forelse($projects as $project)
        <div class="card m-4" style="">
            <div class="card-body">
                <h5 class='card-title'><a class="a-link-cart-color" href='{{route('admin.projects.edit',$project)}}'>{{$project->title}}</a></h5>
                <h5 class='card-subtitle mb-2 text-muted'>{{$project->starting_price}}</h5>
                <p class="card-text">{!! $project->details !!}</p>

                <?=$project->image_tag("thumbnail", false, "float-right");?>

                <dl class="">
                    <dt class="">Author</dt>
                    {{-- <dd class="">{{$project->author_string()}}</dd> --}}
                    <dt class="">added at</dt>
                    <dd class="">{{ \Carbon\Carbon::parse($project->created_at)->format('F jS, Y') }}</dd>




                    <dt class="">Categories</dt>
                </dl>




                <a href="{{route('admin.projects.edit',$project->id)}}" class="card-link btn btn-outline-secondary"><i class="fa fa-file-text-o"
                                                                                          aria-hidden="true"></i>
                    View project</a>
                <a href="{{route('admin.projects.edit',$project->id)}}" class="card-link btn btn-primary">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Edit project</a>
                <form onsubmit="return confirm('Are you sure you want to delete this blog project?\n You cannot undo this action!');"
                      method='post' action='{{route("admin.projects.destroy", $project->id)}}' class='float-right'>
                    @csrf
                    <input name="_method" type="hidden" value="DELETE"/>
                    <button type='submit' class='btn btn-danger btn-sm'>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        @if(empty($search))
            <h5>Manage projects</h5>

            <div class='alert alert-warning'>No projects to show you. Why don't you add one?</div>
        @else
            <div class='search-form-outer mb-3'>
                <form method='get' action='{{route("binshopsblog.admin.searchblog", app('request')->get('locale'))}}' class='text-center'>
                    <input style="display: inline-block; width: 50%" type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
                    <input style="display: inline-block" type='submit' value='Search' class='btn btn-primary m-2'>
                </form>
            </div>
            <div class='alert alert-warning'>There were no results for this search!</div>
        @endif
    @endforelse
@endsection
