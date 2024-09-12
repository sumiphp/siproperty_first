<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>SI Property - Apartments in Trivandrum</title>
<?php error_reporting(0);?>

<!-- Fav Icon -->
<link rel="icon" href="<?php echo base_url().'uploads/settings/'.$settings->favicon;?>" type="image/x-icon">


<!-- Google Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Make sure to include Font Awesome CDN in the <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Stylesheets -->
<link href="<?php echo base_url().'siproperty/assets/css/font-awesome-all.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/flaticon.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/owl.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/bootstrap.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/jquery.fancybox.min.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/animate.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/jquery-ui.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/nice-select.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/color/theme-color.css';?>" id="jssDefault" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/switcher-style.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/style.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'siproperty/assets/css/responsive.css';?>" rel="stylesheet">

<style>
    /* Common Styles for Carousels */
.banner-carousel .slide-item,
.feature-carousel .slide-item {
    position: relative;
    width: 100%;
    height: 130vh; /* Set height to 100% of the viewport height */
    overflow: hidden;
}

.banner-carousel .image-layer,
.feature-carousel .image-layer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

.banner-carousel .auto-container,
.feature-carousel .auto-container {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.banner-carousel .content-box,
.feature-carousel .content-box {
    text-align: center;
    color: #fff;
}

/* Specific Styles for Banner Carousel */
.banner-carousel .content-box h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.banner-carousel .content-box p {
    font-size: 1.25rem;
}

/* Specific Styles for Feature Carousel */
.feature-carousel .content-box h2 {
    font-size: 2rem;
    margin-bottom: 0.75rem;
}

.feature-carousel .content-box p {
    font-size: 1rem;
}


@media(max-width:767px){
  .experience-banner.mr-3 {
    display: none !important;
}
}



</style>
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="image-preloader">
                            <img src="<?php echo base_url().'siproperty/assets/images/sipropertylogo.png';?>" style="width: 15%;" alt="Preloader Image">
                        </div>
                        <div class="txt-loading">
                            <span data-text-preloader="S" class="letters-loading">S</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="" class="letters-loading"> &nbsp;</span>
                            <span data-text-preloader="P" class="letters-loading">P</span>
                            <span data-text-preloader="R" class="letters-loading">R</span>
                            <span data-text-preloader="O" class="letters-loading">O</span>
                            <span data-text-preloader="P" class="letters-loading">P</span>
                            <span data-text-preloader="E" class="letters-loading">E</span>
                            <span data-text-preloader="R" class="letters-loading">R</span>
                            <span data-text-preloader="T" class="letters-loading">T</span>
                            <span data-text-preloader="Y" class="letters-loading">Y</span>
                          
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- main header -->
         <?php include('header.php');?>
       
       
       
        <section class="banner-style-two centred">

       
       
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <?php 
            
         //print_r($carousel);
            foreach($carousel as $car){?>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?php echo base_url().'uploads/carousel/'.$car['picture'];?>)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2 style="font-family: 'Argesta', sans-serif;"> <?php echo $car['maintitle'];?></h2>
                            <p style="font-family: 'Argesta', sans-serif;"><?php echo $car['subtitle'];?></p>
                        </div> 
                    </div>
                </div>
            <?php }?>
               
            </div>
            
          
            
            <div class="contact-box">
                <div class="contact-info">
                    <span class="circle-icon ml-2" style="display: inline-flex; font-size: 18px; align-items: center; justify-content: center; background-color: #007538; border-radius: 50%; width: 40px; height: 40px;">
                        <a href="tel:+<?php echo $contactus->phoneno;?>" style="color: aliceblue; text-decoration: none; display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <i class="fa fa-phone" style=" color: aliceblue;"></i>
                        </a>
                    </span>
                  </div>
                  
                  
                  
                  
                  <p class="mt-3" style="font-size: 25px;">
                    <a href="https://wa.me/+<?php echo $contactus->whatsapp;?>" target="_blank" 
                       style="display: inline-flex; justify-content: center; align-items: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007538; color: white;">
                        <i class="fa-brands fa-whatsapp" style="font-size: 20px;"></i>
                    </a>
                </p>
                
                  
                  <p class="mt-3" style="color: #007538; font-size: 18px;">
                    <a href="mailto:<?php echo $contactus->emailid;?>" style="display: inline-block; width: 40px; height: 40px; line-height: 40px; border-radius: 50%; text-align: center; background-color: #007538; color: aliceblue;">
                        <i class="fa fa-envelope" style="vertical-align: middle; color: #e5f8ed;"></i>
                    </a>
                </p>
                
            </div>
        </section>
        <!-- banner-style-two end -->
    <div>
        <div class="col-lg-12 col-md-12 col-sm-12 content-column mb-5" style="display: flex; justify-content: center; align-items: center; text-align: center; flex-direction: column;">
            <div class="content_block_3 mt-5">
                <div class="content-container">
                    <div class="sec-title">  
                        <h2><?php echo $homepagedetails->label1;?></h2>
                    </div>
                    <div class="text">
                    <p><?php echo $homepagedetails->desc1;?></p>
                    <p><?php echo $homepagedetails->desc2;?></p>
                    <p><?php echo $homepagedetails2->desc3;?></p>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>    
                <!-- deals-section -->
        <section class="agents-page-section agents-list" style="background-color:#e5f8ed;">
            <div class="auto-container">
                <div class="row clearfix  ml-3">
                <div class="sec-title" style="margin-top: -5rem;">
                    <h5><?php echo $homepagedetails->label2;?></h5>
                    <h2 style="margin-top: -5px;">
                        <?php echo $homepagedetails->label3;?></h2>
                    </div>
                    <div class="experience-banner mr-3" style="margin-top: -3rem;">
                        <span class="experience-number"><?php echo $homepagedetails2->yearofexperience;?>+</span>
                        <span class="experience-text ">Years<br/> Experience</span>
                    </div>
                </div>
            </div>
                <div class="property-page-section property-list" style="margin-top: -7rem;">
                    <div class="auto-container" >
                        <div class="row clearfix" >
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                                <div class="property-content-side">
                                    
                                    <div class="wrapper list">
                                        <div class="deals-list-content list-item">
                                            <div class="deals-block-one">
                                            <?php foreach($projects as $prj){?> 
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="<?php echo base_url().'uploads/project/'.$prj['product_picture'];?>" alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category" style="margin-left: 26%;">Ongoing project</span>
                                                      
                                                    </div>
       
                                                       

                                                    <div class="lower-content">
                                                        <div class="title-text"><h4><a href="<?php echo base_url().'/home/propertydetails';?>/<?php echo $prj['id'];?>"><?php echo $prj['project_name'];?></a></h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4><?php echo $prj['price'];?></h4>
                                                            </div>
                                                            <ul class="clearfix" style="float: right;">
                                                                <li>
                                                                    
                                                                    <a href="tel:+<?php echo $prj['phoneno'];?>" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; background-color: green; border-radius: 50%; margin-right: 8px; text-decoration: none;">
                                                                        <i class="fa fa-phone" style="font-size: 18px; color: white;"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                           
                                                        </div>
                                                        <p><?php echo $prj['project_descripition'];?></p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i><?php echo $prj['bedroom'];?> Beds</li>
                                                            <li><i class="icon-15"></i><?php echo $prj['bathroom'];?> Baths</li>
                                                            <li><i class="icon-16"></i><?php echo $prj['squarefeet'];?> Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a href="<?php echo base_url().'/home/propertydetails';?>/<?php echo $prj['id'];?>" style="background-color: #007538;color: aliceblue;" class="theme-btn btn-two">See Details</a></div>
                                                            
                                                        </div>
                                                    </div>

                                                   



                                                </div>
                                                <?php } ?>
                                            </div>
                                          
                                            
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                    

                                
        </section>
        <!-- deals-section end -->
                                       
                  
           
        <!-- </section> -->
        <!-- deals-style-two end -->


        <!-- cta-section -->
        <section class="cta-section alternate-2 pb-240 centred" style="background-image: url(<?php echo base_url().'siproperty/assets/images/background/cta-1.jpg';?>);margin-top: -100px;">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text">
                        <h2><?php echo $homepagedetails->label4;?><br /><?php echo $homepagedetails->label5;?></h2>
                    </div>
                    <div class="btn-box">
                        <a href="<?php echo base_url().'Home/propertylist';?>" class="theme-btn btn-three">For Site Visit</a>
                        <a href="<?php echo base_url().'Home/contactUs';?>" class="theme-btn btn-one">Contact Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->
         <!-- completed project list starts -->
        <section class="agents-page-section agents-list"  style="margin-top: -40px">
            <div class="auto-container">
                <div class="row clearfix  ml-3">
                    <div class="sec-title">
                        <h5>Completed</h5>
                        <h2 style="margin-top: -5px;"> PROJECTS IN TRIVANDRUM</h2>
                        </div>
                        <div class="experience-banner mr-3">
                            <span class="experience-number"><?php echo $homepagedetails2->completedprojects;?>+</span>
                            <span class="experience-text">Completed Projects</span>
                        </div>
                    </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar agent-sidebar">

                            <div class="featured-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Ongoing Projects</h5>
                                </div>


                                <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <?php 
                                $i=0;
                                foreach($projects as $prj){
                                    if ($prj['addinside']==1){
                                    
                                    ?>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="<?php echo base_url().'uploads/project/'.$prj['product_picture'];?>" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Ongoing</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="<?php echo base_url().'/home/propertydetails';?>/<?php echo $prj['id'];?>"><?php echo $prj['project_name'];?></a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4><?php echo $prj['price'];?></h4>
                                                    </div>
                                                </div>
                                                <p><?php echo $prj['project_descripition'];?></p>
                                                <div class="btn-box"><a href="<?php echo base_url().'/home/propertydetails';?>/<?php echo $prj['id'];?>" class="theme-btn btn-one">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agents-content-side">
                              <div class="wrapper list">
                                <div class="agents-list-content list-item">
                                <?php 
                                
                                foreach($projectscomp as $prj){?>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="<?php echo base_url().'uploads/project/'.$prj['product_picture'];?>" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="<?php echo base_url().'Home/'.'propertydetails';?>/<?php echo $prj['id'];?>"><?php echo $prj['project_name'];?></a></h4>
                                                        <span class="designation"><?php echo $prj['agent'];?></span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="text">
                                                    <p><?php echo $prj['project_descripition'];?></p>
                                                </div>
                                                <ul class="info clearfix" style="margin-bottom: 0;">
                                                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $prj['emailid'];?>"><?php echo $prj['emailid'];?></a></li>
                                                    <li><i class="fa fa-phone"></i><a href="tel:+<?php echo $prj['phoneno'];?>">+<?php echo $prj['phoneno'];?></a></li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- projects completed end section -->
        
          <!-- chooseus-section -->
        <section class="chooseus-section alternate-2 bg-color-1" style="margin-top: -70px;">
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <h5><?php echo $homepagedetails2->label9;?></h5>
                        <h2><?php echo $homepagedetails2->label10;?></h2>
                    </div>
                    <div class="btn-box">
                        <a href="<?php echo base_url().'Home/propertylist';?>" class="theme-btn btn-one">For Site Visit</a>
                    </div>
                </div>

                
                <div class="lower-box">
                    <div class="row clearfix">
                    <?php foreach($chooseus as $set){?>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-26"></i></div>
                                    <h4><?php echo $set['caption'];?></h4>
                                    <p><?php echo $set['shortdesc'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->
         <!-- testimonial-style-two -->
         <section class="testimonial-style-two" style="background-image: url(<?php echo base_url().'siproperty/assets/images/background/testimonial-1.jpg';?>);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- New Video Column -->
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="video-container" >
                            <video width="100%" controls autoplay muted>
                                <source src="<?php echo base_url().'uploads/video/'.$homepagedetails2->videourl;?>" type="video/mp4">
                                no=Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“<?php echo $homepagedetails2->chairmanmessage;?>”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="<?php echo base_url().'uploads/homepage/'.$homepagedetails2->chimage1;?>" alt=""></figure>
                                        <h4 style="color: aliceblue;"><?php echo $homepagedetails2->name;?></h4>
                                        <span  class="designation"><?php echo $homepagedetails2->designation;?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end --> 

        <!-- funfact-section -->
        
        <section class="funfact-section centred">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php echo $homepagedetails2->yearofexperience;?>"><?php echo $homepagedetails2->yearofexperience;?></span>
                                    </div>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php echo $homepagedetails2->happyclients;?>"> <?php echo $homepagedetails2->happyclients;?></span>
                                    </div>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php echo $homepagedetails2->completedprojects;?>"><?php echo $homepagedetails2->completedprojects;?></span>
                                    </div>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="<?php echo $homepagedetails2->ongoingprojects;?>"><?php echo $homepagedetails2->ongoingprojects;?></span>
                                    </div>
                                    <p>Ongoing Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


<!-- about-section -->
        <section class="about-section"  style="background-color:#e5f8ed; margin-top: -100px;">
<div class="text-center" style="padding-left: 40px; padding-right: 40px; margin-top: 50px;">
                                <h2 class="pxp-section-h2"><?php echo $homepagedetails->label6;?></h2>
                                <p class="text-dark mt-4"><?php echo $homepagedetails2->desc6;?> </p>
                                <p class="text-dark mt-4"><?php echo $homepagedetails2->desc7;?></p>
<p class="text-dark mt-4"><?php echo $homepagedetails2->desc8;?> </p>

                            


                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
        
        <!-- testimonial-style-four end -->
       <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred" style="margin-top: -25px;">
                    <h5><?php echo $homepagedetails2->label7;?></h5>
                    <h2><?php echo $homepagedetails2->label8;?></h2>
                    <p><?php echo $homepagedetails2->desc5;?></p>
                </div>
               
                <div class="row clearfix">
                <?php foreach($blog as $blg){?> 
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="<?php echo base_url().'Home/blogdetails/'.$blg['blogid'];?>"><img src="<?php echo base_url().'uploads/blog/'.$blg['picture'];?>" alt=""></a></figure>
                                    <span class="category">Blog</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="<?php echo base_url().'Home/blogdetails/'.$blg['blogid'];?>"><?php echo $blg['blogtitle'];?></a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="<?php echo base_url().'uploads/blog/'.$blg['picture'];?>" alt=""></figure>
                                            <h5><a href="<?php echo base_url().'Home/blogdetails/'.$blg['blogid'];?>"><?php echo $blg['blog_added_by'];?></a></h5>
                                        </li>
                                        <li>

                                        <?php 
                                        $date=$blg['date'];
                                        $datedt=explode("-",$date);
                                        
                                        echo $month = date('d',strtotime($date));?> <?php echo $month = date('M',strtotime($date));?>, <?php echo $datedt[0];?>


                                        </li>
                                    </ul>
                                    <div class="text">
                                        <p><?php echo $blg['blogshortdesc'];?></p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url().'Home/blogdetails/'.$blg['blogid'];?>" class="theme-btn btn-two" style="background-color: #007538;color: aliceblue;">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- subscribe-section -->
        
        <!-- subscribe-section end -->


        <!-- main-footer -->
        
        <?php include('footer.php');?>



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="<?php echo base_url().'siproperty/assets/js/jquery.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/popper.min.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/owl.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/wow.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/validation.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/jquery.fancybox.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/appear.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/scrollbar.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/isotope.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/jquery.nice-select.min.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/jQuery.style.switcher.min.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/jquery-ui.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/product-filter.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/timePicker.js';?>"></script> 
    <script src="<?php echo base_url().'siproperty/assets/js/bxslider.js';?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/gmaps.js';?>"></script>
    <script src="<?php echo base_url().'siproperty/assets/js/map-helper.js';?>"></script>

    <!-- main-js -->
    <script src="<?php echo base_url().'siproperty/assets/js/script.js';?>"></script>

</body><!-- End of .page_wrapper -->
</html>


<script>
   
   $('form[id="frmemail"]').validate({  
    rules: {  
        emailidnews: 'required',  
     
    },  
    messages: {  
        emailidnews: 'Please enter your emailid',  
     
    },  
    submitHandler: function(form) { 
       

            $.ajax({
	url: form.action,
	type: form.method,
	data: $(form).serialize(),
	success: function(response) {
        $('input[type=text]').each(function() {
        $(this).val('');
    });
    
    $('#emailnews').val('');
    
		$('#newsmsg').html(response);
	}            
      });		
}





      //form.submit();  
   // }  
  });  



  $("#sub").click(function(){
    $('#newsmsg').html('');
}); 

  </script>