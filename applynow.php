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
<script type="text/javascript">
    $(document).ready(function(){
               
//        $('#').matchHeight({byRow: true});
        
    });
</script>
</head>
<body class="lDef">
<div id="wrapper">
<?php include('/inc/header.php'); ?>
	<div id="containerWrap">
		<div id="container" class="clearfix">

			<div id="contents" class="clearfix">
                            <div id="main01">
                                <div class="sectionTop01">
                                    <div class="boxLink01 clearfix bgN">
                                        <div href="#" class="breadcrumb flL">
                                            <a href="index.php" class="home"><img src="assets/images/common/ico-home01.png" alt="Home" class="img-responsive"/> /</a>
                                            <a href="#">Apply Now</a>
                                        </div>
                                        <a href="#" class="flR">GET STARTED</a>
                                    </div>
                                    <div class="sectionIn01">
                                        <h2 class="h2_basic01">online Application form</h2>
                                        <div class="boxAbout02">
                                            <div class="boxWork01 boxForm">
                                                <div class="colL">
                                                    <form action="#">
                                                        <div class="row">
                                                            <p class="ttlForm01">Your Course <span class="txtRed01">*</span></p>
                                                            <label class="labelSelect">
                                                                <select name="position" id="selectPosition" class="select-style02">
                                                                    <option value="#">Please select course  (Cache data from page applied)</option>
                                                                    <option value="#">Graphic Designer</option>
                                                                    <option value="#">Customer Service</option>
                                                                    <option value="#">Senior Accounting Manager</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Number of persons <span class="txtRed01">*</span></p>
                                                            <label class="labelSelect">
                                                                <select name="position" id="selectPosition" class="select-style02">
                                                                    <option value="#">10</option>
                                                                    <option value="#">9</option>
                                                                    <option value="#">8</option>
                                                                    <option value="#">5</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Additiontal Info </p>
                                                            <label>
                                                                <textarea name="info" id="info" class="textarea-style01" cols="30" rows="10"></textarea>
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
                                                        <div class="row">
                                                            <p class="ttlForm01">Tel/Fax. <span class="txtRed01">*</span></p>
                                                            <label>
                                                                <input type="text" name="tel" class="input-style01" />
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Address</p>
                                                            <label>
                                                                <textarea name="addr" id="addr" class="textarea-style01" cols="30" rows="10"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Province</p>
                                                            <label class="labelSelect">
                                                                <select name="province" id="selectProvince" class="select-style02">
                                                                    <option value="#">Bangkok</option>
                                                                    <option value="#">Nonthaburi</option>
                                                                    <option value="#">Samutprakarn</option>
                                                                    <option value="#">Nakhonpathom</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">District</p>
                                                            <label class="labelSelect">
                                                                <select name="District" id="selectDistrict" class="select-style02">
                                                                    <option value="#">Wattana</option>
                                                                    <option value="#">Nonthaburi</option>
                                                                    <option value="#">Samutprakarn</option>
                                                                    <option value="#">Nakhonpathom</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Subdistrict</p>
                                                            <label>
                                                                <input type="text" name="Subdistrict" class="input-style01" />
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <p class="ttlForm01">Postal Code</p>
                                                            <label>
                                                                <input type="text" name="Postal Code" class="input-style01" />
                                                            </label>
                                                        </div>
                                                        <div class="row clearfix mb00">
                                                            <div class="flL">
                                                                <input type="file"  name="file" class="input-file-style01 screenshot" />
                                                            </div>
                                                            <div class="flR taR mt10">
                                                                <a href="#" class="linkTerm">Terms &amp; Conditions</a>
                                                            </div>
                                                        </div>
                                                        <div class="row pt20 pb20">
                                                            Verfications I'm not a robot
                                                        </div>
                                                        
                                                        <div class="row boxBtn boxBtnApply">
                                                            <button type="reset" class="input-reset01 box-shadow-35">RESET</button>
                                                            <button type="submit" class="input-submit01 box-shadow-35">APPLY</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="colR">
                                                    <div class="boxHiring01">
                                                        <div class="row bd-bottom01">
                                                            <p class="bd-bottom01 taC mb20 pb10"><img src="assets/images/apply/logo-apply.png" alt="" class="img-responsive"/></p>
                                                            <div class="txt-hiring01 mb25">
                                                                <p class="mb10"><span class="heading">Course</span><span class="mr05">:</span>ANALYTICAL THINKING</p>
                                                                <p class="mb10"><span class="heading">Date</span><span class="mr05">:</span>09 SEP 2017</p>
                                                                <p class="mb10"><span class="heading">Persons</span><span class="mr05">:</span>10</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row bd-bottom01">
                                                            <div class="txt-hiring01 mb30">
                                                                <p class="fzL">PERSONAL INFORMATION</p>
                                                                <p class="mb10"><span class="heading">Name</span><span class="mr05">:</span>Mr. John Donnavon</p>
                                                                <p class="mb10"><span class="heading">Email</span><span class="mr05">:</span>jd39@gmail.com</p>
                                                                <p class="mb10"><span class="heading">Tel</span><span class="mr05">:</span>089-999-9898</p>
                                                            </div>
                                                            <div class="txt-hiring01 mb20">
                                                                <p class="fzL">ADDITIONAL INFO</p> 
                                                                New country business Full detials & informatio business
                                                                gravida velition sam the value gravida velition sam 
                                                                the value information.
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row mb00">
                                                            <ul class="listContact">
                                                                <li><a href="#" class="tel">02-999-9999</a></li>
                                                                <li><a href="#" class="email">Email us</a></li>
                                                                <li><a href="contactus.php" class="contact">Contact Us</a></li>
                                                                <li><a href="#" class="info">Get More Info</a></li>
                                                            </ul>
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
