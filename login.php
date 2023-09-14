<?php 
	$category = "member";
	$catetitle = "로그인";
	$pagetitle = "로그인";
	include './include/header.php';
?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/login.css">
	<script src="./include/js/login.js"></script>
	<!-- e::개별 css / js -->

		<!-- contents -->
		<div id="contents">
			<?php include './include/lnb.php';?>
			<div class="bodyContents">
				<div class="titBox">
					<h2><strong><?=$pagetitle?></strong></h2>
				</div>
				<section class="logBox">
					<h3 class="logLogo">
						<img src="./include/img/simbol.png" alt="">
					</h3>
					<form action="">
						<ul>
							<li>
								<label for="id">아이디</label>
								<input type="text" name="id" id="id">
							</li>
							<li>
								<label for="password">비밀번호</label>
								<input type="password" name="password" id="password">
							</li>
						</ul>
						<input type="submit" value="로그인" class="loginBtn">
						<div class="logMenu">
							<a href="./join.php">회원가입</a>
							<a href="#">비밀번호찾기</a>
						</div>
					</form>
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>