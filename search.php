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
               
        $('#listResult01 li').matchHeight({byRow: true});
        
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
                                <div class="sectionTop01 bgN pb00">
                                    <div class="boxLink01 clearfix bgN">
                                        <div href="#" class="breadcrumb flL">
                                            <a href="index.php" class="home"><img src="assets/images/common/ico-home01.png" alt="Home" class="img-responsive"/> /</a>
                                            <a href="#">Search</a>
                                        </div>
                                    </div>
                                    
                                    <div class="sectionIn01">
                                        <div class="boxInputSearch01 bd-bottom02">
                                            <span class="ttlSearch">SEARCH</span>
                                            <input type="text" name="search" placeholder="Text Search" class="input-type01" />
                                        </div>
                                        <div class="boxSearchResult">
                                            <p class="txtResult01">Search Result</p>
                                            <p class="txtTotalResult">9 Results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sectionTop01">
                                    <div class="sectionIn01">
                                        
                                        <div class="boxResult">
                                            <div class="boxSearchFilter">
                                                <span>Filter by </span>
                                                <label>
                                                    <select name="courseName" id="courseName" class="select-style01">
                                                        <option value="#">Name of Courses</option>
                                                        <option value="#">Leadership Thinking</option>
                                                        <option value="#">Supervisor & Manager</option>
                                                        <option value="#">Leadership Skills</option>
                                                    </select>
                                                </label>
                                                
                                                <label>
                                                    <select name="month" id="month" class="select-style01">
                                                        <option value="#">This Week</option>
                                                        <option value="#">This Month</option>
                                                        <option value="#">This Year</option>
                                                    </select>
                                                </label>
                                                
                                                <label class="select-popular">
                                                    <select name="popular" id="popular" class="select-style01">
                                                        <option value="#">Most Popular</option>
                                                        <option value="#">Most Popular</option>
                                                        <option value="#">Most Popular</option>
                                                    </select>
                                                </label>
                                            </div>
                                            
                                            <ul  id="listResult01" class="list_basic02">
                                                <li>
                                                    <img src="assets/images/top/e2.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #2</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e3.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #3</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e4.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #4</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e3.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #2</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e2.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #3</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e4.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #4</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e4.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #2</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e2.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #3</a>
                                                </li>
                                                <li>
                                                    <img src="assets/images/top/e3.png" alt="#" />
                                                    <a href="#" class="linkEvent01">New Events Just Added #4</a>
                                                </li>
                                            </ul>
                                        </div>
                                    <!-- /sectionIn02 --></div>
                                    
                                    
                                <!-- /sectionTop01 --></div>

                                
                            <!-- /main01 --></div>
                                
			<!-- /contents --></div>

		<!-- /container --></div>
	<!-- /containerWrap --></div>
<!-- /wrapper --></div>
<?php include('/inc/footer.php'); ?>
</body>
</html>
