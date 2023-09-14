<!doctype html>
<html lang="ko">
<head>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10">
	<meta name="format-detection" content="telephone=no">

	<!-- seo -->
	<meta property="og:type" content="website">
	<!-- <meta property="og:url" content="https://example.com/page.html"> -->
	<meta property="og:title" content="정현교육학">
	<meta property="og:image" content="./include/img/ogImage.png">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="정현교육학">
	<link rel="shortcut icon" type="image/x-icon" href="./include/img/favicon.ico" />
	<title>정현교육학</title>

	<!-- 공통 css -->
	<link rel="stylesheet" href="./include/css/reset.css">
	<link rel="stylesheet" href="./include/css/animate.css">
	<link rel="stylesheet" href="./include/css/common.css">
	<!-- e::공통 css -->

	<!-- 공통 js -->
	<script src="./include/js/jquery-1.12.4.min.js"></script><!-- e::제이쿼리 라이브러리 -->
	<!-- <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
	<script>
		$(function(){
			const lenis = new Lenis()
	
			lenis.on('scroll', (e) => {
			  //console.log(e)
			})
	
			function raf(time) {
			  lenis.raf(time)
			  requestAnimationFrame(raf)
			}
	
			requestAnimationFrame(raf)
		})
	</script> --><!-- e::스크롤 부드럽게 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script><!-- e::애니메이션 활성화 -->
	<script src="./include/js/common.js"></script>
	<!-- e::공통 js -->


	<!-- slick -->
	<link rel="stylesheet" href="./include/plug/slickSlider/slick.css">
	<link rel="stylesheet" href="./include/plug/slickSlider/slick-theme.css">
	<script src="./include/plug/slickSlider/slick.min.js"></script>
	<!-- e::slick -->
</head>
<body>
	<!-- WRAP -->
	<div id="wrap">
		<!-- HEADER -->
		<header class="header">
			<div class="util">
				<div class="inner">
					<ul class="global">
						<li><a href="./login.php">로그인</a></li>
						<li><a href="#">장바구니</a></li>
						<li><a href="./join.php">회원가입</a></li>
					</ul>
					<a href="tel:02-000-0000">02-000-0000</a>
				</div>
			</div>
			<div class="inner">
				<h1 class="logo">
					<a href="./">
						<img src="./include/img/logo.png" alt="">
					</a>
				</h1>
				<nav>
					<ul class="gnb">
						<li class="<?php if($category == " "){echo 'on';}?>">
							<a href="#">무료강의</a>
						</li>
						<li class="<?php if($category == " "){echo 'on';}?>">
							<a href="#">강의계획</a>
							<ul class="depth2">
								<li><a href="#">1~4월</a></li>
								<li><a href="#">5~7월</a></li>
								<li><a href="#">8~9월</a></li>
								<li><a href="#">10~11월</a></li>
							</ul>
						</li>
						<li class="<?php if($category == "class"){echo 'on';}?>">
							<a href="#">수강신청</a>
							<ul class="depth2">
								<li><a href="./class1.php">패키지</a></li>
								<li><a href="./class2.php">단과</a></li>
								<li><a href="#">2차준비</a></li>
								<li><a href="#">특강</a></li>
							</ul>
						</li>
						<li class="<?php if($category == "book"){echo 'on';}?>">
							<a href="#">강의교재</a>
							<ul class="depth2">
								<li><a href="./book1.php">기본이론</a></li>
								<li><a href="./book2.php">미니모고</a></li>
								<li><a href="./book3.php">실전모고</a></li>
							</ul>
						</li>
						<li class="<?php if($category == " "){echo 'on';}?>">
							<a href="#">학습자료</a>
							<ul class="depth2">
								<li><a href="#">기출모음</a></li>
								<li><a href="#">행복한교육</a></li>
							</ul>
						</li>
						<li class="<?php if($category == " "){echo 'on';}?>">
							<a href="#">나의강의실</a>
							<ul class="depth2">
								<li><a href="#">수강강좌관리</a></li>
								<li><a href="#">무료강의</a></li>
								<li><a href="#">장바구니</a></li>
								<li><a href="#">결제확인/미확인입금자</a></li>
								<li><a href="#">교재/배송조회</a></li>
							</ul>
						</li>
						<li class="<?php if($category == "bbs"){echo 'on';}?>">
							<a href="#">고객센터</a>
							<ul class="depth2">
								<li><a href="./notice.php">공지사항</a></li>
								<li><a href="#">업데이트 공지</a></li>
								<li><a href="#">자주하는 질문</a></li>
								<li><a href="#">1:1상담</a></li>
								<li><a href="#">이용안내</a></li>
								<li><a href="#">필수프로그램</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<span class="mb menuBtn">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
		</header>
		<!-- e::HEADER -->

		<!-- QUICKBAR -->
		<aside class="quickBar">
			<h3 class="quickHead">
				<img src="./include/img/quickHead.png" alt="">
			</h3>
			<ul>
				<li>
					<a href="#">
						<img src="./include/img/quickCafe.png" alt="">
						<span>카페</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./include/img/quickScore.png" alt="">
						<span>채점</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./include/img/quickConsult.png" alt="">
						<span>상담신청</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="./include/img/quickYoutube.png" alt="">
						<span>유튜브</span>
					</a>
				</li>
			</ul>
			<div class="quickTop">
				<img src="./include/img/quickTop.png" alt="">
			</div>
		</aside>
		<!-- e::QUICKBAR -->