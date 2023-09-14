<?php 
	$category = "member";
	$catetitle = "로그인";
	$pagetitle = "회원가입";
	include './include/header.php';
?>
	<!-- 개별 css / js -->
	<link rel="stylesheet" href="./include/css/sub.css">
	<link rel="stylesheet" href="./include/css/join.css">
	<script src="./include/js/join.js"></script>
	<!-- e::개별 css / js -->

		<!-- contents -->
		<div id="contents">
			<?php include './include/lnb.php';?>
			<div class="bodyContents">
				<div class="titBox">
					<h2><strong><?=$pagetitle?></strong></h2>
				</div>
				<section class="joinBox">
					<form action="">
						<ul class="tableUl">
							<li>
								<h3>아이디 (ID)</h3>
								<div class="inBox">
									<input type="text" name="" id="">
									<button type="button" onclick="" class="idcheck">중복ID확인</button>
									<p class="txt">
										4~20자의 영소문자, <span class="red">한글 아이디 등록불가</span>
									</p>
								</div>
							</li>
							<li>
								<h3>비밀번호</h3>
								<div class="inBox">
									<input type="password" name="">
									<p class="txt">
										최소 6자 최대 20자
									</p>
								</div>
							</li>
							<li>
								<h3>비밀번호 확인</h3>
								<div class="inBox">
									<input type="password" name="">
								</div>
							</li>
							<li>
								<h3>한글이름</h3>
								<div class="inBox">
									<input type="text" name="">
									<p class="txt">
										이름은 <span class="red">실명으로 공백없이</span> 입력하세요.
									</p>
								</div>
							</li>
							<li class="emailLi">
								<h3>E-mail</h3>
								<div class="inBox">
									<input type="text" name="">
									<span class="e">@</span>
									<input type="text" name="">
									<p class="txt">
										메일 전달이 안될경우 스팸메일함도 꼭 확인하세요. <br>
										(단체메일 발송시 받는 메일 서버가 자동으로 스팸 메일로 분류 하는 경우가 있습니다. )
									</p>
								</div>
							</li>
							<li class="addLi">
								<h3>주소</h3>
								<div class="inBox">
									<input type="text" name="">
									<button type="button" onclick="" class="addfind">우편번호 찾기</button>
									<input type="text" name="" placeholder="상세주소를 입력해주세요.">
								</div>
							</li>
							<li class="telLi">
								<h3>휴대폰</h3>
								<div class="inBox">
									<input type="tel" name="" value="010">
									<span class="e">-</span>
									<input type="tel" name="">
									<span class="e">-</span>
									<input type="tel" name="">
									<p class="txt">
										*sms 수신동의
									</p>
									<label for="smsO">
										<input type="radio" name="sms" id="smsO" value="o">
										<span>예</span>
									</label>
									<label for="smsX">
										<input type="radio" name="sms" id="smsX" value="x">
										<span>아니오</span>
									</label>
								</div>
							</li>
							<li>
								<h3>직업</h3>
								<div class="inBox">
									<select name="" id="">
										<option value="">선택</option>
										<option value="직장인">직장인</option>
										<option value="프리랜서">프리랜서</option>
										<option value="자영업">자영업</option>
										<option value="주부">주부</option>
										<option value="기타">기타</option>
									</select>
								</div>
							</li>
							<li>
								<h3>사이트를 알게 된 경로</h3>
								<div class="inBox">
									<select name="" id="">
										<option value="">선택</option>
										<option value="검색">검색</option>
										<option value="지인">지인</option>
										<option value="광고">광고</option>
									</select>
								</div>
							</li>
							<li>
								<h3>자기소개</h3>
								<div class="inBox">
									<textarea name="" id="" cols="30" rows="10"></textarea>
								</div>
							</li>
						</ul>

						<div class="formBtn">
							<input type="submit" class="joinBtn" value="회원가입">
							<button type="button" onclick="history.back();" class="joinCancle">취소</button>
						</div>
					</form>
				</section>
			</div>
		</div>
		<!-- e::contents -->
<?php include './include/footer.php'; ?>