<ul class="list-group">
    <li class="list-group-item list-group-color justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('binshopsblog.admin.index') }}">Project Page Config</a></h6>
            <small class="text-muted">Configure your Projects Page</small>

            <div class="list-group ">

                <a href='{{ route('admin.projects.index') }}'
                   class='list-group-item list-group-color list-group-item list-group-color-action @if(\Request::route()->getName() === 'admin.projects.index') active @endif  '><i
                            class="fa fa-th fa-fw"
                            aria-hidden="true"></i>
                 All Projects</a>
                <a href='{{ route('admin.projects.create') }}'
                   class='list-group-item list-group-color list-group-item list-group-color-action  @if(\Request::route()->getName() === 'admin.projects.create') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Project</a>
            </div>
        </div>
    </li>
</ul>
