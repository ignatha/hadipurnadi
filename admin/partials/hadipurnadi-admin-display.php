<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       lapakunik.com
 * @since      1.0.0
 *
 * @package    Hadipurnadi
 * @subpackage Hadipurnadi/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2 class="nav-tab-wrapper">Pop Up Hadi Purnadi</h2>

    <form method="post" name="cleanup_options" action="options.php">

    <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $switch = $options['switch'];
        $tujuan = $options['tujuan'];
        
        $login_logo_id = $options['login_logo_id'];
        $login_logo = wp_get_attachment_image_src( $login_logo_id, 'thumbnail' );
        $login_logo_url = $login_logo[0];
    ?>

    <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>

    <!-- ning bagian iki kanggone on/off plugin -->
    <fieldset>
        <legend class="screen-reader-text">
            <span>Switch on/offk</span>
        </legend>
        <label for="<?php echo $this->plugin_name; ?>-switch">
            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-switch" name="<?php echo $this->plugin_name; ?>[switch]" value="1" <?php checked($switch, 1); ?> />
            <span><?php esc_attr_e('on/off', $this->plugin_name); ?></span>
        </label>
    </fieldset>

    <!-- Iki kanggone link -->
    <fieldset>
            <p>Masukkan link disini </p>
            <legend class="screen-reader-text"><span><?php _e('Link', $this->plugin_name); ?></span></legend>
            <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-tujuan" name="<?php echo $this->plugin_name; ?>[tujuan]" value="<?php if(!empty($tujuan)) echo $tujuan; ?>"/>
    </fieldset>
    
    <p><?php _e('Upload gambar disini', $this->plugin_name);?></p>

    
    <!-- iki gambar e pak lek -->
            <fieldset>
                <legend class="screen-reader-text"><span><?php esc_attr_e('Login Logo', $this->plugin_name);?></span></legend>
                <label for="<?php echo $this->plugin_name;?>-login_logo">
                    <input type="hidden" id="login_logo_id" name="<?php echo $this->plugin_name;?>[login_logo_id]" value="<?php echo $login_logo_id; ?>" />
                    <input id="upload_login_logo_button" type="button" class="button" value="<?php _e( 'Gambar', $this->plugin_name); ?>" />
                    <span><?php esc_attr_e('Gambar', $this->plugin_name);?></span>
                </label>
                <div id="upload_logo_preview" class="wp_cbf-upload-preview <?php if(empty($login_logo_id)) echo 'hidden'?>">
                    <img src="<?php echo $login_logo_url; ?>" />
                    <button id="wp_cbf-delete_logo_button" class="wp_cbf-delete-image">X</button>
                </div>
            </fieldset>

    <?php submit_button('Simpan', 'primary','submit', TRUE); ?>
    </form>

</div>
