<div class="ui grid" style="padding-bottom: 20px">
    <div class="computer tablet only row">
       <!-- grid -->
        <div class="ui fixed menu navbar page">
            <a href="/dashboard" class="brand item"><img src="/img/logo.png" alt="" class="logo-nav"></a>
            <a href="/dashboard" class="{{ Ekko::isActiveURL('/dashboard') }} item">Startsidan</a>
            <a href="/dashboard/matched" class="{{ Ekko::isActiveURL('/dashboard/matched') }} item">Matchade</a>
            <a href="/dashboard/statistic" class="{{ Ekko::isActiveURL('/dashboard/statistic') }} item">Statistik</a>
            <div class="right menu">
                <a href="" class="item">Fixed top</a>
            </div>
        </div>
    </div>
    <div class="mobile only row">
        <div class="ui fixed navbar menu">
            <a href="" class="brand item">Project Name</a>
            <div class="right menu open">
                <a href="" class="menu item">
                    <i class="content icon"></i>
                </a>
            </div>
        </div>
        <div class="ui vertical navbar menu">
            <a href="" class="active item">Startsidan</a>
            <a href="" class="item">Matchade</a>
            <a href="" class="item">Statistik</a>
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
