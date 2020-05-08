</div>
    
    <footer>
    <div class="footer_black" style="display: none">
          <div class="foot_box">
                <span><i class="fas fa-times"></i></span>
                준비중입니다.
          </div>
    </div>
	<div class="wrap">
		<div class="col1 col">
			<img src="img/logo.png" alt="">
			<ul class="input_flex">
				<li>회사소개</li>
				<li>개인정보처리방침</li>
				<li>이용약관</li>
				<li>오시는길</li>
			</ul>
			<p>대표 : 김영숙  |  인천광역시 미추홀구 경인로229 인천IT타워 412호<br>
			문의 : 032)710-0825  |  FAX : 032)232-1825<br>
			업무시간 : 평일 09:00~18:00, 주말·공휴일 휴무<br>
			mkw@makeway.co.kr  |   사업자등록번호 : 748-53-00262<br><br><br>
			Copyrightⓒ2020 MAKEWAY. All right reserved.
			</p>
		</div>
		<div class="col2 col">
			<div>간편견적문의<span class="col2_smallTxt">상세 견적문의는 전화 또는 <span class="here contact">여기</span>를 클릭하세요.</span></div>
			<form name="inquiryFrm" id="inquiryFrm" method="post" action="/common/board.php">
			<input type='hidden' name='method' id='method' value='mwss'>
			<input type='hidden' name='mode' id='mode' value='mw'>
			<input type="hidden" name="bd_id" id="bd_id" value="inquiry">
			<input type="hidden" name="editor" value="">
				<div class="input_flex">
					<div class="input_txt">
						<input type="text" name="bd_subject" id="bd_subject" placeholder="이름(고객성함)" title="회사명" data-valide="input,회사명">
					</div>
					<div class="input_txt">
						<input type="text" name="bd_hp" id="bd_hp" placeholder="휴대폰번호" title="휴대폰" class="CheckHypen" maxlength="13" data-valide="input,연락처">
					</div>
				</div>
				<div class="input_flex">
					<div class="input_txt input_txt2">
						<input type="text" name="bd_email" id="bd_email" placeholder="이메일" title="이메일" data-valide="email2,이메일">
					</div>
				</div>
				<div class="con_blank con_blank1">
				    <span>상담유형</span>
				    <div class="flex">
				        <label>
                            <input type="radio" name="bd_addfield1" value="웹솔루션 문의" id="contype" data-valide="radio,상담유형">웹솔루션
                        </label>
                        <label>
                            <input type="radio" name="bd_addfield1" value="홈페이지 제작문의" id="contype" data-valide="radio,상담유형">홈페이지제작
                        </label>
                        <label>
                            <input type="radio" name="bd_addfield1" value="쇼핑몰 제작문의" id="contype" data-valide="radio,상담유형">쇼핑몰제작
                        </label>
				    </div>
				</div>
				<div>
					<textarea placeholder="문의내용" class="input_txt" name="bd_content" id="bd_content" cols="30" rows="10" data-valide="textarea,문의내용"></textarea>
				</div>
				<div class="input_flex">
					<div class="input_txt input_txt2">
						<input type="text" name="bd_addfield2" placeholder="참고사이트">
					</div>
				</div>
				<div class="con_blank con_blank2">
				    <label>
                        <input type="checkbox" id="agreechk" name="agreechk" title="개인정보 수집 이용등의 동의">개인정보수집이용동의
				    </label>
				</div>
				<div class="security_box input_flex">
					<script type="text/javascript" src="<?php echo MKW_CAPTCHA_URL ?>/kcaptcha/kcaptcha.js"></script>
				    <div class="input_txt">
						<fieldset id="captcha" class="captcha"><img id="kcaptcha_image"></fieldset>
						<span id="captchaReload" class="captchaReolad">새로고침</span>
						
					</div>
					<div class="input_txt input_txt4">
						<input type="text" name="mcaptcha_Key" id="mcaptcha_Key" placeholder="보안문자확인" data-valide="input,보안문자" maxlength="6">
					</div>
					<div class="input_send">
						<input type="button" value="문의하기" class="secu_send inquirySubmit" style="cursor:pointer">
					</div>
				</div>
			</form>
		</div>
		<div class="col3 col">
			<div id="map" class="map"></div>
			<div class="location_txt">
				<i class="fas fa-map-marker-alt"></i>
				<div>Location</div>
				<p>인천광역시 미추홀구<br>경인로229 인천IT타워 412호</p>
			</div>
		</div>
	</div>
  </footer>
