<?php 
	$category = "bbs";
	$catetitle = "고객센터";
	$pagetitle = "공지사항";
	include './include/header.php';
?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/bbs.css">
	<style>
		/*  */
		.lnb ul li:nth-child(1) a{
			font-weight: 600;
			color: var(--pCol);
		}
	</style>
	<script src="./include/js/join.js"></script>
	<!-- e::개별 css / js -->

		<!-- subVisual -->
		<?php include './include/subVisual.php';?>
		<!-- e::subVisual -->

		<!-- contents -->
		<div id="contents">
			<?php include './include/lnb.php';?>
			<div class="bodyContents">
				<div class="titBox">
					<h2><strong><?=$pagetitle?></strong> 상세보기</h2>
				</div>
				<section class="bbsWriteBox">
					<!-- 글 작성 -->
					<form action="">
						<ul class="formUl">
							<li>
								<h5>작성일</h5>
								<div class="inputBox">
									<input type="text" name="" value="<?php echo date("Y-m-d");?>">
								</div>
							</li>
							<li>
								<h5>글쓴이</h5>
								<div class="inputBox">
									<input type="text" name="" value="관리자">
								</div>
							</li>
							<li>
								<h5>제목</h5>
								<div class="inputBox">
									<input type="text" name="" placeholder="제목을 입력해주세요.">
								</div>
							</li>
							<li>
								<h5>&nbsp;</h5>
								<div class="inputBox">
									<textarea name="" id="" cols="30" rows="10" placeholder="내용을 입력해주세요."></textarea>
								</div>
							</li>
							<li>
								<h5>첨부파일</h5>
								<div class="inputBox">
									<input type="file" name="">
								</div>
							</li>
						</ul>
						<a href="#" class="writeBtn">
							저장하기
						</a>
					</form>
					<!-- e::글 작성 -->
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>