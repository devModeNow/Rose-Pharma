      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    <?php 
      if(isset($_SESSION['userid'])):
    ?>
      <script src="../../dist/js/vendor.js"></script>
      <script src="../../dist/js/adminx.js"></script>
    <?php else: ?>
      <script src="dist/js/vendor.js"></script>
      <script src="dist/js/adminx.js"></script>
    <?php endif; ?>

      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="dist/js/vendor.js"></script>
    <script src="dist/js/adminx.vanilla.js"></script-->
    </div>
  </body>
</html>