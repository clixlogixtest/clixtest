<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <title>Ranch Builder</title>
   </head>
   <style>
      @media(max-width:991px)
      {
      .linecontainer,
      .containerSize{width:90%}
      }
      @media(max-width:475px)
      {
      h1{font-size: 26px;
      line-height: 1.1;}
      }
      @media(max-width:320px)
      {
      #confirmButton .confirmBtn{padding: 20px 45px!important;}
      h3{font-size: 16px;}
      }
      #confirmButton 
      {
        text-align: center;
        margin-top: 50px;
      }
      #confirmButton .confirmBtn 
      {
        background-color: #44bbff;
        color: #fff;
        padding: 20px 70px;
        font-size: 18px;
        font-weight: 600;
        transition: all 0.2s ease-in;
      }
      #confirmButton .confirmBtn:hover 
      {
        background-color: #20a7f5;
        color: #fff;
      }
   </style>
   <body>
      <!-- section -->
      <div class="email_draft">
         <div class="containerSize" style="width: 850px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">
            <div id="logo" style="text-align: center;"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></div>
            <div class="banner" style="margin-top: 20px">        
              <img height="height: 300px; " src="<?php echo base_url();?>assets/images/logo.png">
            </div>
         <?php echo $message; ?>
         <!-- <div id="socialMedia" style="text-align: center; margin-top: 50px; background-color: #F1F0F0; padding: 30px 0">
            <h3 style="font-size: 18px;">Tell your friends or co-workers about Easy Tutor!</h3>
            <ul>
               <li style="display: inline-block; margin: 10px;"><a href=""><img style="width: 33px;" src="<?= base_url('assets/img/email_draft/twitter-logo-button.png'); ?>" alt=""></a></li>
               <li style="display: inline-block; margin: 10px;"><a href=""><img style="width: 33px;" src="<?= base_url('assets/img/email_draft/facebook-logo-button.png'); ?>" alt=""></a></li>
               <li style="display: inline-block; margin: 10px;"><a href=""><img style="width: 33px;" src="<?= base_url('assets/img/email_draft/googleplus-logo%20(1).png'); ?>" alt=""></a></li>
               <li style="display: inline-block; margin: 10px;"><a href=""><img style="width: 33px;" src="<?= base_url('assets/img/email_draft/linkedin-button.png'); ?>" alt=""></a></li>
            </ul>
         </div> -->
      </div>
      <div>
         <div class="linecontainer" style="width: 850px; margin: 0 auto; padding: 0;">
            <div id="line" style="border: 1px solid #ccc; margin-top: 10px;"></div>
            <p style="text-align: center; color: #ccc; margin-top: 10px;">COPYRIGHT © Easy Tutor 2018</p>
         </div>
      </div>
      </div>
   </body>
</html>