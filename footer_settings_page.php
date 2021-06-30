<?php
if (!defined('ABSPATH')) {
  exit;
} 
global $variable1;
global $variable2;
global $variable3;
global $variable4;
global $variable5;
global $variable6;
if (isset($_POST['link_submit'])) {
  link_opt();
}
if(isset($_POST['copyright_submit'])){
  quote_function();
}
function quote_function(){
  $quote_text = $_POST['quote_text'];

  global $variable5;
  global $variable6;

  if (get_option('quote_text') != trim($quote_text)) {
    $variable5 = update_option('quote_text', trim($quote_text));
  }
  
}
function link_opt()
{
  $link1 = $_POST['github_link'];
  $link2 = $_POST['instagram_link'];
  $link3 = $_POST['twitter_link'];

  global $variable1;
  global $variable2;
  global $variable3;
  global $variable4;

  if (get_option('github_link') != trim($link1)) {
    $variable1 = update_option('github_link', trim($link1));
  }
  if (get_option('instagram_link') != trim($link2)) {
    $variable2 = update_option('instagram_link', trim($link2));
  }
  if (get_option('twitter_link') != trim($link3)) {
    $variable3 = update_option('twitter_link', trim($link3));
  }

}
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if (isset($_POST['link_submit']) && ($variable1 || $variable2 || $variable3 || $variable4 )) : ?>
    <div id="message" class="updated below-h2">
      <p>Link of social media updated successfully</p>
    </div>
  <?php endif; ?>
  <?php if (isset($_POST['copyright_submit']) && ( $variable5 || $variable6)) : ?>
    <div id="message" class="updated below-h2">
      <p>Quote updated successfully </p>
    </div>
  <?php endif; ?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Don't Forget to Save!</strong></h3>
      <hr>
      <form method="post" action="">
        <table class="form-table">

            <tr>
              <th scope="row" style="padding-left: 12px;">Github Link :</th>
              <td><input type="text" name="facebook_link" value="<?php echo get_option('github_link'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Instagram Link :</th>
              <td><input type="text" name="instagram_link" value="<?php echo get_option('instagram_link'); ?>" style="width:350px;" /></td>
            </tr>

            <tr>
              <th scope="row" style="padding-left: 12px;">Twitter Link :</th>
              <td><input type="text" name="twitter_link" value="<?php echo get_option('twitter_link'); ?>" style="width:350px;" /></td>
            </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="link_submit" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>

    <div class="postbox">
      <h3><strong>Enter Quote and Save.</strong></h3>
      <hr>
      <form method="post" action="">
        <table class="form-table">

          <tr>
            <th scope="row" style="padding-left: 12px;">Quote :</th>
            <td><input type="text" name="quote_text" value="<?php echo get_option('quote_text'); ?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="copyright_submit" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>

  </div>
</div>