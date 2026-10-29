<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="index" aria-label="Inspire-HCS - Home">
                    <img src="src/images/logo-light.png" alt="Inspire HCS Logo" class="img-fluid" width="660" height="174">
                </a>
            </div>

            <div class="d-flex align-items-center justify-content-end gap-4 need-help">
                <p>Need help? Call <a href="tel:123456789">123456789</a></p>
                <div class="button-row">
                    <a href="#" class="readmore">Leave form</a>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
        document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       Sticky Header
    ========================= */
    const header = document.querySelector(".header");

    if (header) {
        window.addEventListener("scroll", function () {
            header.classList.toggle("sticky", window.scrollY > 40);
        });
    }









    /* =========================
       Mobile Menu Button
    ========================= */
    const menuIcon = document.querySelector(".header__menuIcon");

    if (menuIcon) {
        menuIcon.addEventListener("click", function () {
            document.documentElement.classList.toggle("overflow-hidden");
            document.body.classList.toggle("menu-active");
        });
    }


    const navLinks = document.querySelectorAll("#site-navigation a");

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        document.body.classList.remove("menu-active");
    });
});

});
</script>