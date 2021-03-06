<footer class="blue lighten-2 white-text center footer-copyright">
    <p class="flow-text">Copyright &copy; 2020-{{Carbon\carbon::now()->year}} Test Smart.</p>
</footer>
<script src="{{ asset('materialize/js/jquery.js') }}"></script>
<script src="{{ asset('materialize/js/materialize.js') }}"></script>



@section('footerSection') @show
<script type="text/javascript">
    // SIDEBAR
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('.materialboxed').materialbox();
        $('.tooltipped').tooltip();
        $(".dropdown-trigger").dropdown();
        $('select').formSelect();
        $('.modal').modal();
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        });
        $('.collapsible').collapsible({
            accordion: true, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            onOpen: function(el) {}, // Callback for Collapsible open
            onClose: function(el) {} // Callback for Collapsible close
        });

        $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
            onOpen: function(el) {},
            /* Do Stuff* / }, // A function to be called when sideNav is opened*/
            onClose: function(el) {} /* Do Stuff* / }, // A function to be called when sideNav is closed*/
        });

        // $('.side-nav li').click(function() {
        //     $('.side-nav li.active').removeClass('active');
        //     $(this).closest('li').addClass('active');
        // });

        $('.dropchange .head').on('click', function() {
            $(this)
                .find('.changed')
                .toggleClass('fa-angle-down')
                .toggleClass('fa-angle-right');
        });
    });
//nyoba codepen

</script>