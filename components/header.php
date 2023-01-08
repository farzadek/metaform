<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark py-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="./assets/logo-header.svg" height="50" alt="metaform logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="#hero" class="nav-item nav-link">About</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#contact" class="nav-item nav-link mb-4 mb-lg-0">Contact</a>
                    <form method="post">
                        <input type="hidden" name="lang" value="$lang">
                        <button type="submit" name="toggleLang" class="btn ms-lg-4"><?php echo $messages['langSign']?></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</section>