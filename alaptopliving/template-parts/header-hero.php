<div class="header-hero">
  <h2 class="header-hero__title">
    Want to start your business, <br> right from your laptop?
  </h2>
  <div class="header-hero__video">
    <div class="header-hero__placeholder">
      <img src="<?php echo get_theme_file_uri('/assets/images/hero.jpg'); ?>" alt="hero-img">
      <button class="header-hero__play" onclick="headerVideo()"><img src="<?php echo get_theme_file_uri('/assets/images/play.svg'); ?>"></button>
    </div>
    <div class="header-hero__loader">
      <img src="<?php echo get_theme_file_uri('/assets/images/loader.gif'); ?>" alt="Loader">
    </div>
   
    <div class="header-hero__embedded">
      <iframe src="https://www.youtube.com/embed/4Bfdzg2jbOI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
    </div>
  </div>

  <div class="header-hero__end">
    <a class="header-c2a__btn" href="https://onlinebusinessbuilderchallenge.com/get-started/enroll?aid=41018" ref="dofollow" target="_blank">Learn More</a>
  </div>
</div>

<script defer>
 function headerVideo(){
  const video = document.querySelector('.header-hero__embedded');
  const placeholder = document.querySelector('.header-hero__placeholder');
  const loader = document.querySelector('.header-hero__loader');
  placeholder.style.display = "none";
  video.style.display = "block";
  loader.style.display = "block";
  setTimeout(() => {
    loader.style.display = "none";
  }, 2500);
 }
</script>