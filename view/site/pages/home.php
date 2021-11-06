    <!--Slider-->
    <div id="slider" class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item"><a href="https://ivymoda.com/danh-muc/hang-nu-moi-ve"><img src="public/images/f597c81646d5ade7ea99d673343d2abb.jpg" title="" alt="" /></a></div>
            <div class="item"><a href="https://ivymoda.com/danh-muc/sale"><img src="public/images/77cdb91030b99db506ed5b90179d8f61.jpg" title="" alt="" /></a></div>
            <div class="item"><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve"><img src="public/images/6dd468fba1c834e10736c7dfecb8fba6.jpg" title="" alt="" /></a></div>
            <div class="item"><a href="https://ivymoda.com/danh-muc/thanh-sac"><img src="public/images/08f469cc7a97ee33a9f7efa6688c449d.jpg" title="" alt="" /></a></div>
        </div>
    </div>
    <div style="display: none">
        <h1>Thời trang IVY moda</h1>
        <h2>Thời trang Nam</h2>
        <h2>Thời trang Nữ</h2>
        <h2>Thời trang Trẻ em</h2>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $("#owl-demo");
            owl.owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                singleItem: true,
                stopOnHover: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
    <!--/Slider-->
    <script>
        document.title = "Trang chủ | IVY moda";
    </script>