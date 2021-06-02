<?php
$page_name = 'wood';
require_once('./fragment/header.php');
?>

<!-- #hjfr-wood-section-1 start -->
<div class="site-section" id="hjfr-wood-section-1">
  <div class="container">

    <div class="row hjfr-main-blank"></div>
    <div class="row hjfr-main-blank"></div>

    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <p class="hjfr-group-text-color hjfr-group-main-text-company"><i>규원에너지</i></p>
        <p class="hjfr-group-text-color hjfr-group-text-bold hjfr-group-main-text-business">목재 펠릿 사업</p>
      </div>
    </div>

    <div class="row hjfr-main-blank"></div>

  </div>
</div>
<!-- #hjfr-wood-section-1 end -->

<!-- #hjfr-wood-section-2 start -->
<div id="hjfr-wood-section-2">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-6 hjfr-wood-section-img-comment-wrap">
        <div class="hjfr-wood-section-img-comment-box">
          <p class="hjfr-group-item-text-img-title"><span class="hjfr-group-text-color-green hjfr-group-text-bold">주식회사 규원에너지</span></p>
          <p class="hjfr-group-item-text-img-desc">
            는 <span class="hjfr-group-text-bold">목재 (병해충목, 산불피해목 등)</span>을
            <span class="hjfr-group-text-bold">재활용</span>하는 <span class="hjfr-group-text-bold">친환경 "미이용바이오매스" 목재펠릿</span>을
            제조/판매하는 회사입니다.
          </p>
        </div>
      </div>
      <div class="col-6 hjfr-wood-section-img-box" style="background-image:url('./imgs/sub/wood/2.jpg');">
        <img src="./imgs/sub/wood/2.jpg" alt="규원에너지 2" class="hjfr-wood-section-img">
      </div>
    </div>
  </div>
</div>
<!-- #hjfr-wood-section-2 end -->

<!-- #hjfr-wood-section-3 start -->
<div class="site-section" id="hjfr-wood-section-3">
  <div class="container-fluid" id="hjfr-wood-section-3-contents-box">
    <div id="hjfr-wood-section-3-contents">
      <img id="hjfr-wood-section-3-backimg" src="./imgs/sub/wood/3.png" alt="규원에너지 3">
      <div class="row">
        <div class="col-sm-6 col-4"></div>
        <div class="col-sm-6 col-8">
          <div class="hjfr-wood-section-img-comment-box">
            <p class="hjfr-group-item-text-img-desc" id="hjfr-wood-section-3-text">
              세계적인 환경 이슈인 지구온난화를 유발시키는 CO2의 발생을 적제할 수 있는 신재생에너지인 "미이용바이오매스" 목재펠릿을 생산하여,
              현재 국내 가동중인 화력발전소 및 목질계 전소발전소(남동발전, 남부발전, 동서발전, 서부발전)에 납품하고 있습니다.
            </p>
          </div>
        </div>
      </div>
    </div> <!-- #hjfr-wood-section-3-contents -->
  </div>
</div>
<!-- #hjfr-wood-section-3 end -->

<!-- #hjfr-wood-section-4 start -->
<div id="hjfr-wood-section-4">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-6 hjfr-wood-section-img-box" style="background-image:url('./imgs/sub/wood/4.jpg');">
        <img src="./imgs/sub/wood/4.jpg" alt="규원에너지-목재" class="hjfr-wood-section-img">
      </div>
      <div class="col-6 hjfr-wood-section-img-comment-wrap">
        <div class="hjfr-wood-section-img-comment-box">
          <p class="hjfr-group-item-text-img-desc">
            주식회사 규원에너지는 생산시설을 <span class="hjfr-group-text-bold">국내의 청정지역</span>으로 손꼽히는 강원도 정선에서
            <span class="hjfr-group-text-bold">원목(소나무, 참나무)</span>과 <span class="hjfr-group-text-bold">버려지는 산림 부산물</span>을
            깨끗하고 불순물 없이 가공한 톱밥을 압축하여 작은 알갱이 형태로 가공한 <span class="hjfr-group-text-bold">양질의 펠릿연료</span>를 생산하여
            <span class="hjfr-group-text-bold">환경도 지키고 연료비용도 절약</span>할 수 있도록 노력하고 있습니다.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #hjfr-wood-section-4 end -->


<?php require_once('./fragment/footer.php'); ?>

<script src="./js/group.js"></script>

<script>
  $(document).ready(function() {
    setTimeout(setSection3Height(), 1000);
    $(window).resize(function() {
      setSection3Height();
    });
  });


  function setSection3Height() {
    var imgHeight = $('#hjfr-wood-section-3-backimg').height();
    $('#hjfr-wood-section-3-contents').height(imgHeight);

    var textPaddingTop = 0;
    if (window.innerWidth <= 576) {
      textPaddingTop = Math.max((imgHeight / 2) - ($('#hjfr-wood-section-3-text').height() / 1.6));
    } else {
      textPaddingTop = Math.max((imgHeight / 2) - ($('#hjfr-wood-section-3-text').height() / 2));
    }

    if (textPaddingTop < 6) {
      textPaddingTop = 2;
    } else if (textPaddingTop < 10) {
      textPaddingTop = 4;
    }

    $('#hjfr-wood-section-3-text').css('padding-top', textPaddingTop + 'px');
  }
</script>

<?php require_once('./fragment/tail.php'); ?>