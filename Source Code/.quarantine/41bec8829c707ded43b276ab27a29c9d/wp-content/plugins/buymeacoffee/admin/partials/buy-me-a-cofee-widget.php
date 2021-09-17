<?php

/**
 * Provide a widget for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.buymeacoffee.com
 * @since      1.0.0
 *
 * @package    Buy_Me_A_Coffee
 * @subpackage Buy_Me_A_Coffee/admin/partials
 */

/**
 *
 */

class BMC_Widget extends WP_Widget
{


    // Set up the widget name and description.
    public function __construct()
    {
        $widget_options = array('classname' => 'buymeacoffee_widget', 'description' => 'Buy Me A Coffee widget');
        parent::__construct('buymeacoffee_widget', 'Buy Me A Coffee', $widget_options);
    }


    // Create the widget output.
    public function widget($args, $instance)
    {

        $title = apply_filters('widget_title', $instance['title']);
        $color = apply_filters('widget_color', $instance['color']);
        $blog_title = get_bloginfo('name');
        $tagline = get_bloginfo('description');
        $color = $instance['color'];

        global $wpdb;

        $table = $wpdb->prefix . 'bmc_plugin';
        $data_user = $wpdb->get_row("SELECT * FROM $table", ARRAY_A);
?>
        <style>
            .bmc-button img {
                box-shadow: none !important;
                vertical-align:
                    middle !important;
            }

            .bmc-button {
                display:
                    inline-block !important;
                <?php if ($data_user['font_family'] == 'Cookie') {
                    echo "padding:0px 10px ";
                } else {
                    echo "padding:3px 10px ";
                } ?> !important;
                color:
                    <?php echo $data_user['text_color'];
                    ?> !important;
                background-color:
                    <?php echo $data_user['background_color'];
                    ?> !important;
                border-radius: 3px !important;
                border: 1px solid transparent !important;
                <?php if ($data_user['font_family'] == 'Cookie') {
                    echo 'font-size: 28px';
                } else {
                    echo 'font-size: 20px';
                } ?> !important;
                box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;
                -webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
                -webkit-transition: 0.3s all linear !important;
                transition: 0.3s all linear !important;
                margin: 0 auto !important;
                font-family: "<?php echo $data_user['font_family'] ?>"
                     !important;
            }

            .bmc-button: hover,
            .bmc-button: active,
            .bmc-button: focus {
                -webkit-box-shadow: 0 4px 16px 0 rgba(190, 190, 190, .45) !important;
                box-shadow: 0 4px 16px 0 rgba(190, 190, 190, .45) !important;
                opacity: 0.85 !important;
                color:
                    <?php echo $data_user['text_color'];
                    ?> !important;
            }
        </style>
        <?php
        if (!empty($instance['title']) || $instance['title'] != '') {
            echo '<div style="padding-bottom: 10px; text-align:';
            if (!empty($instance['alignment'])) {
                echo $instance['alignment'];
            } else {
                echo 'center';
            }
            echo ' !important">' . apply_filters('widget_title', $instance['title']) . '</div>';
        }

        ?>

        <link href="https://fonts.googleapis.com/css?family=<?php echo $data_user['font_family'] ?>" rel="stylesheet">
        <p style="text-align:<?php if (!empty($instance['alignment'])) {
                                    echo $instance['alignment'];
                                } else {
                                    echo 'center';
                                } ?> !important; padding-bottom: 10px;"><a target="_blank" class="bmc-button" href="<?php echo URL . $data_user['name']; ?>">
                <img src="<?php echo 'https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg' ?>" alt="BMC logo" style="margin-top: -6px !important;"><span style="margin-left:5px"><?php echo $data_user['widget_text'];
                                                                                                                                                                                        ?></span></a></p>
    <?php echo $args['after_widget'];
    }


    // Create the admin area widget settings form.
    public function form($instance)
    {


        $color = !empty($instance['color']) ? $instance['color'] : '';
        $title = !empty($instance['title']) ? $instance['title'] : '';
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain');
                                                                                ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('alignment')); ?>">Alignment:</label>

            <select id="<?php echo esc_attr($this->get_field_id('alignment')); ?>" name="<?php echo esc_attr($this->get_field_name('alignment')); ?>">
                <option value="left" <?php if ($instance['alignment'] == "left") echo 'selected="selected"';
                                        ?>>Align Left</option>
                <option value="center" <?php if ($instance['alignment'] == "center" || $instance['alignment'] == '') echo 'selected="selected"';
                                        ?>>Align Center</option>
                <option value="right" <?php if ($instance['alignment'] == "right") echo 'selected="selected"';
                                        ?>>Align Right</option>

            </select>
        </p>

<?php
    }


    // Apply settings to the widget instance.
    public function update($new_instance, $old_instance, $reset = false)
    {

        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['alignment'] = strip_tags($new_instance['alignment']);
        $instance['color'] = strip_tags($new_instance['color']);

        return $instance;
    }
}


?>