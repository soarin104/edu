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
					<h2><strong><?=$pagetitle?></strong> 목록</h2>
				</div>
				<section class="bbsListBox">
					<!-- 게시판 목록 -->
					<form action="">
						<table class="bbsTable">
							<thead>
								<tr>
									<th>번호</th>
									<th>제목</th>
									<th>글쓴이</th>
									<th>등록일</th>
								</tr>
							</thead>
							<tbody>
								<tr class="highlight">
									<td class="num">
										<span class="block">공지</span>
									</td>
									<td class="subject">
										<a href="./notice_view.php">
											<h3>[2024학년도] 초등임용시험 예고 <span class="reply">[12]</span></h3>
										</a>
									</td>
									<td class="writer">
										관리자
									</td>
									<td class="date">
										23-08-30
									</td>
								</tr>
								<?php for($i=1; $i<=10; $i++){ ?>
								<tr>
									<td class="num">
										<?=$i?>
									</td>
									<td class="subject">
										<a href="./notice_view.php">
											<h3>2022 개정 교육과정 안내 리플릿</h3>
										</a>
									</td>
									<td class="writer">
										관리자
									</td>
									<td class="date">
										23-08-30
									</td>
								</tr>
								<? } ?>
							</tbody>
						</table>
						<div class="bbsBottom">
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
							<!-- 관리 버튼 -->
							<div class="bbsBtn">
								<a href="./notice_write.php" class="writeBtn">글쓰기</a>
							</div>
							<!-- e::관리 버튼 -->
						</div>
					</form>
					<!-- e::게시판 목록 -->

					<!-- 검색창 -->
					<form action="">
						<aside class="searchBox">
							<select name="" id="">
								<option value="제목">제목</option>
								<option value="글쓴이">글쓴이</option>
								<option value="내용">내용</option>
							</select>
							<input type="text" name="" placeholder="검색어를 입력하세요.">
							<button type="button" class="searchBtn">검색하기</button>
						</aside>
					</form>
					<!-- e:검색창 -->
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>