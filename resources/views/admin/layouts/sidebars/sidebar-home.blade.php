<ul class="list-group">
    <li class="list-group-item list-group-color justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><a href="{{ route('binshopsblog.admin.index') }}">HomePage Config</a></h6>
            <small class="text-muted">Configure parts of your HomePage</small>

            <div class="list-group ">

                <a href='{{ route('binshopsblog.admin.index') }}'
                   class='list-group-item list-group-color list-group-item list-group-color-action @if(\Request::route()->getName() === 'binshopsblog.admin.index') active @endif  '><i
                            class="fa fa-th fa-fw"
                            aria-hidden="true"></i>
                    Intro Slider</a>
                <a href='{{ route('binshopsblog.admin.create_post') }}'
                   class='list-group-item list-group-color list-group-item list-group-color-action  @if(\Request::route()->getName() === 'binshopsblog.admin.create_post') active @endif  '><i
                            class="fa fa-plus fa-fw" aria-hidden="true"></i>
                    Add Post</a>
            </div>
        </div>
    </li>


</ul>
