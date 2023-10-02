<?php
get_header(); ?> <main>
  <!-- #HERO SECTION -->
  <div class="hero">
    <div class="container">
      <div class="left">
        <h1 class="h1"> Xin chào, tôi là <b>Bbug&nbsp;</b>. <br>Web Developer </h1>
        <p class="h3"> Đam mê phát triển quy trình <abbr title="Bbbugsoft">gia công</abbr> hệ thống phần mềm. </p>
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Liên hệ với tôi</a>
          <a href="#" class="btn btn-secondary">Về tôi</a>
        </div>
      </div>
      <div class="right">
        <div class="pattern-bg"></div>
        <div class="img-box">
          <img src="
							<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.png" alt="Bbug" class="hero-img">
          <div class="shape shape-1"></div>
          <div class="shape shape-2"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <!-- BLOG SECTION -->
      <div class="blog">
        <h2 class="h2">Bài đăng mới nhất</h2>
        <div class="blog-card-group">
<!--           <div class="blog-card">  -->
			  <?php
          $args = [
              "posts_per_page" => 10, // Số bài đăng muốn hiển thị
          ];
          $query = new WP_Query($args);
          if ($query->have_posts()) {
              while ($query->have_posts()) {
				  ?><div class="blog-card"><?php
                  $query->the_post(); ?> <div class="blog-card-banner">
              <img src="
										<?php echo get_the_post_thumbnail_url(); ?>" alt="
										<?php echo get_the_title(); ?>" width="100%" class="blog-banner-img">
            </div>
            <div class="blog-content-wrapper">
              <button class="blog-topic text-tiny"> <?php echo get_the_category()[0]
                    ->name; ?> </button>
              <h3>
                <a href="
												<?php the_permalink(); ?>" class="h3"> <?php the_title(); ?> </a>
              </h3>
              <p class="blog-text"> <?php echo get_the_excerpt(); ?> </p>
              <div class="wrapper-flex">
                <div class="profile-wrapper">
                  <img src="
													<?php echo get_stylesheet_directory_uri(); ?>/assets/images/author.png" alt="Bbug" width="50">
                </div>
                <div class="wrapper">
                  <a href="#" class="h4"> <?php the_author(); ?> </a>
                  <p class="text-sm">
                    <time datetime="
															<?php echo get_the_date(
                          "Y-m-d"
                      ); ?>"> <?php echo get_the_date("M d, Y"); ?> </time>
                    <span class="separator"></span>
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="
															<?php echo get_the_time(
                          "PTiM"
                      ); ?>"> <?php echo human_time_diff(
    get_the_time("U"),
    current_time("timestamp")
) . " trước"; ?> </time>
                  </p>
                </div>
              </div>
            </div>
			  
          </div>
			 <?php
              }
          }
          ?>
        </div>
        <button class="btn load-more">Xem thêm</button>
      </div> <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<!-- custom js link -->
<script src="
					<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js">
</script>
<!-- ionicon link -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> <?php get_footer();
?>
