
 <footer>
    <div class="pull-right">
      <a href=""> Logical Code </a>
    </div>
    <div class="clearfix"></div>
</footer>
   <!-- jQuery -->
    <script src="public/templates/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/templates/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/templates/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/templates/gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/templates/gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/templates/gentelella-master/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/templates/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="public/templates/gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/templates/gentelella-master/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/templates/gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="public/templates/gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/templates/gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/templates/gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/templates/gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/templates/gentelella-master/production/js/flot/jquery.flot.orderBars.js"></script>
    <script src="public/templates/gentelella-master/production/js/flot/date.js"></script>
    <script src="public/templates/gentelella-master/production/js/flot/jquery.flot.spline.js"></script>
    <script src="public/templates/gentelella-master/production/js/flot/curvedLines.js"></script>
    <!-- JQVMap -->
    <script src="public/templates/gentelella-master/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/templates/gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/templates/gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="public/templates/gentelella-masterjs/moment/moment.min.js"></script> -->
    <!-- <script src="public/templates/gentelella-masterjs/datepicker/daterangepicker.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="public/templates/gentelella-master/build/js/custom.min.js"></script>
  
   <!-- FILE JS -->
 <?php 
    if (isset($js)) {
         for ($i=0; $i < count($js); $i++) { 
             echo $js[$i];
        }
     }
?>
 
  </body>
</html>
