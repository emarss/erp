<!-- jQuery -->
<script src="{{ asset('vendor/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('vendor/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap.min.js') }}"></script>

<!-- Simplebar -->
<!-- Used for adding a custom scrollbar to the drawer -->
<script src="{{ asset('vendor/simplebar.js') }}"></script>


<!-- Vendor -->
<script src="{{ asset('vendor/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/moment.min.js') }}"></script>


<!-- APP -->
<script src="{{ asset('js/color_variables.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('vendor/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/dataTables.bootstrap4.js') }}"></script>


<script src="{{ asset('vendor/dom-factory.js') }}"></script> <!-- DOM Factory -->
<script src="{{ asset('vendor/material-design-kit.js') }}"></script> <!-- MDK -->
<script>
    (function () {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit()


        // Connect button(s) to drawer(s)
        var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

        sidebarToggle.forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                var drawer = document.querySelector(selector)
                if (drawer) {
                    if (selector == '#default-drawer') {
                        $('.container-fluid').toggleClass('container--max');
                    }
                    drawer.mdkDrawer.toggle();
                }
            })
        })
    })();

    function confirmDelete(url) {
        $("#confirmDelete #actionButton").attr('href', url);
        $('#confirmDelete').modal('show');
    }
</script>
