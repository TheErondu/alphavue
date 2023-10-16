
    @foreach ($sections as $sectionIdentifier => $sectionContent)

    <div class="section-editor">
        <h2>{{ ucfirst(str_replace('_', ' ', $sectionIdentifier)) }}</h2>
        <input type="hidden" name="section_identifiers[]" value="{{ $sectionIdentifier }}">
        <textarea name="section_contents[]">{{ $sectionContent }}</textarea>
    </div>
    @endforeach

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for each textarea with the 'section-editor' class
    document.querySelectorAll('.section-editor textarea').forEach(function(editor) {
        CKEDITOR.replace(editor);
    });
</script>
