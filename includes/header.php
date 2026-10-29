<header class="header">
    <div class="header__top-bar">
        <div class="container">
            <div class="d-flex">
                <p><span class="for-desktop">Home care in Gwinnett, Fulton, DeKalb, Cobb & Clayton</span> <span class="for-responsive">Serving 5 Georgia counties</span></p>
                <p>
                    Call <a href="tel:123456789">123456789</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="index" aria-label="Inspire-HCS - Home">
                    <img src="src/images/logo-light.png" alt="Inspire HCS Logo" class="img-fluid" width="660" height="174">
                </a>
            </div>

            <div class="d-flex align-items-center gap-4">

                <nav id="site-navigation" class="header__nav" aria-label="Main navigation">
                    <ul>
                        <li>
                            <a class="active" href="index">Home</a>
                        </li>

                        <li>
                            <a href="about">About Us</a>
                        </li>
                        <li>
                            <a href="services">Services</a>
                        </li>
                        <li>
                            <a href="training">Training</a>
                        </li>
                        <li>
                            <a href="employment">Employment</a>
                        </li>
                        <li>
                            <a href="contact">Contact</a>
                        </li>
                        <li class="d-none show-on-tablet">
                            For a medical emergency, call 911.
                        </li>
                    </ul>
                </nav>
                <div class="button-row">
                    <a href="contact" class="btn btn-primary">
                        Request Care
                    </a>
                </div>
                <button
                    type="button"
                    class="header__menuIcon"
                    aria-label="Open navigation menu"
                    aria-expanded="false"
                    aria-controls="site-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

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