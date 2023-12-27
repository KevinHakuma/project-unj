<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

    <header>
        <div class="container">
            <!-- <div class="logo">Your Logo</div> -->
            <img class="logo" src="images/Logo UNJ.png" alt="Logo ">
            <div class="brand"><p>UNIVERSITAS NEGERI JAKARTA</p></div>
            <button class="login-btn">Login</button>
        </div>
    </header>