<nav id="topmenu"
    class="row <?= (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true) ? 'position-fixed' : 'position-sticky' ?> fixed-top justify-content-between align-items-center | m-auto text-white | flex flex-wrap <?= (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true) ? 'fixed' : 'sticky' ?> top-0 right-0 left-0 z-1030 justify-between items-center">
    <div class="col-1 p-0 || w-1/2 xl:w-1/12">
        <a href="/">
            <img id="himti-icon" src="assets/img/organization-logo/himti-icon.svg" alt="HIMTI BINUS University">
        </a>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="col-11 text-end p-0 d-xl-none || w-1/2 xl:w-11/12 text-right xl:hidden">
        <ul class="list-unstyled m-0 || list-none">
            <li class="btn-menu-toggle d-inline-block fw-bold || inline-block font-bold cursor-pointer"
                onClick="toggleMobileMenu()"><i class="bi bi-list" aria-hidden="true"></i> MENU</li>
        </ul>
    </div>
    <!-- Desktop Menu -->
    <div id="desktopMenu"
        class="col-12 col-xl-11 text-xl-end p-0 d-none d-xl-inline || w-full xl:w-11/12 xl:text-right hidden xl:inline">
        <hr class="d-xl-none || xl:hidden opacity-30" style="margin: 1rem 0;">
        <ul class="list-unstyled m-0 || list-none">
            <?php require_once('./components/menu-items.php');
            $uri = $_SERVER['REQUEST_URI'];
            $current_url = basename($uri);
            
            foreach($MENU_ITEMS as $menu): ?>
            <li class="d-xl-inline-block xl:inline-block nav-li">
                <?php
                $menuActive = $menu['href'] === $current_url;
                
                if ($menu['category'] === 'event' && isset($menu['img_fill'])) {
                    $icon_html = '
                        <img 
                            src="./assets/img/events/' . $menu['img_fill'] . '.png" 
                            alt="' . htmlspecialchars($menu['label']) . '" 
                            style="
                                height: 20px;
                            "
                        >
                    ';
                } elseif (isset($menu['icon_fill'])) {
                    $icon_html = '<i class="' . $menu['icon_fill'] . '" aria-hidden="true"></i>';
                } else {
                    $icon_html = '';
                }
                ?>

                <?php if ($menuActive): ?>
                <strong><?= $icon_html ?> <?= $menu['label'] ?></strong>
                <?php else: ?>
                <a href="<?= $menu['href'] ?>">
                    <?= $icon_html ?> <?= $menu['label'] ?>
                </a>
                <?php endif; ?>
            </li>


            <?php endforeach ?>

        </ul>
    </div>
</nav>

<script>
// Minimum width
const maxWidth = 1199;
var showMobileMenu = false;

// Function to toggle mobile menu
var topMenu = document.getElementById("topmenu");
var desktopMenu = document.getElementById("desktopMenu");
var mobileMenu = document.getElementById("mobileMenu");

function toggleMobileMenu() {
    var screenWidth = window.innerWidth || 0
    if (screenWidth > maxWidth || showMobileMenu) {
        // Close menu
        showMobileMenu = false;
        desktopMenu.className = desktopMenu.className.replace(" d-inline", " d-none").replace(" inline", " hidden");
        topMenuScroll();
    } else {
        // Open menu
        showMobileMenu = true;
        desktopMenu.className = desktopMenu.className.replace(" d-none", " d-inline").replace(" hidden", " inline");
        topmenu.style.backgroundColor = "#4159A7";
    }
}

var deviceMemory = navigator.deviceMemory || 2;

function topMenuScroll() {
    var offset = window.pageYOffset;
    var threshold = 400;
    <?php if (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true): ?>
    if (showMobileMenu == true) {
        // Ignore
        return
    }
    if (deviceMemory > 1) {
        // Use smoother transitions
        var percent = offset / threshold;
        if (percent > 1) percent = 1;
        topmenu.style.backgroundColor = "rgba(" + (65 * percent) + ", " + (89 * percent) + ", " + (167 * percent) +
            ", " + (percent * 0.75 + 0.25) + ")";
    } else if (offset <= threshold / 2) {
        topmenu.style.backgroundColor = "#4159A7";
    } else {
        topmenu.style.backgroundColor = "rgba(0, 0, 0, 0.25)";
    }
    <?php endif; ?>
}

<?php if (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true): ?>
topmenu.style.backdropFilter = "blur(10px)";
topmenu.style.backgroundColor = "rgba(0, 0, 0, 0.25)";
window.addEventListener("scroll", topMenuScroll, {
    passive: true
});
<?php else: ?>
topmenu.style.backgroundColor = "#4159A7";
<?php endif; ?>
</script>