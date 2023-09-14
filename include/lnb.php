<aside class="lnb">
	<h2 class="pageTitle pc">
		<?=$catetitle?>
	</h2>
	<h2 class="pageTitle mb">
		<?=$pagetitle?>
	</h2>
	<ul data-cate="<?=$category?>">
		<?php
			//LNB 조건문 (카테고리 기준)
			if($category == "class"){
				echo '<li><a href="./class1.php">패키지</a></li>';
				echo '<li><a href="./class2.php">단과</a></li>';
				echo '<li><a href="#">2차준비</a></li>';
				echo '<li><a href="#">특강</a></li>';
			}
			else if($category == "book"){
				echo '<li><a href="./book1.php">기본이론</a></li>';
				echo '<li><a href="./book2.php">미니모고</a></li>';
				echo '<li><a href="./book3.php">실전모고</a></li>';
			}
			else if($category == "bbs"){
				echo '<li><a href="./notice.php">공지사항</a></li>';
				echo '<li><a href="#">업데이트 공지</a></li>';
				echo '<li><a href="#">자주하는 질문</a></li>';
				echo '<li><a href="#">1:1상담</a></li>';
				echo '<li><a href="#">이용안내</a></li>';
				echo '<li><a href="#">필수프로그램</a></li>';
			}
			else if($category == "member"){
				echo '<li><a href="./login.php">로그인</a></li>';
				echo '<li><a href="./join.php">회원가입</a></li>';
				echo '<li><a href="./login.php">아이디/패스워드 찾기</a></li>';
			}
		?>
	</ul>
</aside>