<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Meta fields array for easy access
function repm_fields() {
    return [
        'for_sale_rent', 'residential_type', 'commercial_type',
        'bedrooms', 'bathrooms', 'balconies', 'availability', 'carpet_area', 'total_floors', 'property_on_floor',
        'age', 'ownership', 'price', 'furnishing', 'furnishing_details', 'covered_parking', 'open_parking',
        'water_source', 'location_advantages',
        // Add address fields:
        'address_line_1', 'address_line_2'
    ];
}

// Add meta boxes
add_action('add_meta_boxes', function() {
    add_meta_box('repm_details', 'Property Details', 'repm_meta_box_cb', 'property', 'normal', 'high');
});
function repm_meta_box_cb($post) {
    $fields = repm_fields();
    foreach ($fields as $field) {
        $val = get_post_meta($post->ID, "_$field", true);
        echo "<p><label style='width:160px;display:inline-block'>".ucwords(str_replace('_',' ', $field))."</label>";
        echo "<input type='text' name='$field' value='".esc_attr($val)."' size='30'/></p>";
    }
}

// Save meta
add_action('save_post_property', function($post_id) {
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
    foreach (repm_fields() as $field) {
        if (isset($_POST[$field]))
            update_post_meta($post_id, "_$field", sanitize_text_field($_POST[$field]));
    }
});

// Add this to your meta-boxes.php file
add_action('add_meta_boxes', function() {
    add_meta_box('repm_featured', 'Featured Property', function($post) {
        $is_featured = get_post_meta($post->ID, '_is_featured', true);
        echo '<label><input type="checkbox" name="is_featured" value="1" '.checked($is_featured, '1', false).' /> Mark as Featured</label>';
    }, 'property', 'side', 'high');
});

// Save meta
add_action('save_post_property', function($post_id) {
    if (isset($_POST['is_featured']))
        update_post_meta($post_id, '_is_featured', '1');
    else
        delete_post_meta($post_id, '_is_featured');
});