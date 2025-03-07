
<?php
// Static assets ke liye caching enable karein (1 saal)
header("Cache-Control: public, max-age=31536000, immutable");

// Agar dynamic pages hain, toh unke liye caching ko control karein
header("Expires: Thu, 31 Dec 2099 23:59:59 GMT");
header("Pragma: cache");
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>JHAVERI INFRAPROJECTS ELEVATING LIVES !</title>
    <link rel="icon" href="assets/img/jhaveri-fevicon.jpg" type="image/png" />
    <link rel='stylesheet' href='assets/css/faicon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
    <link
        href="http://fonts.googleapis.com/css?family=Roboto:400%7CCormorant+Garamond:400%7CRaleway:500&amp;display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">
</head>

<body
    class="home qodef-header--light qodef-header--divided ">
    <div id="qodef-page-wrapper" class="">
        <header id="qodef-page-header">
            <div id="qodef-page-header-inner">
                <div class="qodef-divided-header-left-wrapper">
                    <div class="qodef-widget-holder">
                        <div id="custom_html-2"
                            class="widget_text widget widget_custom_html qodef-header-widget-area-two"
                            data-area="header-widget-two">
                            <div class="textwidget custom-html-widget">
                                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--outlined qodef-size--small qodef-html--link"
                                    href="" target="_self" rel="noopener" title="view" alt="view">
                                    <span class="qodef-m-text">request a viewing</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <nav class="qodef-header-navigation" role="navigation" aria-label="Divided Left Menu">
                        <ul class="menu">
                            <li>
                                <a href="index.php" rel="noopener" title="home" alt="home"><span class="qodef-menu-item-text">Home</span><span
                                        class="qodef-menu-arrow">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10"
                                            xml:space="preserve">
                                            <g>
                                                <polygon
                                                    points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="about-us.php" rel="noopener" title="link" alt="link"><span class="qodef-menu-item-text">About</span><span
                                        class="qodef-menu-arrow">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10"
                                            xml:space="preserve">
                                            <g>
                                                <polygon
                                                    points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031" />
                                            </g>
                                        </svg>
                                    </span></a>

                            </li>
                            <li class="qodef-has-submenu">
                                <a href="" rel="noopener" title="project" alt="project">
                                    <span class="qodef-menu-item-text">Projects</span>
                                    <span class="qodef-dropdown-icon">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </a>

                                <!-- Dropdown Menu -->
                                <ul class="qodef-submenu">
                                    <li><a href="project.php" rel="noopener" title="sliver veda" alt="sliver veda">Sliver Veda</a></li>
                                    <li><a href="project.php" rel="noopener" title="sliver lake" alt="sliver lake">Sliver lake Vista</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <a itemprop="url" class="qodef-header-logo-link qodef-height--set" href="index.php" rel="noopener" title="Jhaveri-logo" alt="Jhaveri-logo" style="height:68px"
                    rel="home">
                    <img loading="lazy" src="assets/img/Jhaveri-logo.webp"
                        class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
                    <img loading="lazy" src="assets/img/Jhaveri-logo.webp"
                        class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" />
                </a>
                <div class="qodef-divided-header-right-wrapper">
                    <nav class="qodef-header-navigation" role="navigation" aria-label="Divided Right Menu">
                        <ul id="menu-divided-menu-right" class="menu">
                            <li>
                                <a href="blog.php" rel="noopener" title="blog" alt="blog"><span class="qodef-menu-item-text">Blog </span><span
                                        class="qodef-menu-arrow">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10"
                                            xml:space="preserve">
                                            <g>
                                                <polygon
                                                    points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031" />
                                            </g>
                                        </svg>
                                    </span></a>

                            </li>
                            <li>
                                <a href="gallery.php" rel="noopener" title="gallery" alt="gallery"><span class="qodef-menu-item-text">Gallery </span><span
                                        class="qodef-menu-arrow">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10"
                                            xml:space="preserve">
                                            <g>
                                                <polygon
                                                    points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031" />
                                            </g>
                                        </svg>
                                    </span></a>

                            </li>
                            <li><a
                                    href="contact-us.php" rel="noopener" title="contact" alt="contact"><span class="qodef-menu-item-text">Contact Us</span></a></li>

                        </ul>
                    </nav>
                    <div class="qodef-widget-holder">
                        <div id="hendon_core_side_area_opener-3"
                            class="widget widget_hendon_core_side_area_opener qodef-header-widget-area-one"
                            data-area="header-widget-one"><a href="javascript:void(0)"
                                class="qodef-opener-icon qodef-m qodef-source--svg-path qodef-side-area-opener"
                                style="margin: 0 0 0 10px" rel="noopener" title="link" alt="link">
                                <span class="qodef-m-icon qodef--open">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64.584px"
                                        height="21.75px" viewBox="0 0 64.584 21.75"
                                        enable-background="new 0 0 64.584 21.75" xml:space="preserve">
                                        <rect x="7.292" y="6.875" fill="#FFFFFF" width="50" height="1" />
                                        <rect x="7.292" y="13.875" fill="#FFFFFF" width="50" height="1" />
                                    </svg> </span>
                            </a></div>
                    </div>
                </div>
            </div>
        </header>
        <header id="qodef-page-mobile-header">
            <div id="qodef-page-mobile-header-inner">
                <a itemprop="url" class="qodef-mobile-header-logo-link" href="index.php" style="height:55px"
                    rel="home" rel="noopener" title="logo" alt="logo">
                    <img loading="lazy" width="140" height="136" src="assets/img/Jhaveri-logo.webp"
                        class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
                </a>
                <a class="qodef-mobile-header-opener" href="#" rel="noopener" title="link" alt="link">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="64.584px" height="21.75px" viewBox="0 0 64.584 21.75"
                        enable-background="new 0 0 64.584 21.75" xml:space="preserve">
                        <rect x="7.292" y="6.875" fill="#000" width="50" height="1" />
                        <rect x="7.292" y="13.875" fill="#000" width="50" height="1" />
                    </svg>
                </a>
                <nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
                    <ul id="menu-main-menu-2" class="qodef-content-grid">
                        <li class="">
                            <a href="index.php" rel="noopener" title="home" alt="home"><span class="qodef-menu-item-text">Home</span></a>
                        </li>
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-726 qodef-menu-item--narrow">
                            <a href="about-us.php" rel="noopener" title="about" alt="about"><span class="qodef-menu-item-text">About</span> </a>

                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-728 qodef-menu-item--narrow"><a href="#"><span class="qodef-menu-item-text">Projects</span><span class="qodef-menu-arrow">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10" xml:space="preserve">
                                        <g>
                                            <polygon points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031"></polygon>
                                        </g>
                                    </svg>
                                </span></a>
                            <div class="qodef-drop-down-second">
                                <div class="qodef-drop-down-second-inner">
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2095"><a href="" rel="noopener" title="Sliver Veda" alt="Sliver Veda"><span class="qodef-menu-item-text">Sliver Veda</span></a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2191"><a href="" rel="noopener" title="Sliver lake Vista" alt="Sliver lake Vista"><span class="qodef-menu-item-text">Sliver lake Vista </span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-729 qodef-menu-item--narrow">
                            <a href="blog.php" rel="noopener" title="Blog" alt="blog"><span class="qodef-menu-item-text">Blog</span></a>
                        </li>
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-727 qodef-menu-item--narrow">
                            <a href="gallery.php" rel="noopener" title="Gallery" alt="Gallery"><span class="qodef-menu-item-text">Gallery</span></a>
                        </li>
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-727 qodef-menu-item--narrow">
                            <a href="contact-us.php" rel="noopener" title="Contact" alt="Contact"><span class="qodef-menu-item-text">Contact Us</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>