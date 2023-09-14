<?php 
	$category = "book";
	$catetitle = "강의교재";
	$pagetitle = "기본이론";
	include './include/header.php';
?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/book.css">
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
					<h2><strong><?=$pagetitle?></strong></h2>
					<a href="" class="registerBtn">수강신청하기</a>
				</div>
				<section class="bookBox">
					<form action="">
						<ul>
							<?php for($i=0; $i<=4; $i++){ ?>
							<li>
								<div class="imgBox">
									<a href="#"><img src="./include/img/bookPic2.png" alt=""></a>
								</div>
								<div class="txtBox">
									<h3>
										<strong>교과교육론 (2022년 개정)</strong><br>
										<strong>저자 :</strong> 김병찬&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>출판사 :</strong> 애듀에프엠<br>
										<strong>가격 :</strong> 27,000 ▶ <strong style="color: #f30000">24,300 <span>(10% 할인)</span></strong>
									</h3>
									<a href="#" class="listView">목자보기</a>
								</div>
								<label for="inputBtn<?=$i?>">
									<input type="checkbox" name="" id="inputBtn<?=$i?>">
									<span class="choice"></span>
								</label>
							</li>
							<? } ?>
						</ul>
						<!-- 페이지 넘버 -->
						<div class="pagerBox">
							<a href="#" class="pagerPrev">
								<img src="./include/img/pagerPrev.png" alt="">
							</a>
							<div class="pagerLink">
								<a href="#" class="on">1</a>
								<a href="#" class="">2</a>
								<a href="#" class="">3</a>
								<a href="#" class="">4</a>
								<a href="#" class="">5</a>
								<a href="#" class="">6</a>
								<a href="#" class="">7</a>
								<a href="#" class="">8</a>
								<a href="#" class="">9</a>
								<a href="#" class="">10</a>
							</div>
							<a href="#" class="pagerNext">
								<img src="./include/img/pagerNext.png" alt="">
							</a>
						</div>
						<!-- e::페이지 넘버 -->
						<a href="#" class="bookOk">신청하기</a>
					</form>
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>