</body>
</html>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d11c451534a4d3c24cdabd87bb0077b0&libraries=services"></script>
<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<!--<script src="jquery.mobile-events.js"> </script>-->
<script type="text/javascript">

	var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
		mapOption = { 
			center: new kakao.maps.LatLng(37.464755, 126.667876), // 지도의 중심좌표
			level: 3 // 지도의 확대 레벨
		};

	var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

	// 마커가 표시될 위치입니다 
	var markerPosition  = new kakao.maps.LatLng(37.464755, 126.667876); 

	// 마커를 생성합니다
	var marker = new kakao.maps.Marker({
		position: markerPosition
	});

	// 마커가 지도 위에 표시되도록 설정합니다
	marker.setMap(map);

(function(d) {

	var options = {
		partnerId : 'W4WIOU', // 톡톡 파트너계정 아이디
		imageUrl : '/img/talk_ico.png', // 버튼아이콘 URL (첨부파일)
				   size : 80, // 버튼 사이즈. PC에서는 80, 모바일에서는 56 권장
		right : 20, // 버튼 위치. 화면 오른쪽에서의 거리
		bottom : 20, // 버튼 위치. 화면 아래에서의 거리
		circle : true, // 버튼 둥글게
		shadow : true // 그림자 효과
	}

	var img = document.createElement('img');
	img.src = options.imageUrl;
	img.width = options.size ;
	img.height = options.size;
	img.style.bottom = options.bottom + 'px';
	img.style.right = options.right + 'px';
	img.style.position = 'fixed';
	img.style.zIndex = 99999;
	img.style.cursor = 'pointer';
	img.style.borderRadius = options.circle ? '50%' : '';
	img.style.boxShadow = options.shadow ? '0 0 4px rgba(0,0,0,.16), 0 4px 4px rgba(0,0,0,.24)' : '';
	img.onclick = function(e) {
	window.open('https://talk.naver.com/' + options.partnerId + '?ref=' + encodeURIComponent(location.href) + '#nafullscreen', 'talktalk', 'scrollbars=1, resizable=1, width=486, height=745');
}
	d.getElementsByTagName('html')[0].appendChild(img);

})(document);

</script>
<!-- <script src="//code.jquery.com/jquery-1.11.3.js"></script> -->
<!--
<script
  src="https://code.jquery.com/jquery-3.5.0.js"
  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
-->

