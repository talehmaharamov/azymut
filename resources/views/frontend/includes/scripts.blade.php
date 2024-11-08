<script src="{{ asset('frontend/js/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jqueryui.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/counter-up.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/swiper.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/twinmax.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/split-text.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/text-plugins.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/metismenu.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/waypoint.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/waw.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/aos.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/jquery-timepicker.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/sal.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/jquery-slideNav.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/hover-revel.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/contact-form.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('frontend/js/plugins/swip-img.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.heder-two .header-two-container .header-main-wrapper .rts-header-right .bottom .nav-area ul li').hover(
            function() {
                // Bu, hover olunduqda
                $(this).children('a').css('color', '#00AAFF');
            },
            function() {
                // Bu, hover çıxıldıqda
                $(this).children('a').css('color', '');
            }
        );
    });
    document.addEventListener('DOMContentLoaded', function () {

        const dropdowns = document.querySelectorAll('.has-dropdown > a');
        const mobileMenuButton = document.getElementById('menu-btn');
        const closeSidebarButton = document.getElementById('close-sidebar-button');
        const sidebar = document.querySelector('.mobile-menu');

        // Handle dropdown toggling
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function (event) {
                event.preventDefault();

                const parent = this.parentElement;

                // Close all sibling dropdowns
                const siblings = Array.from(parent.parentElement.children);
                siblings.forEach(sibling => {
                    if (sibling !== parent) {
                        sibling.classList.remove('active');
                        const submenu = sibling.querySelector('.submenu, .submenu-third-level');
                        if (submenu) {
                            submenu.style.display = 'none';
                        }
                    }
                });

                // Toggle the current dropdown
                parent.classList.toggle('active');

                const submenu = parent.querySelector('.submenu, .submenu-third-level');

                if (submenu) {
                    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                }
            });
        });

        // Ensure sidebar is hidden on page load
        sidebar.classList.remove('active');

        // Handle sidebar toggle button
        mobileMenuButton.addEventListener('click', function () {
            sidebar.classList.add('active');
        });

        // Handle sidebar close button
        closeSidebarButton.addEventListener('click', function () {
            sidebar.classList.remove('active');
        });
    });





</script>

