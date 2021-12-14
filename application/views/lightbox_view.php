<!DOCTYPE html>
<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- Lightbox_view page displays the elements affected by the jQuery lightbox plugin. -->
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <title>Lightbox Example</title>
  <!-- Link of Lightbox CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/lightbox2/dist/css/lightbox.min.css'); ?>">
</head>
<body>
  <section>
    <!-- Displays logo -->
    <img src="<?php echo base_url('assets/images/Squid-Game-Logo.png'); ?>">
    <div>
      <!-- Displays image of GL-RL_Doll -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Doll.png'); ?>" data-lightbox="example-2" data-title="GL-RL_Doll"><img class="example-image" src="<?php echo base_url('assets/images/SG_Doll.png'); ?>" alt="GL-RL_Doll" /></a>
      <!-- Displays image of SG_Frontman -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Frontman.png'); ?>" data-lightbox="example-2" data-title="SG_Frontman"><img class="example-image" src="<?php echo base_url('assets/images/SG_Frontman.png'); ?>" alt="SG_Frontman"/></a>
      <!-- Displays image of SG_RedinMask01 -->  
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_RedinMask01.png'); ?>" data-lightbox="example-2" data-title="SG_RedinMask01"><img class="example-image" src="<?php echo base_url('assets/images/SG_RedinMask01.png'); ?>" alt="SG_RedinMask01"/></a>
      <!-- Displays image of SG_RedinMask02 -->  
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_RedinMask02.png'); ?>" data-lightbox="example-2" data-title="SG_RedinMask02"><img class="example-image" src="<?php echo base_url('assets/images/SG_RedinMask02.png'); ?>" alt="SG_RedinMask02"/></a>
      <!-- Displays image of Hwang-Jun-Ho -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Hwang-Jun-Ho.png'); ?>" data-lightbox="example-2" data-title="Hwang-Jun-Ho"><img class="example-image" src="<?php echo base_url('assets/images/SG_Hwang-Jun-Ho.png'); ?>" alt="Hwang-Jun-Ho"/></a>
      <!-- Displays image of Oh-Il-Nam -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Oh-Il-Nam.png'); ?>" data-lightbox="example-2" data-title="Oh-Il-Nam"><img class="example-image" src="<?php echo base_url('assets/images/SG_Oh-Il-Nam.png'); ?>" alt="Oh-Il-Nam"/></a>
      <!-- Displays image of Seong-Gi-Hun -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Seong-Gi-Hun.png'); ?>" data-lightbox="example-2" data-title="Seong-Gi-Hun"><img class="example-image" src="<?php echo base_url('assets/images/SG_Seong-Gi-Hun.png'); ?>" alt="Seong-Gi-Hun"/></a>
      <!-- Displays image of Sang-Woo -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Sang-Woo.png'); ?>" data-lightbox="example-2" data-title="Sang-Woo"><img class="example-image" src="<?php echo base_url('assets/images/SG_Sang-Woo.png'); ?>" alt="Sang-Woo"/></a>
      <!-- Displays image of Kang-Sae-Byeok -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Kang-Sae-Byeok.png'); ?>" data-lightbox="example-2" data-title="Kang-Sae-Byeok"><img class="example-image" src="<?php echo base_url('assets/images/SG_Kang-Sae-Byeok.png'); ?>" alt="Kang-Sae-Byeok"/></a>
      <!-- Displays image of Abdul-Ali -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Abdul-Ali.png'); ?>" data-lightbox="example-2" data-title="Abdul-Ali"><img class="example-image" src="<?php echo base_url('assets/images/SG_Abdul-Ali.png'); ?>" alt="Abdul-Ali"/></a>
      <!-- Displays image of Jang-Deok-Su -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Jang-Deok-Su.png'); ?>" data-lightbox="example-2" data-title="Jang-Deok-Su"><img class="example-image" src="<?php echo base_url('assets/images/SG_Jang-Deok-Su.png'); ?>" alt="Jang-Deok-Su"/></a>
      <!-- Displays image of Han-Mi-Nyeo -->
      <a class="example-image-link" href="<?php echo base_url('assets/images/SG_Han-Mi-Nyeo.png'); ?>" data-lightbox="example-2" data-title="Han-Mi-Nyeo"><img class="example-image" src="<?php echo base_url('assets/images/SG_Han-Mi-Nyeo.png'); ?>" alt="Han-Mi-Nyeo"/></a>
      
    </div>   
  </section>
  <!-- Link of Lightbox Script w/ jquery.min.js -->
  <script src="<?php echo base_url('assets/lightbox2/dist/js/lightbox-plus-jquery.min.js'); ?> "></script>
  <!-- Styles -->
  <style type="text/css">
    html{
      background-image: linear-gradient(to right, #010101, #a09696); 
    }
    section{
      text-align: center;
      object-position: center;
      padding: 30px;
      padding-bottom: 78px;
      padding-top: 78px;
      background-color: #f6f6f6;
      margin:35px;
      border-radius: 25px;
    }
    a, img{
      border-radius: 15px;
      height: 280px;
    }
  </style>
</body>
</html>
