<?php
if (!defined('ABSPATH')) {
    exit;
}

use WCKalkulator\Helper;

?>
<div class="field" data-type="<?php echo esc_html($view->type); ?>"
     data-use-expression="<?php echo esc_attr($view->use_expression); ?>">
    <div class="header">
        <span class="action-drag left dashicons dashicons-move"></span>
        <span class="left text"><?php echo esc_html($view->title); ?></span>
        <span class="action-delete right dashicons dashicons-no-alt"></span>
        <span class="action-toggle right dashicons dashicons-arrow-up-alt2"></span>
        <div class="clear"></div>
    </div>
    <div class="body">
        <div class="half first">
            <label>* <?php _e('Unique Field Name', 'wc-kalkulator'); ?>
                <?php echo Helper::html_help_tip(__('Field name must be unique and consist of letters, numbers and underscores. Correct names are: field_name, product_width.', 'wc-kalkulator')); ?>
            </label>
            <input type="text" class="param f-name" pattern="[a-zA-Z0-9_]+" title="A-Za-z0-9_" placeholder="field_name"
                   required>
        </div>
        <div class="half second">
            <label>* <?php _e('Title', 'wc-kalkulator'); ?>
                <?php echo Helper::html_help_tip(__('Title will be displayed on the product page.', 'wc-kalkulator')); ?>
            </label>
            <input type="text" class="param f-title" placeholder="Field Name" required>
        </div>
        <div class="clear"></div>
        <div class="half first">
        <label>
            <?php _e('Hint for Customer (tooltip)', 'wc-kalkulator'); ?>
            <?php echo Helper::html_help_tip(__('Text to be displayed as a tooltip just like this one.', 'wc-kalkulator')); ?>
        </label>
        <input type="text" class="param f-hint" placeholder="Hint for Customer">
        </div>
        <div class="half second">
        <label>
            <?php _e('CSS Class', 'wc-kalkulator'); ?>
            <?php echo Helper::html_help_tip(__('CSS class or multiple classes separated by a space.', 'wc-kalkulator')); ?>
        </label>
        <input type="text" class="param f-css-class" pattern="[a-zA-Z0-9_-]+" title="A-Za-z0-9_-"
               placeholder="css_class">
        </div>
        <div class="clear"></div>
        <?php echo wp_kses($view->admin_fields, \WCKalkulator\Sanitizer::allowed_html()); ?>
    </div>
</div>