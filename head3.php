<?php
include_once($_SERVER['DOCUMENT_ROOT']."/common/mws_common.php");
//
//if(is_mobile() == true) {
//	echo "<script>window.location='/mobile/';</script>";
//}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>메이크웨이 - 웹솔루션, 웹프로그램개발, 홈페이지제작, 쇼핑몰제작</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumBarunGothic@1.0/nanumbarungothicsubset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="common/css/one.css">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="/<?php echo MKW_COMMON_DIR?>/jquery/jquery.form.js?ver=<?php echo MKW_VERSION ?>"></script>
	<script type="text/javascript" src="/<?php echo MKW_COMMON_DIR?>/jquery/jquery.cookie.js?ver=<?php echo MKW_VERSION ?>"></script>
	<script type="text/javascript" src="/<?php echo MKW_COMMON_DIR?>/script/common.js?ver=<?php echo MKW_VERSION ?>"></script>
	<script type="text/javascript">
	$(function() {

		$(document).on("click", ".inquirySubmit", function(e) {

			e.preventDefault();

			var frm   = this.form;
			var frmid = $(frm).attr('id');
			var valide  = $("#" + frmid + " *[data-valide]");
			
			if (commonChk(valide) === false) {
				return false;
			}

			var hp_obj = $("#bd_hp").val();
			if (!check_Tphone(hp_obj, "올바른 연락처를 입력해주세요.")) return false;
			
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
</head>
<body>
    <header>
      <div class="header_flex">
           <div class="logo">
               <img src="img/logo.png" alt="">
           </div>
            <nav>
                <ul>
                    <li>홈</li><span class="nav_line"></span>
                    <li>웹솔루션</li><span class="nav_line"></span>
                    <li>웹프로그램개발</li><span class="nav_line"></span>
                    <li>공지사항</li><span class="nav_line"></span>
                    <li>회사소개</li><span class="nav_line"></span>
                    <li class="contact">상담문의</li>
                </ul>
            </nav>
            <div class="ham_btn">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
            </div>
        </div>    
    </header>
    <div class="ham_menu" style="display:none;">
        <ul>
            <li>HOME</li>
            <li>SOLUTION</li>
            <li>PROGRAM</li>
            <li>NOTICE</li>
            <li>ABOUT</li>
            <li>CONTACT</li>
        </ul>
    </div>
    <div class="indicator">
        <div class="indi_line"></div>
        <div class="indi_circle"> 
            <div class="circle circle1">
                <span>MAIN</span>
            </div>
            <div class="circle circle2">
                <span>SOLUTION</span>
            </div>
            <div class="circle circle3">
                <span>PROGRAM</span>
            </div>
            <div class="circle circle4">
                <span>NOTICE</span>
            </div>
            <div class="circle circle5">
                <span>ABOUT</span>
            </div>
            <div class="circle circle6">
                <span>CONTACT</span>
            </div>
        </div>
        <div class="indi01 indi00">01</div>
        <div class="indi06 indi00">06</div>
    </div>
    <div class="mouse">
        <span class="mouse_ball"></span>
    </div>
    <div class="quick">
        <div class="quick1 quick_">
            <div class="q_col1">
                <span><i class="fas fa-chevron-left"></i></span>
            </div>
            <div class="q_col2">
                <div class="box1 box">
                    <img src="img/quick_3.jpg" alt="">
                </div>
                <div class="box2 box">
                    <img src="img/quick_2.jpg" alt="">
                </div>
                <div class="box3 box">
                    <img src="img/quick_1.jpg" alt="">
                </div>
                <div class="box4 box">
                    TOP
                </div>
            </div>
        </div>
        <div class="quick2 quick_">
            <div class="q_col1">
                <div><i class="fas fa-chevron-right"></i></div>            
                <div>Quick<br>menu</div>
            </div>
            <div class="q_col2">
                <div class="box1 box">
                    <img src="img/quick_3.jpg" alt="">
                    <span>견적문의</span>
                </div>
                <div class="box2 box">
                    <img src="img/quick_2.jpg" alt="">
                    <span>Q＆A</span>
                </div>
                <div class="box3 box">
                    <img src="img/quick_1.jpg" alt="">
                    <span>1:1상담</span>
                </div>
                <div class="box5 box">
                    <div>CS CENTER</div>
                    <h3>032.333.3333</h3>
                    <p>상담시간: 9:00~18:00<br>
                    점심시간: 12:00~13:00<br>
                    주말,공휴일 휴무
                    </p>
                </div>
                <div class="box4 box">
                    TOP
                </div>
            </div>
        </div>
    </div>  <!--quick menu end-->
