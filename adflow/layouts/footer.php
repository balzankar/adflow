<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<footer>designed and developed by <b>Bal World Technologies.</b></footer>
     </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript" src="libs/js/functions.js"></script>
  <script type="text/javascript" src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>


<script>
    $(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  document.getElementById("overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  </body>
</html>

<?php if(isset($db)) { $db->db_disconnect(); } ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->