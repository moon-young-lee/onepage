<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/head3.php";

?>
<script type="text/javascript">
$(function() {

	$(".inquirySubmit").on("click", function(e) {

		e.preventDefault();

		var frm   = this.form;
		var frmid = $(frm).attr('id');
		var valide  = $("#" + frmid + " *[data-valide]");
		
		if (commonChk(valide) === false) {
			return false;
		}

		if(!kcaptcha_compare()) {
			return false;
		}

		var agree = $("#agreechk:checked").length;

		if(agree == 0){
			alert("상담문의를 위해서 개인정보 수집이용 동의가 필요합니다.");
			return false;
		}

		var params = $("#inquiryFrm").serialize();
		$.ajax({
			type      : "POST"
			,url      : "/common/ajax/inquiry_ajax.php"
			,data     : params
			,cache    : false
			,dataType : "json"
			,success  : function(data) {
				if(data.result == '0000') {
					alert(data.msg);
					document.location.reload();
				}

			}
			,error: function (request, status, error) {
				console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
			}
		});

	});

});
</script>

	<div id="notice">
		<div class="inner_box">
			<div><a href="/"><img src="/img/makeway_logo.png" border="0" alt="메이크웨이"></a></div>
			<div id="content">
				<div id="list_type">
					<h2>공지사항</h2>
				</div>
				<?php
				$bd_id = "notice";
				include $_SERVER['DOCUMENT_ROOT']."/common/board/board.php";
				?>
			</div>
		</div>
	</div>
	<div class="inquiry">
		<div class="inner_box">
			<?php
			if(!$method) {

				$bd_id = "inquiry";
				include(MKW_INC_PATH.'/board_inc.php');
				if($board_info["bd_spam"] == "Y") include_once(MKW_LIB_PATH.'/captcha_lib.php');

			?>
			<div id="content">
				<div id="list_type">
					<h2>CONSULTATION</h2>
				</div>
				<form name="inquiryFrm" id="inquiryFrm" method="post" action="/common/board.php">
				<input type='hidden' name='method' id='method' value='mwss'>
				<input type='hidden' name='mode' id='mode' value='mw'>
				<input type="hidden" name="bd_id" id="bd_id" value="<?php echo $bd_id ?>">
				<input type="hidden" name="editor" value="">
				<div class="in_left">
					<table class="bbs_input">
						<tr>
							<th>회사명 *</th>
							<td><input name="bd_subject" id="bd_subject" type="text" class="input_l" title="회사명" data-valide="input,회사명"></td>
						</tr>
						<tr>
							<th>담당자 *</th>
							<td><input name="bd_username" id="bd_username" type="text" class="input_l" title="담당자" data-valide="input,담당자"></td>
						</tr>
						<tr>
							<th>상담유형 *</th>
							<td>
								<label><input type="radio" name="bd_addfield1" value="웹솔루션 문의" id="contype" data-valide="radio,상담유형"> 웹솔루션 문의</label><span class="space"></span>
								<label><input type="radio" name="bd_addfield1" value="홈페이지 제작문의" id="contype" data-valide="radio,상담유형"> 홈페이지 제작문의</label><span class="space"></span>
								<label><input type="radio" name="bd_addfield1" value="쇼핑몰 제작문의" id="contype" data-valide="radio,상담유형"> 쇼핑몰 제작문의</label><span class="space"></span>
								<!-- <label><input type="radio" name="bd_addfield1" value="프로그램 개발문의" id="contype" data-valide="radio,상담유형"> 프로그램 개발문의</label> -->
							</td>
						</tr>
						<tr>
							<th>연락처 *</th>
							<td class="hphone">	
								<select name="bd_hp[]" id="hp1" title="앞번호 선택" style="width:155px" data-valide="select,연락처">
								  <option value="010">010</option>
								  <option value="011">011</option>
								  <option value="016">016</option>
								  <option value="017">017</option>
								  <option value="018">018</option>
								  <option value="019">019</option>
								</select><span> - </span><input type="text" name="bd_hp[]" id="hp2" class="input_num Onum" maxlength="4" title="중간번호" data-valide="input,연락처"><span> - </span><input type="text" name="bd_hp[]" id="hp3" class="input_num Onum" maxlength="4" title="끝번호" data-valide="input,연락처">
							</td>
						</tr>
						<tr>
							<th>이메일 *</th>
							<td><input name="bd_email[]" id="s_email_1" type="text" size="30" class="input_email" title="이메일" data-valide="email,이메일">@<input type="text" name="bd_email[]" id="s_email_2" title="이메일" class="input_email" data-valide="email,이메일"><select title="메일선택" class="email_select2" onchange="change_email(this.value);">
								  <option value="직접입력">직접입력</option>
								  <option value="naver.com">naver.com</option>
								  <option value="daum.net">daum.net</option>
								  <option value="hanmail.net">hanmail.net</option>
								  <option value="hotmail.com">hotmail.com</option>
								  <option value="gmail.com">gmail.com</option>
								</select></td>
						</tr>
						<tr>
							<th>문의내용 *</th>
							<td>
								<textarea name="bd_content" id="bd_content" rows="11" title="내용" data-valide="textarea,문의내용"></textarea>
							</td>
						</tr>
						<tr>
							<th>자동방지글 *</th>
							<td>
								<?php echo $catpcha_img ?>
							</td>
						</tr>
					</table>
					<div class="privacy">
						<p class="check_privacy"><input type="checkbox" id="agreechk" name="agreechk" title="개인정보 수집 이용등의 동의"/> <label for="agreechk">개인정보 수집 이용등의 동의</label> <a onClick="javascript:window.open('/popup/pop_apply_privacy.php','','height=600, width=500, menubar=no, scrollbars=no, resizable=no, toolbar=no, status=no');">내용보기</a></p>
						<p class="btn"><input type="button" value="문의하기" class="btn_ok inquirySubmit" style="cursor:pointer" /></p>
					</div>
				</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/foot3.php";
?>