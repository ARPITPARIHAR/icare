<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>icare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header-area header-transparent" style="background-color: #121643; height: 100px;">
        <div class="main-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-1 col-md-1">
                        <div class="logo" style="background-color: white; width: 150px; height: 95px; border-radius: 10px;">
                            <a href="/"><img src="assets/img/logo/icare_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation" class="desktop-menu">
                                    <li class="" style="font-family: cursive; margin-left: -30%;"><a href="/">Home</a></li>
                                    <li class="" style="font-family: cursive; font-size: 24px !important;"><a href="about">About</a></li>
                                    <li class="" style="font-family: cursive; font-size: 24px;"><a href="services">Services</a></li>
                                    <li class="" style="font-family: cursive; font-size: 24px;"><a href="contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 d-flex justify-content-end">
                        <div class="phone-bg">
                            <a href="tel:9999844944">
                                <i class="fa fa-phone"></i> Call Now: <span class="phone-number">9999-844-944</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hamburger icon for mobile menu -->
         <a class="mobile-show" href="#" id="mobile-menu-toggle" style="display: none;">
        <i class="fas fa-bars" style="float: right; font-size: 28px;margin-top:-40px;margin-right:20px;"></i>
    </a>
    </header>

    <!-- Mobile menu -->
    <div class="mobile-menu">
        <ul id="mobile-menu-items">
            <li class=""><a href="/">Home</a></li>
            <li class=""><a href="about">About</a></li>
            <li class=""><a href="services">Services</a></li>
            <li class=""><a href="contact">Contact Us</a></li>
        </ul>
    </div>

    <style>
       @media (max-width: 767px) {
        .logo {
               width: 100px;
               height: 150px;
               margin-top: -1px;
               margin-left: -18px;
           }
       
           .logo img {
               width: 100%;
           }
           .d-flex {
               display: none !important;
           }
       }
       
       .phone-number {
           display: block;
       }

       /* Define the blink animation */
       @keyframes blink {
           0% { opacity: 1; }
           50% { opacity: 0; }
           100% { opacity: 1; }
       }

       /* Apply the animation to the "Call Now" link */
       .phone-bg a {
           animation: blink 2s infinite; /* 2s is the duration, you can adjust it as needed */
           text-decoration: none; /* Remove the underline */
       }

       @media (max-width: 767px) {
           .d-flex.justify-content-end {
               display: none !important; /* Hide the element on mobile screens */
           }
       }

       /* Mobile menu toggle */
       .mobile-menu-toggle {
           display: none;
       }

       @media (max-width: 768px) {
           .mobile-menu-toggle {
               display: block;
               position: fixed;
               top: 20px;
               right: 20px;
               z-index: 999;
           }
           .desktop-menu {
               display: none;
           }
           .mobile-menu {
               display: block;
               background-color: #121643;
               padding: 20px;
               position: fixed;
               top: 0;
               right: -100%;
               width: 300px;
               height: 300px;
               z-index: 998;
               transition: right 0.3s ease-in-out;
           }
           .show-mobile-menu {
               right: 0;
           }
       }
    </style>
<script>
    // JavaScript for mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    const toggleMobileMenu = () => {
        mobileMenu.classList.toggle('show-mobile-menu');
    };
    
    // Attach the click event
    mobileMenuToggle.addEventListener('click', toggleMobileMenu);
    
    // Attach the touchend event for touch devices
    mobileMenuToggle.addEventListener('touchend', toggleMobileMenu);
    
    // JavaScript to show the hamburger icon on mobile screens
    const isMobileScreen = window.innerWidth <= 767; // Adjust the breakpoint as needed
    if (isMobileScreen) {
        mobileMenuToggle.style.display = 'block';
    }
</script>

</body>
</html>
