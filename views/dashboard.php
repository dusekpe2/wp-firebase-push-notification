<?php
if (!defined('ABSPATH')) {exit;}
?>

<h1><?php echo __(FCM_PLUGIN_NM,FCM_TD);?></h1>

<form action="options.php" method="post">
    <?php settings_fields( 'fcm_group'); ?>
    <?php do_settings_sections( 'fcm_group' ); ?>
<table>
    <tbody>

    <tr  height="70">
        <td><label for="fcm_api_android"><?php echo __("FCM API Key Android",FCM_TD);?></label> </td>
        <td><input id="fcm_api_android" name="stf_fcm_api_android" type="text" value="<?php echo get_option( 'stf_fcm_api_android' ); ?>" required="required" /></td>
    </tr>

    <tr  height="70">
        <td><label for="fcm_api_ios"><?php echo __("FCM API Key iOS",FCM_TD);?></label> </td>
        <td><input id="fcm_api_ios" name="stf_fcm_api_ios" type="text" value="<?php echo get_option( 'stf_fcm_api_ios' ); ?>" required="required" /></td>
    </tr>

    <tr  height="70">
        <td><label for="stf_align"><?php echo __("FCM Option",FCM_TD);?></label></td>
        <td>
            <!-- Using selected() instead -->
            <select name="fcm_option">
                <option value="topic"   <?php selected( get_option( 'fcm_option' ), 'topic'); ?>><?php echo __("Topic",FCM_TD);?></option>
            </select>
        </td>
    </tr>

    <tr  height="70">
        <td><label for="fcm_topic_production"><?php echo __("FCM Topic production",FCM_TD);?></label> </td>
        <td><input id="fcm_topic_production" placeholder="Name of Topic setup production app" name="fcm_topic_production" type="text" value="<?php echo get_option( 'fcm_topic_production' );  ?>" required="required" /></td>
    </tr>

    <tr  height="70">
        <td><label for="fcm_topic_stage"><?php echo __("FCM Topic stage",FCM_TD);?></label> </td>
        <td><input id="fcm_topic_stage" placeholder="Name of Topic setup stage app" name="fcm_topic_stage" type="text" value="<?php echo get_option( 'fcm_topic_stage' );  ?>" required="required" /></td>
    </tr>

    <tr  height="70">
        <td><label for="fcm_topic_development"><?php echo __("FCM Topic development",FCM_TD);?></label> </td>
        <td><input id="fcm_topic_development" placeholder="Name of Topic setup development app" name="fcm_topic_development" type="text" value="<?php echo get_option( 'fcm_topic_development' );  ?>" required="required" /></td>
    </tr>

    <tr  height="70">
        <td><label for="disable_production"><?php echo __("Disable Push Notifications for production",'save_to_facebook_td');?></label> </td>
        <td><input id="disable_production" name="disable_production" type="checkbox" value="1" <?php checked( '1', get_option( 'disable_production' ) ); ?>  /></td>
    </tr>
	
    <tr  height="70">
        <td><label for="disable_stage"><?php echo __("Disable Push Notifications for stage",'save_to_facebook_td');?></label> </td>
        <td><input id="disable_stage" name="disable_stage" type="checkbox" value="1" <?php checked( '1', get_option( 'disable_stage' ) ); ?>  /></td>
    </tr>

    <tr  height="70">
        <td><label for="disable_development"><?php echo __("Disable Push Notifications for development",'save_to_facebook_td');?></label> </td>
        <td><input id="disable_development" name="disable_development" type="checkbox" value="1" <?php checked( '1', get_option( 'disable_development' ) ); ?>  /></td>
    </tr>

    <tr  height="70">
        <td><label for="post_disable"><?php echo __("Disable Push Notifications on Post Publish",'save_to_facebook_td');?></label> </td>
        <td><input id="post_disable" name="post_disable" type="checkbox" value="1" <?php checked( '1', get_option( 'post_disable' ) ); ?>  /></td>
    </tr>

<!--     <tr  height="70">
        <td><label for="update_disable"><?php echo __("Disable Push Notification on Post Update",'save_to_facebook_td');?></label> </td>
        <td><input id="update_disable" name="fcm_update_disable" type="checkbox" value="1" <?php checked( '1', get_option( 'fcm_update_disable' ) ); ?>  /></td>
    </tr>

    <tr  height="70">
        <td><label for="page_disable"><?php echo __("Disable Push Notification on Page Save",'save_to_facebook_td');?></label> </td>
        <td><input id="page_disable" name="fcm_page_disable" type="checkbox" value="1" <?php checked( '1', get_option( 'fcm_page_disable' ) ); ?>  /></td>
    </tr>

    <tr  height="70">
        <td><label for="fcm_update_page_disable"><?php echo __("Disable Push Notification on Page Update",'save_to_facebook_td');?></label> </td>
        <td><input id="fcm_update_page_disable" name="fcm_update_page_disable" type="checkbox" value="1" <?php checked( '1', get_option( 'fcm_update_page_disable' ) ); ?>  /></td>
    </tr> -->


    <tr>
        <td> <div class="col-sm-10"><?php submit_button(); ?></td>

    </tr>

    </tbody>
    </table>

</form>

<?php if(get_option('stf_fcm_api_android') && get_option('stf_fcm_api_ios')){ ?>
<div>
    <h3>Test Notification</h3>
    <p>Send a test notification. API Key and topic must be setup above. ⚠️ DANGER: do not use this in a production environment as your users will be spammed with a push notification!</p>
    <a href="<?php echo admin_url('admin.php'); ?>?page=test_notification">Send Test Notification</a>
</div>

<?php
}
?>
