<div id="foot">
	<div class="location">
		<div class="foot_left">
			<h4><img src="img/logo_foot.png" alt="메이크웨이"></h4>
			<div class="foot_first">
				<dl>
					<dt>전화번호</dt>
					<dd><?php echo $cfg_info['cfg_mana_tel'] ?></dd>
				</dl>
				<dl>
					<dt>팩스</dt>
					<dd><?php echo $cfg_info['cfg_com_fax'] ?></dd>
				</dl>
				<dl>
					<dt>E-mail</dt>
					<dd><?php echo $cfg_info['cfg_mana_email'] ?></dd>
				</dl>
			</div>
			<div class="foot_second">
				<dl>
					<dt>대표</dt>
					<dd><?php echo $cfg_info['cfg_com_delegator'] ?></dd>
				</dl>
				<dl>
					<dt>사업자등록번호</dt>
					<dd><?php echo $cfg_info['cfg_com_num'] ?></dd>
				</dl>
			</div>
		</div>
		<!-- <div class="address">
			<dl>
				<dt>주 소</dt>
				<dd><?php echo $cfg_info['cfg_com_addr1']?> <?php echo $cfg_info['cfg_com_addr2']?></dd>
			</dl>
		</div> -->

		<div class="foot_right">
			<div class="top">
				<dl>
					<dt>사무실 위치</dt>
					<dd><?php echo $cfg_info['cfg_com_addr1']?> <?php echo $cfg_info['cfg_com_addr2']?></dd>
				</dl>
			</div>
			<div class="location_map">
				<div id="map" class="map_img"></div>
			</div>

		</div>
		<div class="end">
			<p>Copyright(C) MAKEWAY. All right reserved.</p>
		</div>
	</div>

</div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d11c451534a4d3c24cdabd87bb0077b0&libraries=services"></script>
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
</body>
</html>
