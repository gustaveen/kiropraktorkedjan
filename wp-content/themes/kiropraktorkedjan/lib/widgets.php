<?php
/**
 * Register sidebars and widgets
 */
function roots_widgets_init() {
  // Sidebars
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Booking', 'roots'),
    'id'            => 'booking-section',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<div class="widget %1$s %2$s col-xs-6">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  // Widgets
  register_widget('Booking_Info_Widget');
}
add_action('widgets_init', 'roots_widgets_init');


/**
 * Booking_Info_Widget
 */
class Booking_Info_Widget extends WP_Widget {
  private $fields = array(
    'name'           => 'Namn',
    'title'          => 'Title (optional)',
    'tel'            => 'Telefon',
    'email'          => 'Email',
    'city'           => 'Stad',
    'available'      => 'Bokningsbar (dagar)'
  );

  function __construct() {
    $widget_ops = array('classname' => 'widget_contact_info', 'description' => __('Use this widget to add Booking Info', 'roots'));

    $this->WP_Widget('widget_contact_info', __('Kiropraktorkedjan: Booking Info', 'roots'), $widget_ops);
    $this->alt_option_name = 'widget_contact_info';

    add_action('save_post', array(&$this, 'flush_widget_cache'));
    add_action('deleted_post', array(&$this, 'flush_widget_cache'));
    add_action('switch_theme', array(&$this, 'flush_widget_cache'));
  }

  function update($new_instance, $old_instance) {
    $instance = array_map('strip_tags', $new_instance);

    $this->flush_widget_cache();

    $alloptions = wp_cache_get('alloptions', 'options');

    if (isset($alloptions['widget_contact_info'])) {
      delete_option('widget_contact_info');
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete('widget_contact_info', 'widget');
  }

  function form($instance) {
    foreach($this->fields as $name => $label) {
      ${$name} = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id($name)); ?>"><?php _e("{$label}:", 'roots'); ?></label>
      <input class="widefat" id="<?php echo esc_attr($this->get_field_id($name)); ?>" name="<?php echo esc_attr($this->get_field_name($name)); ?>" type="text" value="<?php echo ${$name}; ?>">
    </p>
    <?php
    }
  }
}