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
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
<link href="assets/css/slicknav.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/css/cmn_style.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/cmn_layout.css" media="all" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.sticky-kit.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
<script src="../Seatech/assets/js/jquery.matchHeight.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        $('.owl-carousel-signature').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:1
                }
            }
        });
        
//        $('#').matchHeight({byRow: true});
        
    });
</script>
</head>
<body id="g01" class="lDef">
<div id="wrapper">
<?php include('/inc/header.php'); ?>
	<div id="containerWrap">
		<div id="container" class="clearfix">

			<div id="contents" class="clearfix">
                            <div id="main01">
                                <div class="sectionTop01">
                                    <div class="boxLink01 clearfix">
                                        <a href="#" class="flL">breadcrum>xxx>xxx</a>
                                        <a href="#" class="flR">POPULAR COURSES</a>
                                    </div>
                                    <a href="inhouse_detail.php">inhouse_detail.php</a>
                                <!-- /sectionTop01 --></div>

                                <div class="sectionWrap01">
                                    <div id="boxSubMenu" class="boxSubmenu01">
                                        <?php include('/inc/submenu.php'); ?>
                                     <!-- boxSubmenu01--></div>
                                    <div class="boxSubmenu02 mobileMode">
                                        <?php include('/inc/submenu.php'); ?>
                                     <!-- boxSubmenu01--></div>

                                    <div class="sectionTop02 pb20">
                                        <div class="boxTtlBasic01 clearfix">
                                            <p class="ttl_basic01 flL">SIGNATURE COURSES</p>
                                            <div class="flR mt10"><a href="#" class="linkExplore01">Explore all <span class="txtRed01">25</span> Signature Courses</a></div>
                                        </div>
                                        <div class="boxSignature01">
                                            <ul class="listSignature01 owl-carousel-signature">
                                                <li>
                                                    <img src="assets/images/top/sig1.png" alt="#" />
                                                    <p class="ttl_signature01">Business Simulation</p>
                                                    <p class="sttl_signature01"><span class="fz42">for</span><span class="fz59">#Startup</span> <br><span class="fz33">& Entrepreneur.</span></p>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/sig1.png" alt="#" />
                                                    <p class="ttl_signature01">Business Simulation</p>
                                                    <p class="sttl_signature01"><span class="fz42">for</span><span class="fz59">#Startup</span> <br><span class="fz33">& Entrepreneur.</span></p>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/sig1.png" alt="#" />
                                                    <p class="ttl_signature01">Business Simulation</p>
                                                    <p class="sttl_signature01"><span class="fz42">for</span><span class="fz59">#Startup</span> <br><span class="fz33">& Entrepreneur.</span></p>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/sig1.png" alt="#" />
                                                    <p class="ttl_signature01">Business Simulation</p>
                                                    <p class="sttl_signature01"><span class="fz42">for</span><span class="fz59">#Startup</span> <br><span class="fz33">& Entrepreneur.</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul id="listSignatureCourse01" class="list_basic02">
                                            <li>
                                                <img src="assets/images/top/sig2.png" alt="#" />
                                                <p class="sttl_basic01">Signature Course Edu #1</p>
                                                <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                    Full detials & information ; New country business gravid
                                                </p>
                                            </li>
                                            <li>
                                                <img src="assets/images/top/sig3.png" alt="#" />
                                                <p class="sttl_basic01">Signature Course Edu #2</p>
                                                <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                    Full detials & information ; New country business gravid
                                                </p>
                                            </li>
                                            <li>
                                                <img src="assets/images/top/sig4.png" alt="#" />
                                                <p class="sttl_basic01">Signature Course Edu #3</p>
                                                <p class="txt_basic01">Full detials & information ; New country business gravid velition sam the value of favorite courses. 
                                                    Full detials & information ; New country business gravid
                                                </p>
                                            </li>
                                        </ul>
                                    <!--sectionTop02--></div>
                                    
                                <!--sectionWrap01--></div>
                            <!-- /main01 --></div>
                                
			<!-- /contents --></div>

		<!-- /container --></div>
	<!-- /containerWrap --></div>
<!-- /wrapper --></div>
<?php include('/inc/footer.php'); ?>
</body>
</html>
