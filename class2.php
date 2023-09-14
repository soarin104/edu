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
		.lnb ul li:nth-child(2) a{
			font-weight: 600;
			color: var(--pCol);
		}

		.t1,
		.t2,
		.t3,
		.t4,
		.t5,
		.t6{
			vertical-align: middle;
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
								<!-- <tr><td colspan="6" height="10" class="spaceTd"></td></tr> -->
								<tr>
									<td class="t1">
										<span class="block">단과</span>
									</td>
									<td class="t2">
										<h3>
											<a href="#">
												<span style="color: var(--pCol);">[개강일:2023-09-08]</span> <br>
												<strong>실전 모의고사(2023년 9~10월)</strong><br>
												교재 : 프린트
											</a>
										</h3>
									</td>
									<td class="t3">80일/1.6배</td>
									<td class="t4">
										<a href="#" class="block">1M HD</a>
									</td>
									<td class="t5">
										660,000원<br>
										▼<br>
										<strong>660,000원 <br><span>(10% 할인)</span></strong>
									</td>
									<td class="t6">
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
								<!-- <tr><td colspan="6" height="10" class="spaceTd"></td></tr> -->
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