<div class="form-group">
    <label for="title">Project Title</label>
    <input type="text" class="form-control" required id="title" aria-describedby="project_title_help" name='title'
        value="{{ old('title', $project->title) }}">
    <small id="project_title_help" class="form-text text-muted">The title of the project</small>
</div>
<div class='row'>
    <div class='col-sm-12 col-md-4'>
        <div class="form-group">
            <label for="starting_price">Starting price</label>
            <input type="text" class="form-control" required id="starting_price"
                aria-describedby="starting_price_help" name='starting_price'
                value='{{ old('subtitle', $project->starting_price) }}'>
            <small id="starting_price_help" class="form-text text-muted">The starting price of the project</small>
        </div>
    </div>
    <div class='col-sm-12 col-md-4'>
        <div class="form-group">
            <label for="unit_choices">Unit choices</label>
            <input type="text" class="form-control" required id="unit_choices" aria-describedby="unit_choices_help"
                name='unit_choices' value='{{ old('subtitle', $project->unit_choices) }}'>
            <small id="unit_choices_help" class="form-text text-muted">The available unit choices of the project</small>
        </div>
    </div>
    <div class='col-sm-12 col-md-4'>
        <div class="form-group">
            <label for="completion">Project completion date</label>
            <input type="text" class="form-control" required id="completion" aria-describedby="completion_help"
                name='completion' value='{{ old('completion', $project->completion) }}'>
            <small id="completion_help" class="form-text text-muted">The completion date of the project</small>
        </div>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12 col-md-6'>
        <label for="project_details">Project images</label>

        @if (config('binshopsblog.image_upload_enabled', true))
            <div class='bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border'>
                <div class="mt-4" id="imageThumbnails">
                    <!-- Thumbnails of selected images will be displayed here -->
                </div>
                <style>
                    .image_upload_other_sizes {
                        display: none;
                    }

                    .img-thumbnail {
                        width: 70px;
                        height: 70px;
                    }
                </style>
                <div style="padding: 0.5rem;">
                    {{-- <input type="file" name="project_images[]" class="form-control-file" id="imageUpload"
                        accept="image/*" style="display: none;" multiple> --}}
{{--
                    <button type="button" class="btn" id="selectImages">Select Images</button> --}}
                    <input type="file"  name="project_images[]" multiple>
                </div>
            </div>
        @else
            <div class='alert alert-warning'>Image uploads were disabled in binshopsblog.php config</div>
        @endif
    </div>
    <div class='col-sm-12 col-md-6'>
        <div class="form-group">
            <label for="location">Project location</label>
            <input type="text" class="form-control" required id="location" aria-describedby="location_help"
                name='location' value='{{ old('location', $project->location) }}'>
            <small id="location_help" class="form-text text-muted">The Location of the project</small>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="project_details">Project Details
        @if (config('binshopsblog.echo_html'))
            (HTML)
        @else
            (Html will be escaped)
        @endif

    </label>
    <textarea style='min-height:600px;' class="form-control" id="project_details" aria-describedby="project_details_help"
        name='post_body'>{{ old('post_body', $project->details) }}</textarea>


    <div class='alert alert-warning'>
        If you want to add HTML content to be rendered, click source button at top left, and then paste your HTML
        snippet. (Youtube iFrames)
    </div>
</div>
<script>
    document.getElementById('selectImages').addEventListener('click', function() {
        document.getElementById('imageUpload').click();
    });

    document.getElementById('imageUpload').addEventListener('change', function() {
        var thumbnailsContainer = document.getElementById('imageThumbnails');

        for (var i = 0; i < this.files.length; i++) {
            var file = this.files[i];
            if (file.type.startsWith('image/')) {
                var thumbnail = document.createElement('img');
                thumbnail.classList.add('img-thumbnail');
                thumbnail.style.marginRight = '10px';
                thumbnail.src = URL.createObjectURL(file);
                thumbnailsContainer.appendChild(thumbnail);
            }
        }

        // Clear the file input value to allow selecting more images
        this.value = '';
    });
</script>
