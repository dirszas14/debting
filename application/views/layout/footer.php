<!-- Main Footer -->
  
  <div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script>
 $(function () {
    $('#datadebitur').DataTable()
    $('#kalender').fullCalendar()
  })
 </script>
</body>
</html>