<?php 
	$category = "class";
	$catetitle = "수강신청";
	$pagetitle = "패키지";
	include './include/header.php';
?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/class.css">
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
					<a href="#" class="registerBtn">수강신청하기</a>
				</div>
				<section class="classBox">
					<form action="">
						<table>
							<thead>
								<tr>
									<th>선생님</th>
									<th>강좌명</th>
									<th>시간제한</th>
									<th>강의맛보기</th>
									<th>수강료</th>
									<th>신청</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<=4; $i++){ ?>
								<tr><td colspan="6" height="10" class="spaceTd"></td></tr>
								<tr>
									<td class="t1" rowspan="4">
										<span class="block">패키지</span>
									</td>
									<td class="t2">
										<h3>
											<a href="#">
												<strong>[패키지] 하반기 패키지 (2023년 7~10월)</strong>
											</a>
										</h3>
									</td>
									<td class="t3"></td>
									<td class="t4"></td>
									<td class="t5"></td>
									<td class="t6"></td>
								</tr>
								<tr>
									<td class="t2">
										<h3>
											<a href="#">
												<strong>영역별·주제별 문제풀이 (2023년 7월~8월)</strong><br>
												교재 : 프린트
											</a>
										</h3>
									</td>
									<td class="t3">80일/1.6배</td>
									<td class="t4">
										<a href="#" class="block">1M HD</a>
									</td>
									<td class="t5" rowspan="3">
										660,000원<br>
										▼<br>
										<strong>660,000원 <br><span>(10% 할인)</span></strong>
									</td>
									<td class="t6" rowspan="3">
										<label for="">
											<input type="checkbox" name="" id="">
											<span>강의</span>
										</label>
										<label for="">
											<input type="checkbox" name="" id="">
											<span>교재</span>
										</label>
									</td>
								</tr>
								<tr>
									<td class="t2">
										<h3>
											<a href="#">
												<strong>실전모의고사 (2023년 9월~10월)</strong><br>
												교재 : 프린트
											</a>
										</h3>
									</td>
									<td class="t3">80일/1.6배</td>
									<td class="t4">
										<a href="#" class="block">1M HD</a>
									</td>
								</tr>
								<tr>
									<td class="t2">
										<h3>
											<a href="#">
												<strong>기타학자들(7월~8월 수강생 전용 보충강의)</strong><br>
												교재 : 프린트
											</a>
										</h3>
									</td>
									<td class="t3">80일/1.6배</td>
									<td class="t4">
										<a href="#" class="block">1M HD</a>
									</td>
								</tr>
								<tr><td colspan="6" height="10" class="spaceTd"></td></tr>
								<tr><td colspan="6" height="1" class="borderTd"></td></tr>
								<? } ?>
							</tbody>
						</table>
						<a href="#" class="classOk">수강신청하기</a>
					</form>
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>