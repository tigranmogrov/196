<?php if ( ! defined( 'ABSPATH' ) ) exit; 
global $wpso_data, $wpso_pro, $wpso_premium_link, $premium_click, $wpso_allowed_pages;

$wpso_options = get_option( 'wpso_options' );
$wpso_objects = isset( $wpso_options['objects'] ) ? $wpso_options['objects'] : array();
$wpso_tags = isset( $wpso_options['tags'] ) ? $wpso_options['tags'] : array();
$wpso_extras = isset( $wpso_options['extras'] ) ? $wpso_options['extras'] : array();
?>

<div class="wrap wpso">

<?php screen_icon( 'plugins' ); ?>

<h2><?php echo $wpso_data['Name'].' ('.$wpso_data['Version'].($wpso_pro?') '.__('Pro', 'wpso-sort-order').'':')'); ?> - <?php echo __('Settings','wpso-sort-order'); ?> <?php echo ($wpso_pro?'':'<a href="'.$wpso_premium_link.'" target="_blank" class="premium">'.__('Go Premium', 'wpso-sort-order').'</a>'); ?></h2>

<?php if ( isset($_GET['msg'] )) : ?>
<div id="message" class="updated below-h2">
	<?php if ( $_GET['msg'] == 'update' ) : ?>
		<p><?php _e( 'Settings saved.', 'wpso-sort-order'); ?></p>
	<?php endif; ?>
</div>
<?php endif; ?>

<form method="post">

<?php if ( function_exists( 'wp_nonce_field' ) ) wp_nonce_field( 'nonce_wpso' ); ?>

<div class="more_features">
<ul>
<?php if(!$wpso_pro): ?>
<li><label><?php echo __('User categories required?', 'wpso-sort-order'); ?></label><?php echo $premium_click; ?></li>
<?php endif; ?>
<li>
<label><?php echo __('A shortcode to list users under taxonomy, terms and children.', 'wpso-sort-order'); ?> <span>[</span>WPSO_USERS <span>slug="</span><?php echo __('taxonomy or term slug', 'wpso-sort-order').'<span>"</span> <span>id="</span>'.__('taxonomy or term id', 'wpso-sort-order'); ?><span>"]</span><?php echo $premium_click; ?></label>
</li>
</ul>
</div>
<div id="wpso_select_extras">
<label class="clickable"><input type="checkbox" id="wpso_allcheck_extras" class="hide" /> <?php _e( 'Check/Uncheck', 'wpso-sort-order') ?></label>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><h4><?php _e('Pages', 'wpso-sort-order') ?></h4></th>
			<td class="options1">
            <ul>
<?php
	if(!empty($wpso_allowed_pages)){
		foreach($wpso_allowed_pages as $page=>$ptitle){
?>			            

                    <li>
					<label><input type="checkbox" name="extras[]" value="<?php echo $page; ?>" <?php if ( isset( $wpso_extras ) && is_array( $wpso_extras ) ) { if ( in_array( $page, $wpso_extras ) ) { echo 'checked="checked"'; } } ?>>&nbsp;<?php echo $ptitle; ?></label>
                    </li>
<?php
		}
	}
?>	
					
            </ul>
			</td>
		</tr>
	</tbody>
</table>

</div>

<div id="wpso_select_objects">
<label class="clickable"><input type="checkbox" id="wpso_allcheck_objects" class="hide" /> <?php _e( 'Check/Uncheck', 'wpso-sort-order') ?></label>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><h4><?php _e( 'Post Types', 'wpso-sort-order') ?></h4></th>
			<td class="options1">
            <ul>
			<?php
				$post_types = get_post_types( array (
					'show_ui' => true,
					'show_in_menu' => true,
				), 'objects' );
				
				$post_array = array();
				
				foreach ( $post_types  as $post_type ) {
					if ( $post_type->name == 'attachment' ) continue;
					$post_array[$post_type->name] = $post_type;
				}
		
            
				if(!empty($post_array)){
					ksort($post_array);
					foreach($post_array as $post_type){
				
			?>
            					<li>
					<label><input type="checkbox" name="objects[]" value="<?php echo $post_type->name; ?>" <?php if ( isset( $wpso_objects ) && is_array( $wpso_objects ) ) { if ( in_array( $post_type->name, $wpso_objects ) ) { echo 'checked="checked"'; } } ?>>&nbsp;<?php echo $post_type->label; ?></label>
                    </li>			<?php
					}
				}
			
			?>                
            </ul>
			</td>
		</tr>
	</tbody>
</table>

</div>



<div id="wpso_select_tags">
<label class="clickable"><input class="hide" type="checkbox" id="wpso_allcheck_tags"> <?php _e( 'Check/Uncheck', 'wpso-sort-order') ?></label>
<table class="form-table">
	<tbody>
		<tr valign="top">
			<th scope="row"><h4><?php _e( 'Taxonomies', 'wpso-sort-order') ?></h4></th>
			<td class="options2">
            <ul>
			<?php
				$taxonomies = get_taxonomies( array(
					'show_ui' => true,
				), 'objects' );
				
				$tax_array = array();
				foreach( $taxonomies as $taxonomy ) {
					if ( $taxonomy->name == 'post_format' ) continue;
					$tax_array[$taxonomy->name] = $taxonomy;
				}
				
				if(!empty($tax_array)){
					ksort($tax_array);
					foreach($tax_array as $taxonomy){
				
			?>
            					<li><label><input type="checkbox" name="tags[]" value="<?php echo $taxonomy->name; ?>" <?php if ( isset( $wpso_tags ) && is_array( $wpso_tags ) ) { if ( in_array( $taxonomy->name, $wpso_tags ) ) { echo 'checked="checked"'; } } ?>>&nbsp;<?php echo $taxonomy->label ?></label></li>
			<?php
					}
				}
			
			?>                                


            	<?php if(!$wpso_pro): ?>
                <li><label><input disabled="disabled" type="checkbox">&nbsp;<?php echo __('User Categories', 'wpso-sort-order'); ?></label>&nbsp;<?php echo $premium_click; ?></li>
                <?php endif; ?>
            </ul>
			</td>
		</tr>
        <tr>
        <th></th>
        <td><p class="submit">
	<input type="submit" class="button-primary" name="wpso_submit" value="<?php _e('Save Changes', 'wpso-sort-order'); ?>">
</p></td>
        </tr>
	</tbody>
</table>

</div>




	
</form>

</div>

<script type="text/javascript" language="javascript">
(function($){
	

	
})(jQuery);
</script>
<style type="text/css">
.update-nag, #wpfooter,
#message{
	display:none;
}
</style>