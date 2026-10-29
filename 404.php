<?php
$ishome = 1;
include_once "includes/base.php"; 
?>
<?php include_once "includes/header.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper">
            <section class="error-page">
                <div class="container">
                    <div class="error-page__wrapper">
                        <div class="sectionHead">
                            <div>
                                <span class="sectionHead__subtitle">Error 404</span>
                                <h1>We can’t find that page.</h1>
                            </div>
                            <p>
                            It may have moved, or the link may be mistyped. These pages might help.
                            </p>
                        </div>
                        <div class="error-page__suggestion">
                            <ul>
                                <li>
                                    <a href="index">Home</a>
                                </li>
                                 <li>
                                    <a href="services">Services</a>
                                </li>
                                 <li>
                                    <a href="#">Request care</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </div>
         <?php include_once "includes/footer.php"; ?>
    </div>
</div>
<?php include_once "includes/scripts.php"; ?> 

</body>

</html>

