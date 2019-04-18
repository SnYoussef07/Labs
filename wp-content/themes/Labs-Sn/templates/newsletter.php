
  <!-- newsletter section -->
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <form class="nl-form" action="<?=get_admin_url();?>" method="post">
            <input type="hidden" name="action" value="save-newsletter">
            <input type="text" name="emailNews" placeholder="Your e-mail here">
            <button class="site-btn btn-2">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->
