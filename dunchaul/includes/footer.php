
    <!-- End of main section for this page -->
    </section>

    <footer>

        <section class = "footer-wrapper">

            <p class = "footer-major"> Dunchaul Ltd</p>
            <p class = "footer-minor"> Moor View, New Road, Landrake, PL12 5EG</p>
            <p class = "footer-minor"> Tel: 07939 224331 | Email: Dunchaul@aol.com</p>

            <div class = "footer-link-wrapper">
                <a class = <?php if($pageCat == "index") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#" >HOME</a>
                <a class = <?php if($pageCat == "services") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#">SERVICES</a>
                <a class = <?php if($pageCat == "the team") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#">THE TEAM</a>
                <a class = <?php if($pageCat == "our partners") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#">OUR PARTNERS</a>
                <a class = <?php if($pageCat == "gallery") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#">GALLERY</a>
                <a class = <?php if($pageCat == "contact us") echo '"footer-nav-active"'; else echo '"footer-nav"'; ?> href ="#">CONTACT US</a>
            </div>

        </section>

        <!-- Scripts -->
        <script src="../js/jquery.js"></script>
        <script src="../js/main.js"> </script>

    </footer>

<!-- End of page wrapper -->
</section>

</body>

</html>