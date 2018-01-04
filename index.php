<!DOCTYPE html>
<html lang="en">
<?php include 'shareds/head.php'; ?>
<body>
	<div id="spinner"></div>
	<div class="body--wrapper ipapa-home">
		<div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="ipapa-home__information-detail">
            <div class="box-title-top">
              <div class="title">
                We are, Ipapa Indonesia
              </div>
              <div class="sub-title">
                <span id="typed-ipapa"></span>
              </div>
            </div>
            <div class="box-info-tree">
              <div class="rounded">
                <div class="icon">
                  <img src="assets/images/gallery/price-tree.png" alt="">
                </div>
                <div class="title">
                  <span>Moderate Price</span>
                </div>
              </div>
              <div class="rounded">
                <div class="icon">
                  <img src="assets/images/gallery/team-tree.png" alt="">
                </div>
                <div class="title">
                  <span>Professional Team</span>
                </div>
              </div>
              <div class="rounded">
                <div class="icon">
                  <img src="assets/images/gallery/customer-tree.png" alt="">
                </div>
                <div class="title">
                  <span>Customer Oriented</span>
                </div>
              </div>
            </div>
            <div class="box-logo">
              <ul>
                <li>
                  <img class="first" src="assets/images/gallery/logo-ipapa-white.png" alt="Ipapa Indonesia">
                </li>
                <li>
                  <img src="assets/images/gallery/logo-zmg.png" alt="ZMG Indonesia">
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ipapa-home__mobile-info">
            <div class="mobile-ss">
              <img src="assets/images/gallery/mobile-ipapa-2.png" alt="">
              <div class="line"></div>
            </div>
            <div class="info-play-store">
              <div class="title">Download Now Ipapa</div>
              <a target="_blank" href="https://play.google.com/store/apps/details?id=id.co.ipapa.android.mobile">
                <img src="assets/images/gallery/play-store.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</body>
<?php include 'shareds/javascript.php'; ?>
<script src="assets/js/plugin/typed.js"></script>
<script>
	$(func = function () {
		$("#typed-ipapa").typed({
        strings: [
        					'Find Your Future Office With Us',
        					'our system is the best solution for you',
         					'Let s use Ipapa right now'
         				],
        typeSpeed: 40,
        backDelay: 2000,
        callback: function (){
          func();
        }
    });
	});
</script>
</html>
