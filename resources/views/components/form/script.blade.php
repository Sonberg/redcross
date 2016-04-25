<script>
    $(document).ready(function () {
        $('.immigration').transition('fade left');
        $('.dropdown.language').dropdown();
        $('select.dropdown').dropdown();
        $('.dropdown.limit').dropdown({maxSelections: 5});
        $(".radio").checkbox();
    });
</script>
