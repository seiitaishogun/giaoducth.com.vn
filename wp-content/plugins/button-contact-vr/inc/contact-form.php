<!--  * Version: 3.0 -->
<div class="wrap">
<h2>Contact Form</h2>
<h2 class="nav-tab-wrapper">
    <a href="admin.php?page=contact_vr" class="nav-tab">Button contact</a>
    <a href="admin.php?page=contact_vr_showroom" class="nav-tab">Showroom</a>
    <a href="admin.php?page=contact_vr_contact_form" class="nav-tab  nav-tab-active">Contact form (beta)</a>
    <a href="admin.php?page=contact_vr_all_in_one" class="nav-tab">All in one </a>
    <a href="admin.php?page=contact_vr_setting" class="nav-tab">Setting</a>
</h2>
<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>

    <h3>
        It is currently under maintenance!
    </h3>
    

<hr />

<h2><?php esc_html_e( 'Support', 'support_pzf' ); ?></h2>
<p>
<?php _e( 'For submitting any support queries, feedback, bug reports or feature requests, please visit <a href="https://wordpress.org/plugins/button-contact-vr/" target="_blank">this link</a>.', 'support_pzf' ); ?>
</p>
<h2><?php esc_html_e( 'Help', 'support_pzf' ); ?></h2>
<p>
<?php _e( 'Please visit <a href="https://webvocuc.com/blog/tag/button-contact-vr" target="_blank">this link</a>.', 'help_pzf' ); ?>
</p>

</div>

<!-- css admin All in one -->
<style type="text/css">
    ul#style-icon-vr {
        margin: 0;
    }
    ul#style-icon-vr li {display: inline-block;margin-bottom: 0;margin-right: 15px;text-align: center;}
    ul#style-icon-vr li label {
        display: block;
    }
    ul#style-icon-vr li span {
        display: block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        line-height: 50px;
        padding: 10px;
        position: relative;
        margin: 0 auto;
    }
    td input[type="text"] {
        width: 100%;
        max-width: 330px;
    }
    select#pzf_loco_img_contact_form {
        width: 100%;
        max-width: 330px;
    }
    ul#style-icon-vr li span img {
        max-width: 27px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    td textarea{width:100%;max-width: 420px;min-height: 120px}
    .tox-notification.tox-notification--in.tox-notification--warning {
        display: none;
    }
</style>
<script src="https://cdn.tiny.cloud/1/v9sn59nuhjw008xh3qqfys27pzr0z8gi1lexbcxy6mqd6shq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/v9sn59nuhjw008xh3qqfys27pzr0z8gi1lexbcxy6mqd6shq/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
<script>
  jQuery('textarea.tiny').tinymce({
    menubar: false,
    height:300,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
  });
</script>