<div class="ui grid">
    <div class="computer tablet only row">
       <!-- grid -->
        <div class="ui fixed menu navbar page">
            <a href="/" class="brand item"><img src="/img/logo.png" alt="" class="logo-nav"></a>
            <div class="right menu">
              @include('components.language-select', ["class" => ""])
              </a>
            </div>
        </div>
    </div>

    <div class="mobile only row">
        <div class="ui fixed navbar menu">
            <div class="right menu ">
                @include('components.language-select', ["class" => ""])
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.right.menu.open').on("click", function (e) {
            e.preventDefault();
            $('.ui.vertical.menu').toggle();
        });

        $('.ui.dropdown').dropdown();
    });
</script>
