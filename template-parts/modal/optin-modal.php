<div class="optin-modal modal fade" id="optinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup for our newsletter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="newsletter">
            <?php 
              $newsletter_shortcode = get_option('redux_options')['newsletter-shortcode']; 
              if($newsletter_shortcode != ''){
                echo do_shortcode($newsletter_shortcode);
              }
            ?>
        </div>
      </div>
      <div class="modal-footer">
        <div class="footer-credits"><p>&copy; Stockmarket School-2019</p></div>
      </div>
    </div>
  </div>
</div>