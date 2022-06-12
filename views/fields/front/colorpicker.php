<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<tr class="<?php echo esc_html($view->css_class); ?>">
    <td class="label">
        <?php echo wp_kses($view->hint, \WCKalkulator\Sanitizer::allowed_html()); ?>
        <label for="<?php echo esc_html($view->id); ?>">
            <?php echo esc_html($view->title); ?>
            <?php if (isset($view->is_required) && $view->is_required) : ?>
                <span class="required-asterisk">*</span>
            <?php endif; ?>
        </label>
    </td>
    <td class="value">
        <input type="text" id="<?php echo esc_html($view->id); ?>" class="wck-color-picker attached enabled"
               name="<?php echo esc_html($view->name); ?>"
               value="<?php echo esc_html($view->value); ?>"<?php echo esc_html($view->required); ?>>
    </td>
</tr>