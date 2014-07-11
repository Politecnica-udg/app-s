<div class="container">
        <?php if($_SESSION['error'] =='si'):?>
                 <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>[error]!</strong> [login_error]
                </div>
        <?php endif;?>
      <form class="form-signin" role="form" action="" method="post">
        <img src="main/templates/complementos/img/logo.png" alt="Smiley face" class="img-rounded logo_udg">
        <h2 class="form-signin-heading">[Ini_sec]</h2>
        <input class="form-control" placeholder="[cod]" name="user" required="" autofocus="">
        <input class="form-control" placeholder="[pas]" required="" name="ps" type="password">
        [tipos]
        <select class="form-control" name="ops">
            <option>[tipo_Al]</option>
            <option>[tipo_Ms]</option>
            <option>[tipo_Ad]</option>
            <option>[tipo_Pf]</option>
        </select>
        <label class="checkbox">
          <input value="remember-me" type="checkbox"> [reck]
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">[login_index]</button>
      </form>

    </div> <!-- /container -->