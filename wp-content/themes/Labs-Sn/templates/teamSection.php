<!-- Team Section -->
<?php
$args1 = [
    'post_type' => 'team',
    'posts_per_page' => 1,
    'orderby' => 'rand',
    'category_name' => 'other'
];
$query1 = new WP_Query($args1);

$args2 = [
  'post_type' => 'team',
  'posts_per_page' => 1,
  'orderby' => 'rand',
  'category_name' => 'Dev'
];
$query2 = new WP_Query($args2);

$args3 = [
  'post_type' => 'team',
  'posts_per_page' => 1,
  'orderby' => 'rand',
  'category_name' => 'other'
];
$query3 = new WP_Query($args3);
?>

<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?=hookToSpan(get_theme_mod('team_titre'));?></h2>
      </div>
      <div class="row">
        <!-- 1 -->
    <?php while ($query1->have_posts()): $query1->the_post();?>
      <!-- single member -->
      <div class="col-sm-4">
        <div class="member">
          <img src="<?php the_post_thumbnail_url();?>" alt="">
          <h2><?=the_title();?></h2>
          <h3><?=the_content();?></h3>
        </div>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <!-- 2 -->
    <?php while ($query2->have_posts()): $query2->the_post();?>
      <!-- single member -->
      <div class="col-sm-4">
        <div class="member">
          <img src="<?php the_post_thumbnail_url();?>" alt="">
          <h2><?=the_title();?></h2>
          <h3><?=the_content();?></h3>
        </div>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <!-- 3 -->
    <?php while ($query3->have_posts()): $query3->the_post();?>
      <!-- single member -->
      <div class="col-sm-4">
        <div class="member">
          <img src="<?php the_post_thumbnail_url();?>" alt="">
          <h2><?=the_title();?></h2>
          <h3><?=the_content();?></h3>
        </div>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>

      </div>
    </div>
  </div>
  <!-- Team Section end-->
