<?php
/**
 * Sparkling Meta Boxes
 *
 */

add_action('add_meta_boxes', 'evos_add_custom_metaboxes');
/**
 * Add Meta Boxes.
 *
 * Add Meta box in page and post post types.
 */
function evos_add_custom_metaboxes()
{
    add_meta_box('evos_layout_options', //Unique ID
        __('Choose the layout for this specific page', 'evos'), //Title
        'evos_add_layout_options', //Callback function
        array('page', 'post') //show metabox in pages
        );
    // add_meta_box('siderbar-layout', //Unique ID
    //     __('Select layout for this specific Post only', 'sparkling'), //Title
    //     'sparkling_sidebar_layout', //Callback function
    //     'post', //show metabox in posts
    //     'side'
    //     );
}


/**
 * Displays metabox to for sidebar layout
 */
function evos_add_layout_options()
{
    global $evos_layout_options, $post;
    // Use nonce for verification
    wp_nonce_field(basename(__FILE__), 'custom_meta_box_nonce'); ?>

    <table id="layout-metabox" class="form-table" width="100%">
        <tbody>
            <tr>
                <label class="description"><?php
                    $layout_option = get_post_meta($post->ID, 'evos_layout_options', true);?>
                    <select name="evos_layout_options" id="evos_layout_options">
                        <option value="">Default</option><?php
                        foreach( $evos_layout_options as $key=>$val ) { ?>
                        <option value="<?php echo $key; ?>" <?php echo $layout_option === $key ? 'selected="selected"': '';?>><?php echo $val; ?></option><?php
                        }?>
                    </select>
                </label>
            </tr>
        </tbody>
    </table><?php
}

/****************************************************************************************/


add_action('save_post', 'evos_save_custom_metaboxes');
/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function evos_save_custom_metaboxes($post_id)
{
    if( !isset( $_POST['evos_layout_options'] ) )
        return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Verify the nonce before proceeding.
    if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return;

    global $evos_layout_options, $post;

    update_post_meta($post_id, 'evos_layout_options', $_POST['evos_layout_options']);
    


    // if ('page' == $_POST['post_type']) {
    //     if (!current_user_can('edit_page', $post_id))
    //         return $post_id;
    // } elseif (!current_user_can('edit_post', $post_id)) {
    //     return $post_id;
    // }
}