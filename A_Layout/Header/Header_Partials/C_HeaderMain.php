<?php
$page = basename($_SERVER['PHP_SELF']);
echo
    '
<body
    class="home page-template page-template-elementor_header_footer page page-id-495 wp-custom-logo wp-embed-responsive rttpg rttpg-7.7.17 radius-frontend rttpg-body-wrap ehf-footer ehf-template-xotric ehf-stylesheet-xotric no-sidebar elementor-default elementor-template-full-width elementor-kit-4212 elementor-page elementor-page-495 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape vsc-initialized"
    style="" data-elementor-device-mode="desktop">

        <!-- Preloader -->
        <div id="preloader" class="">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- Preloader -->
    <button class="scroll-top scroll-to-target scroll-top open" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <header>
        <div id="header-fixed-height" class="active-height"></div>
        <div id="sticky-header" class="menu-area xotric-menu-has-showing sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a class="main-logo" href="Home">
                                        <img src="./assest/img/logo/logo-small.png" style="max-height: 36px" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul id="menu-main-menu" class="navigation">
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5521"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-495 current_page_item  menu-item-5521 nav-item  ' ?><?php if ($page == "index.php") {
                                    echo 'active';
                                } ?><?php echo '">
                                            <a title="Home"  class="nav-links" href="Home">Home</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6703"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6703 nav-item  ' ?><?php if ($page == "about-us.php") {
                                    echo 'active';
                                } ?><?php echo ' ">
                                            <a title="About Us" href="About-Us" class="nav-links ">About Us</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5525"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown has-dropdown menu-item-5525 nav-item ' ?><?php if ($page == "services-page.php" || $page == "catalogue-design.php" || $page == "creative-design-agency.php" || $page == "digital-marketing-agency.php" || $page == "ui-ux-design.php" || $page == "website-design.php" || $page == "mobile-app-development.php" || $page == "event-management.php" || $page == "3d-rendering.php" || $page == "advertising-agency.php") {
                                         echo 'active';
                                     } ?><?php echo '" aria-current="page">
                                            <a title="Services" href="Services-Page" class="nav-links">Services</a>
                                            <ul class="sub-menu" role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6705"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6705 nav-item ' ?><?php if ($page == "catalogue-design.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Catalogue Design" href="Catalogue-Design"
                                                        class="dropdown-items">Catalogue Design</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6706"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6706 nav-item ' ?><?php if ($page == "creative-design-agency.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Creative Designing" href="Creative-Design-Agency"
                                                        class="dropdown-items">Creative Designing</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6707"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6707 nav-item ' ?><?php if ($page == "digital-marketing-agency.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Digital Marketing" href="Digital-Marketing-Agency"
                                                        class="dropdown-items">Digital Marketing</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6708"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6708 nav-item ' ?><?php if ($page == "ui-ux-design.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Ui Ux Design" href="Ui-Ux-Design"
                                                        class="dropdown-items">Ui Ux Design</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6709"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6709 nav-item ' ?><?php if ($page == "website-design.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Website Design &amp; Development"
                                                        href="Website-Design" class="dropdown-items">Website Design
                                                        &amp; Development</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6710"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6710 nav-item ' ?><?php if ($page == "mobile-app-development.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Mobile App" href="Mobile-App-Development"
                                                        class="dropdown-items">Mobile App</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6711"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6711 nav-item ' ?><?php if ($page == "event-management.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Event Management" href="Event-Management"
                                                        class="dropdown-items">Event Management</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6712"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6712 nav-item ' ?><?php if ($page == "3d-rendering.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="3d Rendering" href="Rendering-3D"
                                                        class="dropdown-items">3d Rendering</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6713"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6713 nav-item ' ?><?php if ($page == "advertising-agency.php") {
                                                 echo 'active';
                                             } ?><?php echo '">
                                                    <a title="Advertising Agency" href="Advertising-Agency"
                                                        class="dropdown-items">Advertising Agency</a>
                                                </li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6989"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6989 nav-item  ' ?><?php if ($page == "Portfolio.php" || $page == "ranberry-trends.php" || $page == "moonshineenchanting.php" || $page == "dazzle-berryenpastel.php" || $page == "Nelsonlaminates.php" || $page == "ranwood-rega.php" || $page == "kooyoo-enchanting.php" || $page == "central.php" || $page == "bliss.php" || $page == "keton-micabeautiful.php" || $page == "eco-woodamaurosis.php " || $page == "bravio-pastel-laminate.php" || $page == "fabrino-fabric.php" || $page == "fabrinobeauty.php" || $page == "vanshlam.php" || $page == "evershine-color-trendenchanting.php" || $page == "lammartcolor.php" || $page == "picsartelegance.php" || $page == "morbi-king.php" || $page == "crysta-line.php"|| $page == "atina.php" || $page == "mr-velvet-ears.php") {
                                         echo 'active';
                                     } ?><?php echo '">
                                            <a title="Portfolio" href="Portfolio" class="nav-links">Portfolio</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6720"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6720 nav-item  ' ?><?php if ($page == "blogs.php" || $page == "blogs-2.php" || $page == "blogs-graphic-design.php" || $page == "blogs-best-laminate-catalogue.php" || $page == "blogs-grow-your-business.php" || $page == "blogs-powerful-branding-strategies.php" || $page == "blogs-how-a-creative-design-agency.php" || $page == "blogs-branding-vs-advertising.php" || $page == "blogs-how-3d-rendering.php" || $page == "category-blog.php") {
                                    echo 'active';
                                } ?><?php echo '">
                                            <a title="Blogs" href="Blogs" class="nav-links">Blogs</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5523"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5523 nav-item  ' ?><?php if ($page == "contact-us.php") {
                                    echo 'active';
                                } ?><?php echo '">
                                            <a title="Contact Us" href="Contact-Us" class="nav-links">Contact
                                                Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            </nav>
                        </div>
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a class="main-logo" href="Home">
                                        <img src="./assest/img/logo/logo-small.png" style="max-height: 36px" alt="Logo">
                                    </a>
                                </div>
                                <div class="menu-outer">
                                    <ul id="menu-main-menu" class="navigation">
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5521"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-495 current_page_item active menu-item-5521 nav-item">
                                            <a title="Home" href="Home" class="nav-links">Home</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6703"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6703 nav-item">
                                            <a title="About Us" href="About-Us" class="nav-links">About Us</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5525"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown has-dropdown menu-item-5525 nav-item">
                                            <a title="Services" href="Services-Page" class="nav-links">Services</a>
                                            <ul class="sub-menu" role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6705"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6705 nav-item">
                                                    <a title="Catalogue Design" href="Catalogue-Design"
                                                        class="dropdown-items">Catalogue Design</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6706"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6706 nav-item">
                                                    <a title="Creative Designing" href="Creative-Design-Agency"
                                                        class="dropdown-items">Creative Designing</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6707"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6707 nav-item">
                                                    <a title="Digital Marketing" href="Digital-Marketing-Agency"
                                                        class="dropdown-items">Digital Marketing</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6708"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6708 nav-item">
                                                    <a title="Ui Ux Design" href="Ui-Ux-Design"
                                                        class="dropdown-items">Ui Ux Design</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6709"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6709 nav-item">
                                                    <a title="Website Design &amp; Development"
                                                        href="Website-Design" class="dropdown-items">Website Design
                                                        &amp; Development</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6710"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6710 nav-item">
                                                    <a title="Mobile App" href="Mobile-App-Development"
                                                        class="dropdown-items">Mobile App</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6711"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6711 nav-item">
                                                    <a title="Event Management" href="Event-Management"
                                                        class="dropdown-items">Event Management</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6712"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6712 nav-item">
                                                    <a title="3d Rendering" href="Rendering-3D"
                                                        class="dropdown-items">3d Rendering</a>
                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-6713"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6713 nav-item">
                                                    <a title="Advertising Agency" href="Advertising-Agency"
                                                        class="dropdown-items">Advertising Agency</a>
                                                </li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6989"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6989 nav-item">
                                            <a title="Portfolio" href="Portfolio" class="nav-links">Portfolio</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6720"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6720 nav-item">
                                            <a title="Blogs" href="Blogs" class="nav-links">Blogs</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-5523"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5523 nav-item">
                                            <a title="Contact Us" href="Contact-Us" class="nav-links">Contact
                                                Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button><i class="far fa-window-close"></i></button>
            </div>
            <div class="logo-side mb-30">
                <a class="main-logo" href="Home">
                    <img src="./assest/img/logo/logo-small.png" style="max-height: 36px" alt="Logo">
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9
                        <br>
                        +0989 7876 9865 9
                    </p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com
                        <br>
                        support@example.com
                    </p>
                </div>
            </div>
            <div class="social-icon-right mt-30"><a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
    </header>

'
     ?>