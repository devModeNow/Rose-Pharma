<?php

    include '../inc/sidenav.php';

    if(isset($_SESSION['userid'])){

?>
        

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Settings</h1>
            </div>

            <div class="row">
                
            </div>

          </div>
        </div>

<?php

    require '../inc/footer.php';

    } else {

        header('location:../logout.php');

    }

?>