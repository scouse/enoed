<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DeOne</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
<link href="assets/css/slicknav.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/css/cmn_style.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/cmn_layout.css" media="all" />
<link href="assets/css/inhouse.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.sticky-kit.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
<script src="../Seatech/assets/js/jquery.matchHeight.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script src="assets/js/viewSwitcher.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        $('#listPublicTrain01').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                },
                1025:{
                    items:3
                }
            }
        });
        $('#listCarlendar01').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:1
                }
            }
        });
        
        $('#listPublicTrain01 li').matchHeight({byRow: true});
        
    });
</script>
</head>
<body id="g04" class="lDef">
<div id="wrapper">
<?php include('/inc/header.php'); ?>
	<div id="containerWrap">
		<div id="container" class="clearfix">

			<div id="contents" class="clearfix">
                            <div id="main01">
                                <div class="sectionTop01 bg-style02 sectionPublic">
                                    <div class="boxLink01 clearfix bgN">
                                        <div href="#" class="breadcrumb flL">
                                            <a href="index.php" class="home"><img src="assets/images/common/ico-home02.png" alt="Home" class="img-responsive"/> /</a>
                                            <a href="signature.php">Public > </a>
                                            <a href="#">Public Training</a>
                                        </div>
                                        <a href="#" class="flR">POPULAR COURSE</a>
                                    </div>
                                    <div class="sectionIn02">
                                        <div class="boxPbTrainWrap01">
                                            <div class="linkExploreWrap cleafix">
                                                <a href="#" class="linkExplore02 flR desktopMode fwN">upcoming this month</a>
                                                <h2 class="h2_basic01">public training</h2>
                                            </div>
                                            
                                            <div class="boxPublicTrain01">
                                                <ul id="listPublicTrain01" class="list_basic05">
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_30.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">EXPERIENTIAL MARKETING<br>
                                                            AND STRATEGIC <br>
                                                            BRAND MANAGEMENT
                                                    </p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_32.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">PSYCHOLOGY FOR <br>
                                                            MANAGEMENT & MOTIVATING<br>
                                                            TECHNIQUES
                                                    </p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_34.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">New Era of Sales<br>planning</p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_38.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #4</p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_40.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #5</p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_41.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #6</p>
                                                    <p class="txt_basic01 bd-bottom03">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                    <div class="txt_Instruc01">
                                                        <p><span class="txtRed01">Instructor   : </span>ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                        <p><span class="txtRed01">Location   : </span>ibis Bangkok Riverside Hotel</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    <!-- /sectionIn01 --></div>
                                    
                                    <div class="section_basic01 clearfix pt45">
                                        <div class="boxPublicCourse01">
                                            <div class="boxTtlBasic01 clearfix bd-bottom01">
                                                <p class="ttl_basic01 flL">Public training calendar</p>
                                                <div class="flR mt10 box-switch-view">
                                                    Select view type 
                                                    <span class="list-style-buttons">
                                                        <a href="#" id="gridview" class="switcher active"><img src="assets/images/common/ico-grid-view-active.png" alt="Grid"></a>
                                                        <a href="#" id="listview" class="switcher"><img src="assets/images/common/ico-list-view.png" alt="List"></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="boxCalendarWrap">
                                                <ul id="listCarlendar01">
                                                    <li>
                                                        <p class="ttl_month">September  2016</p>
                                                        <ul id="listCourse01" class="grid">
                                                            <li class="bar">
                                                                <div class="bar-course01">
                                                                    <span class="date">DATE</span>
                                                                    <span class="course">COURSE</span>
                                                                    <span class="ins">INSTRUCTOR</span>
                                                                    <span class="fee">FEE</span>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_06.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">SEP</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : SEPTEMBER 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_11.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">SEP</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : SEPTEMBER 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_06.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">SEP</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : SEPTEMBER 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_09.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">SEP</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : SEPTEMBER 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_11.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">SEP</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : SEPTEMBER 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p class="ttl_month">October  2016</p>
                                                        <ul id="listCourse01" class="list">
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_30.png" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">OCT</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : October 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_06.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">OCT</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : October 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_11.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">OCT</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : October 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item">
                                                                <div class="boxImgWrap">
                                                                    <img src="assets/images/public/DeOne-Web-UI-04-Public-V4-List_09.jpg" alt="#" />
                                                                    <p class="txtCourseDate01">
                                                                        <span class="date">23</span>
                                                                        <span class="month">OCT</span>
                                                                        <span class="year">2016</span>
                                                                    </p>
                                                                </div>
                                                                <div class="boxDetail">
                                                                    <p class="ttl">Public Course : October 2016 #1</p>
                                                                    <p class="txt_basic01">
                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.

                                                                        INNOVATION Phasell us nulla elit, henderit sit amet urna a, semper gravida velit Ultricies tristique interdum. 
                                                                        Phasellus nulla urna a, semper gravidavelit curabitur ultricies tristique abc Phasellus nulla elit,sit ameturnaa, 
                                                                        semper gravida velit Ultricies tristique interdum. nulla elit, sit ameturna a, curabitur ultricies tristique abc inter
                                                                        dum. Phasell us nulla elit, henderit sitamet urna a, semper gravida velit Ultrici interdum. Phasellus nulla elit,sit 
                                                                        ameturna professional.
                                                                    </p>
                                                                    <div class="txt-instructor">
                                                                        <p class="txt-date"><span class="stl txtRed01">Date</span><span class="semicol txtRed01">:</span> 28 September 2016</p>
                                                                        <p class="txt-ins"><span class="stl txtRed01">Instructor</span><span class="semicol txtRed01">:</span> ผศ.ดร.บุปผา ลาภะวัฒนาพันธ์</p>
                                                                        <p class="txt-location"><span class="stl txtRed01">Location</span><span class="semicol txtRed01">:</span> ibis Bangkok Riverside Hotel</p>
                                                                    </div>
                                                                    <div class="txt-fee">
                                                                        <div class="flL">
                                                                            <p><span class="stl txtRed01">FEE</span><span class="txtRed01">:</span> <span class="txt-price">5,700</span><span class="txt-thb"> THB</span></p>
                                                                        </div>
                                                                        <a href="#" class="linkView01">View Details <span class="icoLinkR"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="boxPublicCourse01">
                                            <div class="boxTtlBasic01 clearfix">
                                                <p class="ttl_basic01 flL">PUBLIC COURSES</p>
                                                <div class="flR mt10"><a href="#" class="linkExplore01">Explore all <span class="txtRed01">25</span> Public Courses</a></div>
                                            </div>
                                            <ul id="listPublicCourse01" class="list_basic02">
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_30.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #1</p>
                                                    <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_32.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #2</p>
                                                    <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/DeOne-Web-UI-01-Home-V4_34.png" alt="#" />
                                                    <p class="txtCourseDate01">
                                                        <span class="date">23</span>
                                                        <span class="month">DEC</span>
                                                        <span class="year">2016</span>
                                                    </p>
                                                    <p class="sttl_basic01">Public Course Edu #3</p>
                                                    <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                        Full detials & information ; New country business gravid
                                                    </p>
                                                </li>
                                            </ul>
                                        <!--boxPublicCourse01--></div>
                                        
                                    <!--section_basic01--></div>
                                <!-- /sectionTop01 --></div>

                                
                            <!-- /main01 --></div>
                                
			<!-- /contents --></div>

		<!-- /container --></div>
	<!-- /containerWrap --></div>
<!-- /wrapper --></div>
<?php include('/inc/footer.php'); ?>
</body>
</html>
