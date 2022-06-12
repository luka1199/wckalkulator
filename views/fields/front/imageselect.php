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
        <?php foreach ($view->options_name as $i => $opt_name) : ?>
            <?php $id = $view->id . '-' . $i; ?>
            <label for="<?php echo esc_html($id); ?>" class="wck-imageselect">
                <input type="radio" name="<?php echo esc_html($view->name); ?>"
                       id="<?php echo esc_html($id); ?>" <?php echo esc_html($view->required); ?>
                       class="attached enabled"
                       value="<?php echo esc_html($opt_name); ?>" <?php checked($view->value, $opt_name); ?>>
                <img src="<?php echo wp_get_attachment_image_url($view->options_image[$i]); ?>"
                     alt="<?php echo esc_html($view->options_title[$i]); ?>"/>
                <?php if (!(isset($view->hide_caption) && $view->hide_caption === true)): ?>
                    <span class="caption"><?php echo esc_html($view->options_title[$i]); ?></span>
                <?php endif; ?>
            </label>
        <?php endforeach; ?>
    </td>
</tr>