<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="js/ringio.js"></script>
    <script src="js/polyfill.object-fit.min.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script>
        objectFit.polyfill({
        selector: 'img', // this can be any CSS selector
        fittype: 'cover' // either contain, cover, fill or none
    });
        $(document).ready(function(){
           $('.make-switch').bootstrapSwitch();
       });

    </script>

    <!-- <script src="tooltip-viewport.js"></script> -->

    <!-- Latest compiled and minified JavaScript -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->

</body>
</html>
