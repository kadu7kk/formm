<div class="card text-center m-auto" style="width: 35rem; margin-top: 150px!important;">
    <div class="card-body">
      <div class="d-flex"><img src="./assets/images/icon-list.svg" alt="" style="width: 30px; height:30px;"></div>
      <h3 class="card-title"  style="font-family: 'Roboto', sans-serif; color: hsl(240deg 7.94% 24.71%);"> Thanks for subscribing!</h3>
      <p class="card-text f" style="text-align: center;"> 
      <?php 
      $txt_email = $_POST['email'];
      echo "A confirmation email has been sent to <b> $txt_email </b> Please open it and click the button inside to confirm your subscription. Dismiss message"
      ?>
      </p>
      <button class="btn  w-75 f" id="btn_2" style="color: white; background-color: hsl(240deg 7.94% 24.71%);">Dismiss Menssage</button>
    </div>
</div>