<!--<script src="//code.jquery.com/jquery-1.12.4.js"></script>-->
<script>
var page_i = 0; var main_i = 0; var main_slide;
$(document).ready(function(){
    $('.noti_black, .main2_black, .footer_black').hide();
    indi_ani(0);
    setInterval(main_slide,20000);
    $('.main1_indi_').eq(page_i).css({'background':'#006cff'});
    
     if( win_w < 400 ){
        $('footer .col1').appendTo('footer .col2');
        $('.mouse').hide();
        $('.main1_indi').css('position','absolute');
   }else if( win_w < 680 ){
        $('footer .col1').prependTo('footer .col2');
   }else if( win_w < 980 ){
        $('.mouse').fadeIn();
        $('.mouse').css('opacity','1');
    }else if( win_w > 980 ){
        $('.mouse').hide();
        $('.mouse').css('opacity','0'); 
        $('.main1_indi').css('position','absolute');
    }
    
})    
//첫번째,메인 롤링    
function main_slide(){
    main_i++;
    main_i=main_i%3;
    $('.main1_indi_').eq(main_i).css({'background':'#006cff'});
    $('.main1_indi_').not($('.main1_indi_').eq(main_i)).css({'background':'#fff'});
    $('.main1 .frame').stop().animate({'left':-main_i*100+'vw'},700);
}  
   

    
    
    
function indi_ani(page_i){
//    ~페이지마다 인디케이터,마우스 다른 색상~
    switch(page_i){
        case 0:
            $('.indi_line').css({'background':'#eee'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'white'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#aaa'});
            $('.indicator .circle span').eq(page_i).css({'color':'white', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'white', opacity: '.4'});
            $('.indi00').css('color','white');

            $('.mouse').css({border:'2px solid #fff'});
            $('.mouse .mouse_ball').css({background:'#fff'});
            $('.main1_indi').css({position:'fixed'});
            $('.main1_indi').show();
            $('.mouse').fadeIn();
            $('.mouse').css({'border':'2px solid #fff'});
            $('.mouse_ball').css({'background':'#fff'});
            break;
        case 1: 
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').fadeIn();
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.main1_indi').css({position:'absolute'});
            break;
        case 2:
            $('.indi_line').css({'background':'#eee'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'white'});
			$('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#aaa'});
            $('.indicator .circle span').eq(page_i).css({'color':'white', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'white', opacity: '.4'});
            $('.indi00').css('color','white');
            $('.mouse').fadeIn();
            $('.mouse').css({'border':'2px solid #333'});
            $('.mouse_ball').css({'background':'#333'});
            $('.main1_indi').css({position:'absolute'});
            break;
        case 3: 
            $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.main1_indi').css({position:'absolute'});
            $('.mouse').fadeIn();
            break;  
        case 4: 
           $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').css({border:'2px solid #333'});
            $('.mouse .mouse_ball').css({background:'#333'});
            $('.main1_indi').css({position:'absolute'});
            $('.mouse').fadeIn();
           break;
        case 5: 
           $('.indi_line').css({'background':'#111'});
            $('.indicator .circle').eq(page_i).css({'width':'7px', 'height':'7px', background:'#111'});
            $('.indicator .circle').not($('.indicator .circle').eq(page_i)).css({'width':'5px', 'height':'5px', background:'#111'});
            $('.indicator .circle span').eq(page_i).css({'color':'#111', opacity: '1'});
            $('.indicator .circle span').not($('.indicator .circle span').eq(page_i)).css({'color':'#111', opacity: '.4'});
            $('.indi00').css('color','#111');
            $('.mouse').fadeOut();
            $('.main1_indi').css({position:'absolute'});
            break;
        }
}
//휠 내리거나 올리거나 할때 화면 이동하는 기능    
var scrollEvent = false;
var count = 0;
$('html, body').on('mousewheel DOMMouseScroll', function(e,delta){
//    console.log('크롬&익스:'+event.wheelDelta);
//    console.log('ff:'+event.detail)
	var E = e.originalEvent;
	delta = 0;
	if (E.detail) {
		delta = E.detail * -40;
	}else{
		delta = E.wheelDelta;
	};

	var win_h = $(window).height();
    var win_w = $(window).width();
	if(delta < 0 && scrollEvent == false && count < 6 && win_w > 980) {
		scrollEvent = true;
		count++;
		$("html, body").stop().animate({scrollTop:win_h*count},{duration:500, complete: function() {
			scrollEvent = false;
			}
		});
		indi_ani(count);

	} else if(delta > 0 && scrollEvent == false && count >= 1 && win_w > 980) {
		scrollEvent = true;
		count--;
		$("html, body").stop().animate({scrollTop:win_h*count},{duration:500, complete: function() {
			scrollEvent = false;
			}
		});
		indi_ani(count);
	}

/*	var win_h = $(window).height();
	var moving=$('html').is(':animated');
//    마우스 내릴때 (크롬/파폭)
	if(event.wheelDelta<0 && !moving  ){
        page_i++;
        page_i=page_i%6;
        $('html, body').stop().animate({scrollTop:page_i*win_h},700);
        indi_ani();
	}else if(event.detail>0 && !moving){
        page_i++;
        page_i=page_i%6;
        $('html, body').stop().animate({scrollTop:page_i*win_h},700);
        indi_ani();
//    마우스 올릴때  (크롬/파폭)
    }else if(event.detail<0 && !moving ){
        page_i--;
        page_i=page_i%6;
        $('html, body').stop().animate({scrollTop:page_i*win_h},700);
        indi_ani();
	}else if(event.wheelDelta>0 && !moving ){
        page_i--;
        page_i=page_i%6;
        $('html, body').stop().animate({scrollTop:page_i*win_h},700);
        indi_ani(); }*/
});
    
    
//메뉴클릭시 이동    
menu=$('nav li')
menu.click(function(){
    page_i = $(this).index();  
    page_i = page_i/2;
    console.log('page_i : '+page_i);
//    console.log($top);
    if(page_i==5){
        $('.footer_black').fadeIn();
    } else {
        $top = $('.main').eq(page_i).offset().top;
        $('html, body').stop().animate({scrollTop:$top},500)
    }
    indi_ani(page_i);
});   
//중앙마우스 클릭시 한컷씩이동
$('.mouse').click(function(){
    win_h = $(window).height();
    page_i++;
    page_i=page_i%6;
    $('html, body').stop().animate({scrollTop:page_i*win_h},700);
    indi_ani(page_i)
});
//화면 좌측 인디케이터 클릭시
$('.main1_indi_').click(function(){
//    clearInterval(main_slide);
    main_i = $(this).index();
    $('.main1 .frame').stop().animate({'left':-main_i*100+'vw'},700);
    $('.main1_indi_').eq(main_i).css({'background':'#006cff'})
    $('.main1_indi_').not($('.main1_indi_').eq(main_i)).css({'background':'#fff'});
    main_i = page_i;
    
    
})
//화면 우측 퀵버튼
$('.quick1 .q_col1').click(function(){
    $('.quick1').css({right:'-100px'})
    $('.quick2').css({right:'1px'})
})    
$('.quick2 .q_col1').click(function(){
    $('.quick2').css({right:'-200px'})
    $('.quick1').css({right:'1px'})
}) 
$('.q_col2 .box4').click(function(){
    $('html, body').stop().animate({scrollTop:0},700);
    page_i=0;
    indi_ani(page_i);
})
    
    
 //웹솔루션컷 마우스 이벤트   on // off 
    
 $('.sol_plus span').mouseenter(function(){
     sol_i = $(this).parents('.box').index();
     console.log(sol_i)
     $('.sol_contain .box').eq(sol_i).find('.sol_plus>span').hide();
     $('.sol_contain .box').eq(sol_i).find('.__icon2').css({opacity:'1',left:'100px'});
     $('.sol_contain .box').eq(sol_i).find('.__icon3').css({opacity:'1',right:'100px'});
     $('.sol_contain .box').eq(sol_i).find('.__icon span').css({opacity:'1'});
 });   
$('.sol_contain .imgbox').mouseleave(function(){
    sol_i = $(this).parents('.box').index();
    $('.sol_contain .box').eq(sol_i).find('.sol_plus span').fadeIn();
    $('.sol_contain .box').eq(sol_i).find('.__icon2').css({opacity:'0',left:'calc(50% - 25px)'});
    $('.sol_contain .box').eq(sol_i).find('.__icon3').css({opacity:'0',right:'calc(50% - 25px)'});
});
    
//솔루션 클릭시 레이어팝업 (준비중입니다)
$('.main2_box span').click(function(){
    $('.main2_black').fadeOut();
})    
$('.main2 .__icon').click(function(){
    $('.main2_black').fadeIn();
})     

    
//공지사항 클릭시 레이어팝업    
$('.noti_contain .box').click(function(){
    $('.noti_black').fadeIn();
});
$('.noti_black span').click(function(){
    $('.noti_black').fadeOut();
})
  
    
//상담문의 클릭시 레이어팝업
$('.contact').click(function(){
    $('.footer_black').fadeIn();
})    
$('footer .foot_box span').click(function(){
    $('.footer_black').fadeOut();
})


$('.indicator .circle span').click(function(){
	var scrollEvent = true;
    win_h = $(window).height();
    page_i = $(this).parent('.circle').index();
 //   $('html, body').stop().animate({scrollTop:page_i*win_h},700);
	$("html, body").stop().animate({scrollTop:win_h*page_i},{duration:700, complete: function() {
		scrollEvent = false;
		}
	});
    indi_ani(page_i);
}) 
 



var agent = navigator.userAgent.toLowerCase();
if ( (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1) ) {
  $('.main_txt1 h1').css('color','white')
  $('.main_txt1').css({'height':'400px'})
  $('.main2, .main4, .main5').css('display','block')    
  $('.pro_box .col').css({'width':'300px','padding-right':'50px'})
  $('.main2 .main_txt').css({width:'1200px',height:'600px','padding-top':'200px'})   
  $('.main3 .pro_box').css({width:'800px'}) 
  $('.main4 .main_txt').css({width:'1200px',height:'600px','position':'relative','top':'200px'}) 
  $('.main5 .main_txt').css({'padding-top':'250px'})
}

$(window).resize(function(){
    win_w = $('html').width();
    if( win_w < 400 ){
        $('footer .col1').appendTo('footer .col2');
        $('.mouse').hide();
        $('.main1_indi').css('position','absolute');
   }else if( win_w < 680 ){
        $('footer .col1').prependTo('footer .col2');
   }else if( win_w < 980 ){
        $('.mouse').fadeIn();
        $('.mouse').css('opacity','1');
    }else if( win_w > 980 ){
        $('.mouse').hide();
        $('.mouse').css('opacity','0'); 
        $('.main1_indi').css('position','absolute');
    }
    
});

$('.frame').on('swipeleft',  function(){
    main_i++;
    main_i=main_i%3;
    $('.main1_indi_').eq(main_i).css({'background':'#006cff'});
    $('.main1_indi_').not($('.main1_indi_').eq(main_i)).css({'background':'#fff'});
    $('.main1 .frame').stop().animate({'left':-main_i*100+'vw'},700);
    
});
$('.frame').on('swiperight',  function(){
    main_i--;
    main_i=main_i%3;
    $('.main1_indi_').eq(main_i).css({'background':'#006cff'});
    $('.main1_indi_').not($('.main1_indi_').eq(main_i)).css({'background':'#fff'});
    $('.main1 .frame').stop().animate({'left':-main_i*100+'vw'},700);
    
});

$('.ham_btn').click(function(){
    $(this).toggleClass('clicked');
    $('.ham_menu').fadeToggle();
});





</script>