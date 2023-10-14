<div class="d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="">
            Rose Pharmacy Bongabon
          </a>
        </div>
        <?php
        
          if(isset($_SESSION['err_message'])){

        ?>
            <div class="alert alert-danger" role="alert">
              Wrong credentials. Please try again.
            </div>
        <?php

          }
        
        ?>
        <div class="card mb-0">
          <div class="card-body">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                <input type="text" required name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                <input type="password" required name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-sm btn-block btn-primary">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>