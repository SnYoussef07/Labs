<!-- Services section -->
<div>
<?php
$args = [
    'post_type' => 'service',
];
$query = new WP_Query($args);
?>
<section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
    <?php while ($query->have_posts()): $query->the_post();?>
	      <div class="col-md-4 col-sm-6">
			    <div class="service">
			      <div class="icon">
			        <i class="flaticon-025-imagination"></i>
			      </div>
			      <div class="service-text">
			        <h2><?=the_title();?></h2>
			        <p><?=the_content();?></p>
			      </div>
			    </div>
			  </div>
	<?php
endwhile;
wp_reset_postdata();
?>
</div>


<div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
        <!--  -->
        <h2><?=hookToSpan(get_theme_mod('services_titre'));?></h2>
        <!--  -->
      </div>
      <div class="row">
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-023-flask"></i>
            </div>
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-011-compass"></i>
            </div>
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-037-idea"></i>
            </div>
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-039-vector"></i>
            </div>
            <div class="service-text">
              <h2>Social Media</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-036-brainstorming"></i>
            </div>
            <div class="service-text">
              <h2>Brainstorming</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-026-search"></i>
            </div>
            <div class="service-text">
              <h2>Documented</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-018-laptop-1"></i>
            </div>
            <div class="service-text">
              <h2>Responsive</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-043-sketch"></i>
            </div>
            <div class="service-text">
              <h2>Retina ready</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-012-cube"></i>
            </div>
            <div class="service-text">
              <h2>Ultra modern</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->
