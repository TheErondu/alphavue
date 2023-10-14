<form method="post" action="">
    @csrf

    @foreach ($sections as $sectionIdentifier => $sectionContent)
    <div class="section-editor">
        <input type="hidden" name="section_identifiers[]" value="{{ $sectionIdentifier }}">
        <textarea name="section_contents[]">{{ $sectionContent }}</textarea>
    </div>
    @endforeach

    <button type="submit">Save Changes</button>
</form>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for each textarea with the 'section-editor' class
    document.querySelectorAll('.section-editor textarea').forEach(function(editor) {
        CKEDITOR.replace(editor);
    });
</script>
