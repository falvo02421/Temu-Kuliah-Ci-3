<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi, odio beatae aspernatur natus recusandae quasi magni eum voluptatem nam!</p>
          </div>
          <div class="col-lg-3 mx-auto">
            <h3>Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Registrasi</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quibusdam!</p>
            <form action="#" class="form-subscribe">
              <input type="email" class="form-control mb-3" placeholder="Enter Email">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
</div>

  <script src="<?php echo base_url('assets/asset-front/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/jquery-migrate-3.0.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/jquery-ui.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/jquery.stellar.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/jquery.countdown.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asset-front/js/aos.js') ?>"></script>

  <script src="<?php echo base_url('assets/asset-front/js/mediaelement-and-player.min.js') ?>"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });
  </script>


  <script src="<?php echo base_url('assets/asset-front/js/main.js') ?>"></script>

</body>
</html>