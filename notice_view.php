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
	<script src="./include/js/bbs.js"></script>
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
				<section class="bbsViewBox">
					<!-- 상세보기 -->
					<form action="">
						<table class="bbsTable">
							<thead>
								<tr>
									<th>제목</th>
									<th>글쓴이</th>
									<th>등록일</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="subject">
										<a href="#">
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
								<tr>
									<td colspan="3">
										<div class="fileBox">
											<h5>첨부파일</h5>
											<a href="#">
												<img src="./include/img/icon_file.png" alt="">
												<p>[다운로드] 초등임용시험</p>
											</a>
										</div>
									</td>
								</tr>
								<tr class="bbsCon">
									<td colspan="3">
										<section class="bbsSection">
											<!-- 작성글 불러오는 영역 -->
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, asperiores veritatis quo ut sequi modi sed illo quam necessitatibus harum. Cumque, at, perferendis, sequi non placeat nam quas impedit asperiores excepturi laboriosam officia amet suscipit? Magnam, blanditiis ex ipsum eos.
											</p>
											<br>
											<img src="./include/img/bbsEximg.png" alt="">
											<!-- e::작성글 불러오는 영역 -->
										</section>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- 댓글 -->
						<div class="replyDiv">
							<h2 class="replyTit">
								댓글<span>4</span>
							</h2>
							<ul class="reUl">
								<? for($i=0; $i<=3; $i++){ ?>
								<li class="reLi">
									<p class="reName">
										김**
									</p>
									<p class="reTxt">댓글입니다.</p>
									<p class="reDate">2023-00-00</p>
									<div class="reBtn">
										<span class="icon">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<ul>
											<li><a href="#">답변</a></li>
											<li><a href="#">삭제</a></li>
										</ul>
									</div>
								</li>
								<? } ?>
							</ul>
							<form action="">
								<div class="replyForm">
									<textarea name="" id="" cols="30" rows="10" placeholder="댓글 내용을 입력해주세요."></textarea>
									<ul>
										<li><input type="text" name="" placeholder="이름"></li>
										<li><input type="password" name="" placeholder="비밀번호"></li>
										<li><a href="#" class="replyOk">등록</a></li>
									</ul>
								</div>
							</form>
						</div>
						<!-- e::댓글 -->
						<div class="bbsBottom">
							<!-- 관리 버튼 -->
							<div class="setBtn">
								<a href="#" class="fixBtn">수정</a>
								<a href="#" class="delBtn">삭제</a>
							</div>
							<div class="bbsBtn">
								<a href="./notice.php" class="listBtn">목록</a>
								<a href="./notice_write.php" class="writeBtn">글쓰기</a>
							</div>
							<!-- e::관리 버튼 -->
						</div>
					</form>
					<!-- e::상세보기 -->
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>