<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Pseudo Program Nerds" />
    <meta name="robots" content="" />
    <meta name="description" content="AddedPower is a fully featured car servicing company. Our
        mechanical services include all types of vehicles, offering everything
        from oil changes and tune ups to brake jobs and no-starts" />
    <meta property="og:title" content="AddedPower" />
    <meta property="og:description" content="AddedPower is a fully featured car servicing company. Our
        mechanical services include all types of vehicles, offering everything
        from oil changes and tune ups to brake jobs and no-starts" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>AddedPower</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">

</head>
<?php
    require_once 'dbConn.php';
?>
<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->


        <?php include('header-style-4.php'); ?>




         <?php

         $read = "SELECT * FROM images WHERE img_id = 1"; //query
         $result = mysqli_query($conn,$read); //connection, query
         $record = mysqli_fetch_array($result);
        ?>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content">
            <!-- Slider -->
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                            <!-- START REVOLUTION SLIDER 5.3.0.2 -->
                            <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/Slider1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="addedPower/<?php echo $record['img_path'] ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>

                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-100-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" data-fontsize="['55','55','55','36']" data-lineheight="['60','60','60','46']" data-width="['800','800','800','800']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;">
                                            <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE
                                                YOUR CAR <br /> LAST LONGER</span>
                                        </div>

                                        <!-- LAYER NR. 3 [ for paragraph] -->
                                        <div class="tp-caption tp-resizeme" id="slide-100-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']" data-width="['800','800','700','420']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                            <span> AddedPower is a fully featured car servicing company. Our
                                                mechanical services include all types of vehicles, offering
                                                everything
                                                from oil changes and tune ups to brake jobs and no-starts.
                                            </span>
                                        </div>

                                        <!-- LAYER NR. 4 [ for readmore botton ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-100-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" data-fontsize="['none','none','none','none']" data-lineheight="['none','none','none','none']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-fontweight="['700','700','700','700']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                            <a href="about-2.php" class="site-button button-skew"><span>Read
                                                    More</span><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </li>

                                     <?php

                                        $read = "SELECT * FROM images WHERE img_id = 2"; //query
                                        $result = mysqli_query($conn,$read); //connection, query
                                        $record = mysqli_fetch_array($result);
                                    ?>
                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/Slider2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="addedPower/<?php echo $record['img_path']?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYERS -->
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>
                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-200-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" data-fontsize="['55','55','55','36']" data-lineheight="['60','60','60','46']" data-width="['800','800','800','800']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;">
                                            <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE
                                                YOUR CAR <br /> LAST LONGER</span>
                                        </div>

                                        <!-- LAYER NR. 3 [ for paragraph] -->
                                        <div class="tp-caption tp-resizeme" id="slide-200-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']" data-width="['800','800','700','420']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                            <span>AddedPower is a fully featured car servicing company. Our
                                                mechanical services include all types of vehicles, offering
                                                everything
                                                from oil changes and tune ups to brake jobs and no-starts.
                                            </span>
                                        </div>

                                        <!-- LAYER NR. 4 [ for readmore botton ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-200-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" data-fontsize="['none','none','none','none']" data-lineheight="['none','none','none','none']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;"><a href="about-2.php" class="site-button  button-skew"><span>Read More</span><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </li>

                                     <?php

                                        $read = "SELECT * FROM images WHERE img_id = 3"; //query
                                        $result = mysqli_query($conn,$read); //connection, query
                                        $record = mysqli_fetch_array($result);
                                    ?>
                                    <!-- SLIDE 3 -->
                                    <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/Slider3.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="addedPower/<?php echo $record['img_path']?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                        <!-- LAYERS -->
                                        <!-- LAYER NR. 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-300-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                        </div>
                                        <!-- LAYER NR. 2 [ for title ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-300-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['150','110','110','70']" data-fontsize="['55','55','55','36']" data-lineheight="['60','60','60','46']" data-width="['800','800','800','800']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;">
                                            <span class="text-uppercase" style="font-family: 'Poppins',sans-serif;">MAKE
                                                YOUR CAR <br /> LAST LONGER</span>
                                        </div>

                                        <!-- LAYER NR. 3 [ for paragraph] -->
                                        <div class="tp-caption tp-resizeme" id="slide-300-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['300','250','250','190']" data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']" data-width="['800','800','700','420']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                            <span>AddedPower is a fully featured car servicing company. Our
                                                mechanical services include all types of vehicles, offering
                                                everything
                                                from oil changes and tune ups to brake jobs and no-starts.
                                            </span>
                                        </div>

                                        <!-- LAYER NR. 4 [ for readmore botton ] -->
                                        <div class="tp-caption tp-resizeme" id="slide-300-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['420','370','370','370']" data-fontsize="['none','none','none','none']" data-lineheight="['none','none','none','none']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[ 
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;"><a href="about-1.php" class="site-button   button-skew"><span>Read More</span><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>
            <!-- Slider END -->
            <!-- meet & ask -->
            <div class="section-full z-index100 meet-ask-outer bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 meet-ask-row p-tb30">
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <div class="icon-bx-wraper clearfix text-white left">
                                        <div class="icon-xl "> <span class=" icon-cell"><i class="ti-home"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h3 class="dlab-tilte text-uppercase m-b10">Meet & Ask</h3>
                                            <p>Get in touch with us for complete care for all your automobile needs.
                                                We
                                                are alvways available for all your queries and requirements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t20">
                                    <a href="contact.php" class="site-button-secondry button-skew m-l10">
                                        <span>Contact Us</span><i class="fas fa-angle-right"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meet & ask END -->

            <!-- Our Process -->
            <div class="section-full content-inner bg-white" id="OurProcess">
                <div class="container">
                    <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="col-md-12">
                            <div class="section-head text-center head-style-2">
                                <h2 class="title">Our Process</h2>
                                <div class="dlab-separator-outer">
                                    <div class="dlab-separator bg-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper bx-style-2 m-t20 m-b30 p-a30 center service-box2">
                                <div class="icon-bx-xs radius bg-primary m-b20"><span class="icon-cell">1</span>
                                </div>
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-money"></i></a> </div>
                                    <h3 class="dlab-tilte">Get Estimate</h3>

                                    <a href="coming-soon-1.html" class="site-button">Estimate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper bx-style-2 m-t20 m-b30 p-a30 center service-box2">
                                <div class="icon-bx-xs radius bg-primary m-b20"><span class="icon-cell">2</span>
                                </div>
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-time"></i></a> </div>
                                    <h3 class="dlab-tilte">Schedule Appointment</h3>
                                    <a href="appointment.php" class="site-button">Schedule Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper bx-style-2 m-t20 m-b30 p-a30 center service-box2">
                                <div class="icon-bx-xs radius bg-primary m-b20"><span class="icon-cell">3</span>
                                </div>
                                <div class="icon-content">
                                    <div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell"><i class="ti-settings"></i></a> </div>
                                    <h3 class="dlab-tilte">Get Service </h3>
                                    <a target="_blank" href="https://www.google.com/maps/place/Added+Power/@24.64843,46.791261,15z/data=!4m2!3m1!1s0x0:0x350888526893a586?sa=X&ved=2ahUKEwi72p_RwZT3AhVVjtgFHZi-BmYQ_BJ6BAhOEAU" class="site-button"> Our Location</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Process END -->
                <!-- About Company 
                <div class="section-full bg-white content-inner-1"
                    style="background-image: url(images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 about-contant">
                                <div class="m-b20">
                                    <h2 class="text-uppercase m-t0 m-b10">WE ARE THE<span class="text-primary">
                                            BEST</span>
                                    </h2>
                                    <span class="text-secondry font-16">Innovation & Adoption</span>
                                    <div class="clear"></div>
                                </div>
                                <p class="m-b30">There are many variations of passages of Lorem Ipsum typesetting
                                    industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing..</p>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                        <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                            <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#"
                                                    class="icon-cell"><i class="ti-user"></i></a> </div>
                                            <div class="icon-content">
                                                <h2 class="text-primary m-t20 m-b10"><span class="counter">25</span>+
                                                </h2>
                                                <p>Engineers & Workers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                        <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                            <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#"
                                                    class="icon-cell"><i class="ti-home"></i></a> </div>
                                            <div class="icon-content">
                                                <h2 class="text-primary m-t20 m-b10"><span class="counter">2</span>+
                                                </h2>
                                                <p>Factory In Worldwide</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                        <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                            <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#"
                                                    class="icon-cell"><i class="ti-harddrives"></i></a> </div>
                                            <div class="icon-content">
                                                <h2 class="text-primary m-t20 m-b10"><span class="counter">1032</span>+
                                                </h2>
                                                <p>Projects Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting
                                    industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                                <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting
                                    industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                            </div>
                            <div class="col-lg-5 about-img">
                                <img src="images/theBest.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                 About Company END -->
                <!-- Our Projects  -->
                <div class="section-full bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg1.jpg);">
                    <div class="container">
                        <div class="section-head  text-center text-white">
                            <h2 class="text-uppercase">Our Projects</h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-white style-skew"></div>
                            </div>
                            <p>Since we started we did multiple successful projects that satisfied the needs of our different customers</p>
                        </div>
                        <div class="site-filters clearfix center  m-b40">
                            <ul class="filters" data-bs-toggle="buttons">
                                <li data-filter="" class="btn active">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>Show All</span></a>
                                </li>
                                <li data-filter="home" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>Brakes</span></a>
                                </li>
                                <li data-filter="office" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>Suspension</span></a>
                                </li>
                                <li data-filter="commercial" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>Wheels</span></a>
                                </li>
                                <li data-filter="window" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>Steering </span></a>
                                </li>
                            </ul>
                        </div>
                        <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 lightgallery gallery s m-b0">
                            <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/brakes1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/brakes1.jpg" data-src="images/our-work/brakes1.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom">
                                        <a href="javascript:void(0);"> <img src="images/our-work/suspension1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/suspension1.jpg" data-src="images/our-work/suspension1.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/wheels1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/wheels1.jpg" data-src="images/our-work/wheels1.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/wheels2.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/wheels2.jpg" data-src="images/our-work/wheels2.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/steering1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/steering1.jpg" data-src="images/our-work/steering1.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="dlab-box dlab-gallery-box">
                                    <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/our-work/steering2.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="portfolio-details.php"> <i class="fas fa-link icon-bx-xs"></i>
                                                </a>
                                                <span data-exthumbimage="images/our-work/thum/steering2.jpg" data-src="images/our-work/steering2.jpg" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Our Projects END -->
                <!-- OUR SERVICES -->
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="text-uppercase"> OUR SERVICES</h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-secondry style-skew"></div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b40">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-reload text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">AIR CONDITIONING</h5>
                                        <p>Car A/C systems have components that require love to avoid
                                            drying out</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b40">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-car text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">BRAKE REPAIR</h5>
                                        <p>From the brake pedal to hydraulic brake fluid, AddedPower will take care
                                            of it </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b40">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-thumb-up text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">LUBE, OIL AND FILTERS</h5>
                                        <p>Oil is the lifeblood of your engine,It reduces friction, lessens wear,
                                            provides lubrication</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b40">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-cup text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">BELTS AND HOSES</h5>
                                        <p>Essential parts vital to the function of your engine's cooling,
                                            charging, and air conditioning systems </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b40">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-settings text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">ENGINE DIAGNOSTICS</h5>
                                        <p>Any type of computerized assessment used to identify problems
                                            your car </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="icon-bx-wraper center m-b10">
                                    <div class="icon-bx-sm bg-secondry m-b20"> <span class="icon-cell"><i class="ti-pie-chart text-primary"></i></span> </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte text-uppercase">TIRE AND WHEEL SERVICES</h5>
                                        <p>Tire tread isn???t the only indicator of problems</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OUR SERVICES END-->

                <!-- Team member -->
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-head text-center ">
                            <h2 class="text-uppercase"> Meet The Team</h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-secondry style-skew"></div>
                            </div>
                            <p>The team in AddedPower consists of many employees that are highly expert and have a big amount of knowledge in everything related to cars</p>
                        </div>
                        <?php

                            $read = "SELECT * FROM images WHERE img_id = 4"; //query
                            $result = mysqli_query($conn,$read); //connection, query
                            $record = mysqli_fetch_array($result);
                        ?>
                        <div class="section-content text-center ">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30">
                                        <div class="dlab-media"> <a href="our-team.php"> <img width="358" height="460" alt="" src="addedPower/<?php echo $record['img_path']?>"> </a>
                                            <div class="dlab-info-has skew-has  bg-primary">
                                                <ul class="dlab-social-icon dez-border">
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dlab-title text-uppercase m-b5">Abdullah Ahmed</h4>
                                            <span class="dlab-member-position">Manager</span>
                                        </div>
                                    </div>
                                </div>
                                <?php

                                $read = "SELECT * FROM images WHERE img_id = 5"; //query
                                $result = mysqli_query($conn,$read); //connection, query
                                $record = mysqli_fetch_array($result);
                                 ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30">
                                        <div class="dlab-media"> <a href="our-team.php"> <img width="358" height="460" alt="" src="addedPower/<?php echo $record['img_path']?>"> </a>
                                            <div class="dlab-info-has skew-has bg-primary">
                                                <ul class="dlab-social-icon dez-border">
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-a10 bg-white">
                                            <h4 class="dlab-title text-uppercase m-b5">Mohammed Hussain</h4>
                                            <span class="dlab-member-position">Mechanical</span>
                                        </div>
                                    </div>
                                </div>

                               <?php
                                $read = "SELECT * FROM images WHERE img_id = 6"; //query
                                $result = mysqli_query($conn,$read); //connection, query
                                $record = mysqli_fetch_array($result);
                                 ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30">
                                        <div class="dlab-media"> <a href="our-team.php"> <img width="358" height="460" alt="" src="addedPower/<?php echo $record['img_path']?>"> </a>
                                            <div class="dlab-info-has skew-has bg-primary">
                                                <ul class="dlab-social-icon dez-border">
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dlab-title text-uppercase m-b5">Hassan Ahmed</h4>
                                            <span class="dlab-member-position">Mechanical</span>
                                        </div>
                                    </div>
                                </div>
                                 <?php
                                    $read = "SELECT * FROM images WHERE img_id = 7"; //query
                                    $result = mysqli_query($conn,$read); //connection, query
                                    $record = mysqli_fetch_array($result);
                                 ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b10">
                                        <div class="dlab-media"> <a href="our-team.php"> <img width="358" height="460" alt="" src="addedPower/<?php echo $record['img_path']?>"> </a>
                                            <div class="dlab-info-has skew-has bg-primary">
                                                <ul class="dlab-social-icon dez-border">
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a>
                                                    </li>
                                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dlab-title text-uppercase m-b5">Ahmed Salem</h4>
                                            <span class="dlab-member-position">Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team member END -->

                <!-- Testimonials blog -->
                <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url(images/background/bg11.jpg);">
                    <div class="container">
                        <div class="section-head text-white text-center">
                            <h2 class="text-uppercase">What people are saying</h2>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-white  style-skew"></div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="testimonial-four owl-carousel owl-none owl-theme owl-dots-white-full">
                                <div class="item">
                                    <div class="testimonial-4 testimonial-bg">
                                        <div class="testimonial-pic"><img src="images/testimonials/userIcon.jpg" width="100" height="100" alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Would highly recommend AddedPower! He was very professional, very helpful & had great prices. Will definitely come back </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong class="testimonial-name">Abdulmalik Mohammed</strong> <span class="testimonial-position">Engineer</span>
                                        </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-4 testimonial-bg">
                                        <div class="testimonial-pic"><img src="images/testimonials/userIcon.jpg" width="100" height="100" alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Great shop! Was traveling through town and in a rush to find a good mechanic and these guys were above amazing! It???s hard to find a good honest mechanic and this is one of them! 10/10 would recommend </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong class="testimonial-name">Alaa Hammad</strong> <span class="testimonial-position">Student</span>
                                        </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-4 testimonial-bg">
                                        <div class="testimonial-pic"><img src="images/testimonials/userIcon.jpg" width="100" height="100" alt=""></div>
                                        <div class="testimonial-text">
                                            <p>Solid service. These guys are knowledgeable and professional. I will definitely come back with my Highlander

                                            </p>
                                        </div>
                                        <div class="testimonial-detail"> <strong class="testimonial-name">Rayyan Abdullah</strong> <span class="testimonial-position">Doctor</span>
                                        </div>
                                        <div class="quote-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials blog END -->
                <!-- Client logo -->
                <div class="section-full dlab-we-find bg-img-fix p-t50 p-b50 ">
                    <div class="container">
                        <div class="section-content">
                            <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"><a href="#"><img src="images/client-logo/pirelli.png" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"> <a href="#"><img src="images/client-logo/mobil.png" alt=""></a> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"> <a href="#"><img src="images/client-logo/castrol.png" alt=""></a> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"> <a href="#"><img src="images/client-logo/shell.png" alt=""></a> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"> <a href="#"><img src="images/client-logo/continental.png" alt=""></a> </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo"> <a href="#"><img src="images/client-logo/bosch.png" alt=""></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client logo END -->
            </div>
            <!-- Content END-->
            <!-- Footer -->
            <!--Add Footer Using PHP-->

            <footer class="site-footer">
                <!-- newsletter part -->
                <div class="bg-primary dlab-newsletter">
                    <div class="container equal-wraper">
                        <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                            <div class="row position-relative">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                        <div class="icon-lg text-white radius">
                                            <i class="ti-email"></i>
                                        </div>
                                        <div class="icon-content"> <strong class="text-black text-uppercase font-18">Subscribe</strong>
                                            <h2 class="dlab-tilte text-uppercase">Our Newsletter</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="dzSubscribeMsg"></div>
                                    <div class="input-group equal-col p-t40  p-b10">
                                        <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
                                    <div class="equal-col p-t40 p-b10 skew-subscribe">
                                        <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1">
                                            <span>Subscribe</span><i class="fas fa-angle-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- footer top part -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 footer-col-4">
                                <div class="widget widget_about">
                                    <div class="logo-footer logo-white"><img src="images/AddedPowerLogo.png" alt="">
                                    </div>
                                    <p><strong>AddedPower</strong> We take care of all your auto-repair needs, from
                                        brakes,
                                        tires, oil changes to periodic maintenance and car washes and polishing.</p>
                                    <ul class="dlab-social-icon dez-border">
                                        <li><a class="fab fa-instagram" href="https://www.instagram.com/addedpower_ksa/?hl=en" target="blank"></a>
                                        <li><a class="fab fa-google" href="mailto:cars.addedpower@gmail.com" target="blank"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-3 col-sm-3 footer-col-4">
                                <div class="widget widget_services">
                                    <h4 class="m-b15 text-uppercase">Our services</h4>
                                    <div class="dlab-separator-outer m-b10">
                                        <div class="dlab-separator bg-white style-skew"></div>
                                    </div>
                                    <ul>
                                        <li><a href="engine-diagnostics.php">Engine Diagnostics</a></li>
                                        <li><a href="lube-oil-and-filters.php">Lube, Oil and Filters</a></li>
                                        <li><a href="belts-and-hoses.php">Belts and Hoses</a></li>
                                        <li><a href="air-conditioning.php">Air Conditioning</a></li>
                                        <li><a href="brake-repair.php">Brake Repair</a></li>
                                        <li><a href="tire-and-wheel-services.php">Tire And Wheel Services</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 footer-col-4">
                                <div class="widget widget_getintuch">
                                    <h4 class="m-b15 text-uppercase">Contact us</h4>
                                    <div class="dlab-separator-outer m-b10">
                                        <div class="dlab-separator bg-white style-skew"></div>
                                    </div>
                                    <ul>
                                        <li><i class="ti-location-pin"></i><strong>address</strong> Amr Bin Ishaq,
                                            Al
                                            Faisaliyyah, Riyadh 12892</li>
                                        <li><i class="ti-mobile"></i><strong>phone</strong><a href="tel:059 029 6833">059
                                                029 6833</a></li>
                                        <li><i class="ti-email"></i><strong>email</strong> <a href="mailto:cars.addedpower@gmail.com">
                                                cars.addedpower@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer bottom part -->
                <div class="footer-bottom footer-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 text-left">
                                <span>?? Copyright 2022</span>
                            </div>
                            <div class="col-lg-4 col-md-4 text-center">
                                <span> Design With <i class="ti-heart text-primary heart"></i> By<a href="" target="_blank">Pseudo Program Nerds</a> </span>
                            </div>
                            <div class="col-lg-4 col-md-4 text-right">
                                <a href="about-2.php"> About</a>
                                <a href="faq-1.php"> FAQs</a>
                                <a href="contact.php"> Contact</a>
                                <a href="admin/facultyPort.php"> Faculty</a>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>



            <!-- Footer END-->
            <!-- scroll top button -->
            <button class="scroltop fas fa-arrow-up style5"></button>
        </div>

        <!-- JavaScript  files ========================================= -->
        <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
        <script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
        <script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
        <script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
        <script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
        <script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
        <script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
        <script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
        <script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
        <script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
        <script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
        <script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
        <script src="js/dz.ajax.js"></script><!-- CONTACT JS -->

        <!-- REVOLUTION JS FILES -->
        <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="js/rev.slider.js"></script>
        <script>
            jQuery(document).ready(function() {
                'use strict';
                dz_rev_slider_1();
            }); /*ready*/
        </script>
</body>

</html>