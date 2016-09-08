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
<link href="assets/css/map-icons.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.sticky-kit.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
<script src="../Seatech/assets/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIti37lBTXCiKOKt9yz5mfcQGmYzdSh_U" type="text/javascript"></script>
<script src="assets/js/map-icons.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/common.js"></script>
<script type="text/javascript">

    function initialise() {
	var mapCanvas = document.getElementById('map-canvas');
	
	// Center
	var center = new google.maps.LatLng(13.7200529,100.4981000);

	// Map Options		
	var mapOptions = {
		zoom: 17,
		center: center,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [
			{stylers: [{ visibility: 'simplified' }]},
			{elementType: 'labels', stylers: [{ visibility: 'on' }]}
		]
	};
	
	// Create the Map
	map = new google.maps.Map(mapCanvas, mapOptions);

	var marker1 = new Marker({
		map: map,
		position: new google.maps.LatLng(13.720560,100.496199),
		icon: {
			path: SQUARE_PIN,
			fillColor: '#00CCBB',
			fillOpacity: 0,
			strokeColor: '',
			strokeWeight: 0
		},
		map_icon_label: '<span class="map-icon map-icon-point-of-interest"><img src="assets/images/common/ico-map01.png" width="80" /></span>'
	});
};

google.maps.event.addDomListener(window, 'load', initialise);

</script>
</head>
<body class="lDef">
<div id="wrapper">
<?php include('/inc/header.php'); ?>
	<div id="containerWrap">
		<div id="container" class="clearfix">

			<div id="contents" class="clearfix">
                            <div id="main01">
                                <div class="sectionTop01 bg-white">
                                    <div class="boxLink01 clearfix bgN">
                                        <div href="#" class="breadcrumb flL">
                                            <a href="index.php" class="home"><img src="assets/images/common/ico-home01.png" alt="Home" class="img-responsive"/> /</a>
                                            <a href="#">Contact Us</a>
                                        </div>
                                        <a href="#" class="flR">LET'S TALK</a>
                                    </div>
                                    <div class="sectionMap">
                                        <div id="map-canvas"></div>
                                    </div>
                                    <div class="sectionIn01">
                                        
                                        <div class="boxContact01 box-shadow-35 mb30">
                                            <h2 class="h2_basic01">Contact Us</h2>
                                            <div class="boxAbout02">
                                                <div class="boxWork01 boxForm">
                                                    <div class="colL">
                                                        <form action="#">
                                                            <div class="row">
                                                                <p class="ttlForm01">What can we help you with?</p>
                                                                <label class="labelSelect">
                                                                    <select name="topic" id="selectTopic" class="select-style02">
                                                                        <option value="#">Please select topic</option>
                                                                        <option value="#">Topic#1</option>
                                                                        <option value="#">Topic#2</option>
                                                                        <option value="#">Topic#3</option>
                                                                    </select>
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <p class="ttlForm01">Your Name <span class="txtRed01">*</span></p>
                                                                <label>
                                                                    <input type="text" name="name" class="input-style01" />
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <p class="ttlForm01">Email Address <span class="txtRed01">*</span></p>
                                                                <label>
                                                                    <input type="text" name="email" class="input-style01" />
                                                                </label>
                                                            </div>
                                                            <div class="row mb30">
                                                                    <p class="ttlForm01">Message <span class="fzS">(required)</span></p>
                                                                    <label>
                                                                        <textarea name="msg" id="msg" class="textarea-style01" cols="30" rows="10"></textarea>
                                                                    </label>
                                                                </div>
                                                                <div class="row boxBtn">
                                                                    <div class="flL">
                                                                        <input type='file'  name="file" class="input-file-style01 screenshot" />
                                                                    </div>
                                                                    <div class="flR">
                                                                        <button type="reset" class="input-reset01 box-shadow-35">RESET</button>
                                                                        <button type="submit" class="input-submit01 box-shadow-35">SEND</button>
                                                                    </div>

                                                                </div>
                                                        </form>
                                                    </div>
                                                    <div class="colR">
                                                        <div class="boxHiring01">
                                                            <div class="row bd-bottom01">
                                                                <p class="ttlHiring01">Contact Details</p>
                                                                <p class="txt-hiring01 mb25">
                                                                    Question, comment or concern? Our contact form is 
                                                                    the best way to get in touch with someone at 
                                                                    DeOne Training.
                                                                </p>
                                                            </div>
                                                            <div class="row bd-bottom01">
                                                                <p class="ttlHiring01 mb00">Direct Contact</p>
                                                                <div class="txt-hiring01 txt-direct01 mb25">
                                                                    <p><span class="heading">Courses Info :</span>sales@deonetraining.com</p>
                                                                    <p><span class="heading">General :</span>info@deonetraining.com</p>
                                                                    <p><span class="heading">Web support :</span>support@deonetraining.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="row bd-bottom01">
                                                                <p class="ttlHiring01 mb00">Social Network</p>
                                                                <div class="box-social-contact">
                                                                    <a href="#"><img src="assets/images/common/ico-facebook02.png" alt="facebook" /></a>
                                                                    <a href="#"><img src="assets/images/common/ico-youtube01.png" alt="youtube" /></a>
                                                                    <a href="#"><img src="assets/images/common/ico-in01.png" alt="likedin" /></a>
                                                                    <a href="#"><img src="assets/images/common/ico-mail02.png" alt="mail" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="row bd-bottom01">
                                                                <p class="ttlHiring01">Headquarters</p>
                                                                <div class="txt-hiring01 mb25">
                                                                    <p>
                                                                        DeOne International Co., Ltd.
                                                                        86/1 16 Floors, Thaivirawat Bldg., Krungthonburi Rd., 
                                                                        Banglumpoo-lang. Klongsan, Bangkok 10600
                                                                    </p>
                                                                    <span class="heading">Tel</span><span class="mr05">:</span>02 860 7871-2
                                                                    <span class="heading">Fax</span><span class="mr05">:</span>02 860 7873
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <!-- /sectionIn01 --></div>
                                    
                                <!-- /sectionTop01 --></div>

                                
                            <!-- /main01 --></div>
                                
			<!-- /contents --></div>

		<!-- /container --></div>
	<!-- /containerWrap --></div>
<!-- /wrapper --></div>
<?php include('/inc/footer.php'); ?>
</body>
</html>
