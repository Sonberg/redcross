<script>
    $(document).ready(function () {
        $('.immigration').transition('fade left');
        $('.dropdown.language').dropdown();
        $('select.dropdown').dropdown();
        $('.dropdown.intrest').dropdown({maxSelections: 5});
        $(".radio").checkbox();
    });
</script>
