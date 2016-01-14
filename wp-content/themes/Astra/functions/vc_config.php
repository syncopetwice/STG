<?php

if ( ! function_exists('vc_remove_element')) {
	return;
}

$vc_is_wp_version_3_6_more = version_compare( preg_replace( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo( 'version' ) ), '3.6' ) >= 0;

$target_arr = array(
	__( 'Same window', 'js_composer' ) => '_self',
	__( 'New window', 'js_composer' ) => "_blank"
);

$add_css_animation = array(
	"type" => "dropdown",
	"heading" => __("Animation", "js_composer"),
	"param_name" => "animate",
	"admin_label" => true,
	"value" => array(
		__("No Animation", "js_composer") => '',
		__("Appear From Center", "js_composer") => "afc",
		__("Appear From Left", "js_composer") => "afl",
		__("Appear From Right", "js_composer") => "afr",
		__("Appear From Bottom", "js_composer") => "afb",
		__("Appear From Top", "js_composer") => "aft",
		__("Height From Center", "js_composer") => "hfc",
		__("Width From Center", "js_composer") => "wfc",
		__("Rotate From Center", "js_composer") => "rfc",
		__("Rotate From Left", "js_composer") => "rfl",
		__("Rotate From Right", "js_composer") => "rfr",
	),
	"description" => __("Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.", "js_composer")
);

$post_categories = array('All' => '');
$post_categories_raw = get_categories("hierarchical=0");
foreach ($post_categories_raw as $post_category_raw)
{
	$post_categories[$post_category_raw->name] = $post_category_raw->slug;
}
$portfolio_categories = array('All' => '');
$portfolio_categories_raw = get_categories("taxonomy=us_portfolio_category&hierarchical=0");//print_r($portfolio_categories_raw);
foreach ($portfolio_categories_raw as $portfolio_category_raw)
{
	$portfolio_categories[$portfolio_category_raw->name] = $portfolio_category_raw->slug;
}

// Remove templates
if ( ! function_exists( 'us_vc_remove_default_templates' ) ) {
	function us_vc_remove_default_templates( $data ) {
		return array();
	}

	add_filter('vc_load_default_templates', 'us_vc_remove_default_templates');

}

// Remove elements we do not use
vc_remove_element('vc_text_separator');
vc_remove_element('vc_facebook');
vc_remove_element('vc_tweetmeme');
vc_remove_element('vc_googleplus');
vc_remove_element('vc_pinterest');
vc_remove_element('vc_toggle');
vc_remove_element('vc_images_carousel');
vc_remove_element('vc_tour');
vc_remove_element('vc_teaser_grid');
vc_remove_element('vc_posts_grid');
vc_remove_element('vc_carousel');
vc_remove_element('vc_posts_slider');
vc_remove_element('vc_button2');
vc_remove_element('vc_cta_button');
vc_remove_element('vc_cta_button2');
vc_remove_element('vc_progress_bar');
vc_remove_element('vc_pie');
vc_remove_element('vc_basic_grid');
vc_remove_element('vc_media_grid');
vc_remove_element('vc_masonry_grid');
vc_remove_element('vc_masonry_media_grid');
vc_remove_element('vc_icon');

// Remove elements we will redefine
vc_remove_element('vc_separator');
vc_remove_element('vc_message');
vc_remove_element('vc_single_image');
vc_remove_element('vc_gallery');
vc_remove_element('vc_button');
vc_remove_element('vc_tabs');
vc_remove_element('vc_tab');
vc_remove_element('vc_accordion');
vc_remove_element('vc_accordion_tab');
vc_remove_element('vc_video');
vc_remove_element('vc_gmaps');
vc_remove_element('vc_raw_html');
vc_remove_element('vc_raw_js');
vc_remove_element('vc_widget_sidebar');
vc_remove_element('vc_flickr');
vc_remove_element('vc_empty_space');
vc_remove_element('vc_custom_heading');

// Change params for Row - vc_row
vc_remove_param('vc_row', 'full_width');
vc_remove_param('vc_row', 'el_class');
//vc_remove_param('vc_row', 'css');

vc_add_params('vc_row', array(
	array(
		"type" => "checkbox",
		"heading" => __("Separate Section", "js_composer"),
		"param_name" => "section",
		"value" => array(__("Place row in separate section", "js_composer") => "yes")
	),
	array(
		"type" => "dropdown",
		"heading" => __("Section Color Style", "js_composer"),
		"param_name" => "background",
		"value" => array(__('Main Content (default)', "js_composer") => "", __('Alternate Content', "js_composer") => "alternate", __('Primary background color & White text color', "js_composer") => "primary", __('Secondary background color & White text color', "js_composer") => "secondary",),
		"description" => __("The section will use the color scheme you select. Color schemes are defined at Styling tab of the Theme Options", "js_composer"),
		"dependency" => Array('element' => "section", 'not_empty' => true)
	),
	array(
		"type" => "checkbox",
		"heading" => __("Full Width Content", "js_composer"),
		"param_name" => "full_width",
		"value" => array(__("Stretch section content to screen width", "js_composer") => "yes"),
		"dependency" => Array('element' => "section", 'not_empty' => true)
	),
	array(
		"type" => "checkbox",
		"heading" => __("Full Height Content", "js_composer"),
		"param_name" => "full_height",
		"value" => array(__("Remove vertical indents", "js_composer") => "yes"),
		"dependency" => Array('element' => "section", 'not_empty' => true)
	),
	array(
		"type" => "attach_image",
		"heading" => __("Section Background Image", "js_composer"),
		"param_name" => "img",
		"value" => "",
		"description" => __("Leave empty if you don't want to use the background image", "js_composer"),
		"dependency" => Array('element' => "section", 'not_empty' => true)
	),
	array(
		"type" => "dropdown",
		"heading" => __("Fade Background", "js_composer"),
		"param_name" => "bg_fade",
		"value" => array(__("None", "js_composer") => "", __("Fade with 30% black", "js_composer") => "black_30", __("Fade with 50% black", "js_composer") => "black_50", __("Fade with 30% white", "js_composer") => "white_30", __("Fade with 50% white", "js_composer") => "white_50", ),
		"dependency" => Array('element' => "section", 'not_empty' => true)

	),
	array(
		"type" => "dropdown",
		"heading" => __("Parallax Effect", "js_composer"),
		"param_name" => "parallax",
		"value" => array(__("None", "js_composer") => "", __("Vertical Parallax", "js_composer") => "vertical", __("Horizontal Parallax", "js_composer") => "horizontal", ),
		"dependency" => Array('element' => "section", 'not_empty' => true)

	),
	array(
		"type" => "dropdown",
		"heading" => __("Parallax Background Width", "js_composer"),
		"param_name" => "parallax_bg_width",
		"value" => array("110%" => "110", "120%" => "120", "130%" => "130", "140%" => "140", "150%" => "150", ),
		"description" => '',
		"dependency" => Array('element' => "parallax", 'value' => array('horizontal'))
	),
	array(
		"type" => "dropdown",
		"heading" => __("Parallax Speed Factor", "js_composer"),
		"param_name" => "parallax_speed",
		"value" => array(__('Normal', "js_composer") => "normal",__('Slow', "js_composer") => "slow",  __('Fast', "js_composer") => "fast",  __('None (Image not moves)', "js_composer") => "still",),
		"description" => '',
		"dependency" => Array('element' => "parallax", 'value' => array('vertical'))
	),
	array(
		"type" => "checkbox",
		"heading" => __("Reverse Parallax", "js_composer"),
		"param_name" => "parallax_reverse",
		"value" => array(__("Reverse Parallax Effect", "js_composer") => "yes"),
		"dependency" => Array('element' => "parallax", 'value' => array('vertical'))

	),
	array(
		"type" => "textfield",
		"heading" => __("Extra class name", "js_composer"),
		"param_name" => "class",
		"description" => '',
	),
	array(
		"type" => "textfield",
		"heading" => __("Section ID (optional)", "js_composer"),
		"param_name" => "section_id",
		"description" => '',
		"dependency" => Array('element' => "section", 'not_empty' => true),
	),
));

vc_remove_param('vc_row_inner', 'el_class');
//vc_remove_param('vc_row_inner', 'css');

vc_add_params('vc_row_inner', array(

	array(
		"type" => "textfield",
		"heading" => __("Extra class name", "js_composer"),
		"param_name" => "class",
		"description" => '',
	),
));

// Change params for Column - vc_column

vc_remove_param('vc_column', 'el_class');
//vc_remove_param('vc_column', 'css');
vc_remove_param('vc_column', 'width');
vc_remove_param('vc_column', 'offset');

vc_add_params('vc_column', array(
	$add_css_animation
));

vc_remove_param('vc_column_inner', 'el_class');
//vc_remove_param('vc_column_inner', 'css');
vc_remove_param('vc_column_inner', 'width');

vc_add_params('vc_column_inner', array(
	$add_css_animation
));

/* Single image */
vc_map( array(
	'name' => __( 'Single Image', 'js_composer' ),
	'base' => 'vc_single_image',
	'icon' => 'icon-wpb-single-image',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Single image with CSS animation', 'js_composer' ),
	"params" => array(

		array(
			"type" => "attach_image",
			"heading" => __("Image", "js_composer"),
			"param_name" => "image",
			"value" => "",
			"description" => __("Select image from media library.", "js_composer")
		),
		array(
			"type" => "dropdown",
			"heading" => __("Alignment", "js_composer"),
			"param_name" => "align",
			"value" => array(__('Default', "js_composer") => "", __('Align left', "js_composer") => "left", __('Align center', "js_composer") => "center", __('Align right', "js_composer") => "right"),
			"description" => ''
		),
		$add_css_animation,
		array(
			"type" => "dropdown",
			"heading" => __("Image size", "js_composer"),
			"param_name" => "img_size",
			"value" => array(__("Full Size", "js_composer") => "full", __("Thumbnail", "js_composer") => "thumbnail", __("Medium", "js_composer") => "medium", ),
			"description" => ''
		),
		array(
			"type" => 'checkbox',
			"heading" => __("Open original image in a lightbox on click", "js_composer"),
			"param_name" => "img_link_large",
			"description" => "",
			"value" => Array(__("Yes, please", "js_composer") => 'yes')
		),
		array(
			"type" => "textfield",
			"heading" => __("Image link", "js_composer"),
			"param_name" => "img_link",
			"description" => __("Enter url if you want this image to have link.", "js_composer"),
			"dependency" => Array('element' => "img_link_large", 'is_empty' => true,)
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Open this link in a new tab (window)', 'js_composer' ),
			'param_name' => 'img_link_new_tab',
			'value' => array( __( 'Yes, please', 'js_composer' ) => true ),
			"dependency" => Array('element' => "img_link", 'not_empty' => true),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'Css', 'js_composer' ),
			'param_name' => 'css',
			// 'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
			'group' => __( 'Design options', 'js_composer' )
		),

	)
) );

/* Gallery/Slideshow
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Image Gallery', 'js_composer' ),
	'base' => 'vc_gallery',
	'icon' => 'icon-wpb-images-stack',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Responsive image gallery', 'js_composer' ),
	"params" => array(

		array(
			"type" => "attach_images",
			"heading" => __("Images", "js_composer"),
			"param_name" => "ids",
			"value" => "",
			"description" => __("Select images from media library.", "js_composer")
		),
		array(
			"type" => "dropdown",
			"heading" => __("Gallery Type", "js_composer"),
			"param_name" => "type",
			"value" => array(__("Small size thumbs", "js_composer") => "s", __("Tiny size thumbs", "js_composer") => "xs", __("Medium size thumbs", "js_composer") => "m", __("Large size thumbs", "js_composer") => "l", __("Masonry grid", "js_composer") => "masonry"),
			"description" => '',
		),

	)
) );

/* Slideshow
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Image Slider", "js_composer"),
	"base" => "vc_simple_slider",
	"icon" => "icon-wpb-images-stack",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
			"type" => "attach_images",
			"heading" => __("Images", "js_composer"),
			"param_name" => "ids",
			"value" => "",
			"description" => __("Select images from media library.", "js_composer")

		),
		array(
			"type" => "dropdown",
			"heading" => __("Auto Rotation", "js_composer"),
			"param_name" => "type",
			"value" => array(__("Yes", "js_composer") => "1", __("No", "js_composer") => "0", ),
			"description" => ''
		),

	)
) );

/* Separator (Divider)
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Separator', 'js_composer' ),
	'base' => 'vc_separator',
	'icon' => 'icon-wpb-ui-separator',
//	'show_settings_on_create' => false,
	'category' => __( 'Content', 'js_composer' ),
//"controls"	=> 'popup_delete',
	'description' => __( 'Horizontal separator line', 'js_composer' ),
	"params" => array(

		array(
			"type" => "dropdown",
			"heading" => __("Separator Type", "js_composer"),
			"param_name" => "type",
			"value" => array(__('Full Width', "js_composer") => "", __('Short', "js_composer") => "short", __('Invisible', "js_composer") => "invisible"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Separator Size", "js_composer"),
			"param_name" => "size",
			"value" => array(__('Medium', "js_composer") => "", __('Big', "js_composer") => "big", __('Small', "js_composer") => "small"),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Icon", "js_composer"),
			"param_name" => "icon",
			"value" => "star",
			"description" => sprintf(__('FontAwesome Icon name. %s', "js_composer"), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Full list of icons</a>')
		),
	),
) );

/* Button
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Button", "js_composer"),
	"base" => "vc_button",
	"icon" => "icon-wpb-ui-button",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Button Label", "js_composer"),
			"holder" => "button",
			"class" => "wpb_button",
			"param_name" => "text",
			"value" => __("Click me", "js_composer"),
			"description" => __("This is the text that appears on your button", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Button Link", "js_composer"),
			"param_name" => "url",
			"description" => __("Add the button\'s url eg http://example.com", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Button Icon (optional)", "js_composer"),
			"param_name" => "icon",
			"description" => sprintf(__('FontAwesome Icon name. %s', "js_composer"), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Full list of icons</a>')
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button Position", "js_composer"),
			"param_name" => "align",
			"value" => array(__('Align left', "js_composer") => "left", __('Align center', "js_composer") => "center", __('Align right', "js_composer") => "right"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button Color", "js_composer"),
			"param_name" => "type",
			"value" => array(__("Default (theme color)", "js_composer") => "default", __("Primary (theme color)", "js_composer") => "primary", __("Secondary (theme color)", "js_composer") => "secondary", __("Outlined with Transparent Background", "js_composer") => "outline", __("Pink", "js_composer") => "pink", __("Blue", "js_composer") => "blue", __("Green", "js_composer") => "green", __("Yellow", "js_composer") => "yellow", __("Purple", "js_composer") => "purple", __("Red", "js_composer") => "red", __("Lime", "js_composer") => "lime", __("Navy", "js_composer") => "navy", __("Cream", "js_composer") => "cream", __("Brown", "js_composer") => "brown", __("Midnight", "js_composer") => "midnight", __("Teal", "js_composer") => "teal"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button Size", "js_composer"),
			"param_name" => "size",
			"value" => array(__("Normal", "js_composer") => "", __("Small", "js_composer") => "small", __("Big", "js_composer") => "big"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button Link Target", "js_composer"),
			"param_name" => "target",
			"value" => $target_arr,
			"dependency" => Array('element' => "href", 'not_empty' => true)
		),

	),
	"js_view" => 'VcButtonView'
) );

/* Tabs
---------------------------------------------------------- */
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
vc_map( array(
	"name"  => __("Tabs", "js_composer"),
	"base" => "vc_tabs",
	"show_settings_on_create" => false,
	"is_container" => true,
	"icon" => "icon-wpb-ui-tab-content",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
			"type" => 'checkbox',
			"heading" => __("Act as Timeline", "js_composer"),
			"param_name" => "timeline",
			"description" => '',
			"value" => Array(__("Change look and feel into Timeline", "js_composer") => 'yes')
		),

	),
	"custom_markup" => '
  <div class="wpb_tabs_holder wpb_holder vc_container_for_children">
  <ul class="tabs_controls">
  </ul>
  %content%
  </div>'
,
	'default_content' => '
  [vc_tab title="'.__('Tab 1','js_composer').'" tab_id="'.$tab_id_1.'"][/vc_tab]
  [vc_tab title="'.__('Tab 2','js_composer').'" tab_id="'.$tab_id_2.'"][/vc_tab]
  ',
	"js_view" => ($vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35')
) );

vc_map( array(
	"name" => __("Tab", "js_composer"),
	"base" => "vc_tab",
	"allowed_container_element" => 'vc_row',
	"is_container" => true,
	"content_element" => false,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Tab Title", "js_composer"),
			"param_name" => "title",
			"description" => __("Enter the tab title here (better keep it short)", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Tab Icon (optional)", "js_composer"),
			"param_name" => "icon",
			"description" => sprintf(__('FontAwesome Icon name. %s', "js_composer"), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Full list of icons</a>')

		),

	),
	'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
) );

/* Accordion block
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Accordion", "js_composer"),
	"base" => "vc_accordion",
	"show_settings_on_create" => false,
	"is_container" => true,
	"icon" => "icon-wpb-ui-accordion",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
			"type" => 'checkbox',
			"heading" => __("Act as Toggles", "js_composer"),
			"param_name" => "toggle",
//      "description" => __("Select checkbox to allow for all sections to be be collapsible.", "js_composer"),
			"value" => Array(__("Allow several sections be open at the same time", "js_composer") => 'yes')
		),

	),
	"custom_markup" => '
  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
  %content%
  </div>
  <div class="tab_controls">
  <button class="add_tab" title="'.__("Add accordion section", "js_composer").'">'.__("Add accordion section", "js_composer").'</button>
  </div>
  ',
	'default_content' => '
  [vc_accordion_tab title="'.__('Section 1', "js_composer").'"][/vc_accordion_tab]
  [vc_accordion_tab title="'.__('Section 2', "js_composer").'"][/vc_accordion_tab]
  ',
	'js_view' => 'VcAccordionView'
) );

vc_map( array(
	"name" => __("Accordion Section", "js_composer"),
	"base" => "vc_accordion_tab",
	"allowed_container_element" => 'vc_row',
	"is_container" => true,
	"content_element" => false,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Tab Title", "js_composer"),
			"param_name" => "title",
			"description" => __("Enter the tab title here (better keep it short)", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Tab Icon (optional)", "js_composer"),
			"param_name" => "icon",
			"description" => sprintf(__('FontAwesome Icon name. %s', "js_composer"), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Full list of icons</a>')

		),
	),
	'js_view' => 'VcAccordionTabView'
) );

/* Iconbox
---------------------------------------------------------- */
vc_map( array(
	"name" => __("IconBox", "js_composer"),
	"base" => "vc_iconbox",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("Icon Position", "js_composer"),
			"param_name" => "type",
			"value" => array(__('Icon on Top', "js_composer") => "icon_top", __('Icon at Left', "js_composer") => "icon_left",),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Icon", "js_composer"),
			"param_name" => "icon",
			"value" => 'star',
			"description" => sprintf(__('FontAwesome Icon name. %s', "js_composer"), '<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Full list of icons</a>')
		),
		array(
			"type" => "textfield",
			"heading" => __("Title", "js_composer"),
			"param_name" => "title",
			"holder" => "div",
			"value" => __("Iconbox Title", "js_composer"),
			"description" => ''
		),
		array(
			"type" => "textarea",
//			'admin_label' => true,
			"heading" => __("Iconbox Content", "js_composer"),
			"param_name" => "content",
			"value" => __("Click here to add your own text", "js_composer"),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Link URL", "js_composer"),
			"param_name" => "link_url",
			"value" => "",
			"description" => __("Leave blank to hide link", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Link Text", "js_composer"),
			"param_name" => "link_text",
			"value" => __("Learn More", "js_composer"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Link Target", "js_composer"),
			"param_name" => "target",
			"value" => $target_arr,
			"dependency" => Array('element' => "href", 'not_empty' => true)
		),
		array(
			"type" => "attach_image",
			"heading" => __("Image (optional)", "js_composer"),
			"param_name" => "img",
			"value" => "",
			"description" => __("Select image to replace the icon (32x32 px size is recommended)", "js_composer")
		),
	),
) );

/* Testimonial
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Testimonial", "js_composer"),
	"base" => "vc_testimonial",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Name", "js_composer"),
			"param_name" => "author",
			"value" => __("Name", "js_composer"),
			"description" => __("Enter the Name of the Person to quote", "js_composer")
		),
		array(
			"type" => "textfield",
			"heading" => __("Subtitle", "js_composer"),
			"param_name" => "company",
			"value" => '',
			"description" => __("Can be used for a job description", "js_composer")
		),
		array(
			"type" => "textarea",
			'admin_label' => true,
			"heading" => __("Quote", "js_composer"),
			"param_name" => "content",
			"value" => '',
			"description" => ''
		),
	),
) );

/* Team Member
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Team Member", "js_composer"),
	"base" => "vc_member",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Team Member Name", "js_composer"),
			"param_name" => "name",
			"holder" => "div",
			"value" => __("John Doe", "js_composer"),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Team Member Job Title", "js_composer"),
			"param_name" => "role",
			"value" => '',
			"description" => ''
		),
		array(
			"type" => "attach_image",
			"heading" => __("Team Member Photo", "js_composer"),
			"param_name" => "img",
			"value" => "",
			"description" => __("Either upload a new, or choose an existing image from your media library", "js_composer")
		),
		array(
			"type" => "textarea",
//			'admin_label' => true,
			"heading" => __("Team Member Description", "js_composer"),
			"param_name" => "content",
			"value" => '',
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Link (optional)", "js_composer"),
			"param_name" => "link",
			"value" => "",
			"description" => '',
		),
		array(
			"type" => "textfield",
			"heading" => __("Email (optional)", "js_composer"),
			"param_name" => "email",
			"value" => "",
			"description" => '',
		),

		array(
			"type" => "textfield",
			"heading" => __("Facebook profile", "js_composer"),
			"param_name" => "facebook",
			"value" => "",
			"description" => '',
		),
		array(
			"type" => "textfield",
			"heading" => __("Twitter profile", "js_composer"),
			"param_name" => "twitter",
			"value" => "",
			"description" => '',
		),
		array(
			"type" => "textfield",
			"heading" => __("LinkedIn profile", "js_composer"),
			"param_name" => "linkedin",
			"value" => "",
			"description" => '',
		),
	),
) );

/* Latest posts
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Latest Posts", "js_composer"),
	"base" => "vc_latest_posts",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
//	"show_settings_on_create" => false,
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("Posts Number", "js_composer"),
			"param_name" => "posts",
			"value" => array(2 => 2, 1 =>1, 3 =>3,),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Caregory", "js_composer"),
			"param_name" => "category",
			"value" => $post_categories,
			"description" => ''
		),
	),

) );

/* Recent works
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Recent Works", "js_composer"),
	"base" => "vc_recent_works",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
//	"show_settings_on_create" => false,
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("Columns", "js_composer"),
			"param_name" => "columns",
			"value" => array(4 => 4, 3 =>3, 2 =>2,),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Amount of Items to show", "js_composer"),
			"param_name" => "amount",
			"value" => '',
			"description" =>  __("If left blank, equals amount of Columns", "js_composer"),
		),
		array(
			"type" => "dropdown",
			"heading" => __("Caregory", "js_composer"),
			"param_name" => "category",
			"value" => $portfolio_categories,
			"description" => ''
		),
	),

) );

/* Clients
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Client Logos", "js_composer"),
	"base" => "vc_clients",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
	"show_settings_on_create" => false,
	"controls"	=> 'popup_delete',

) );

/* ActionBox
---------------------------------------------------------- */
vc_map( array(
	"name" => __("ActionBox", "js_composer"),
	"base" => "vc_actionbox",
	"icon" => "icon-wpb-ui-separator-label",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("ActionBox Color", "js_composer"),
			"param_name" => "type",
			"value" => array(__('Primary Color', "js_composer") => "primary", __('Alternate Color', "js_composer") => "alternate",),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Buttons Position", "js_composer"),
			"param_name" => "controls",
			"value" => array(__('Right', "js_composer") => "right", __('Bottom', "js_composer") => "bottom",),
			"description" => '',
		),
		array(
			"type" => "textfield",
			"heading" => __("ActionBox Title", "js_composer"),
			"param_name" => "title",
			"holder" => "div",
			"value" => __("This is ActionBox", "js_composer"),
			"description" => ''
		),
		array(
			"type" => "textarea",
//			'admin_label' => true,
			"heading" => __("ActionBox Text", "js_composer"),
			"param_name" => "message",
			"value" => '',
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Button 1 Label", "js_composer"),
			"param_name" => "button1",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Button 1 Link", "js_composer"),
			"param_name" => "link1",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button 1 Color", "js_composer"),
			"param_name" => "style1",
			"value" => array(__("Default (theme color)", "js_composer") => "default", __("Primary (theme color)", "js_composer") => "primary", __("Secondary (theme color)", "js_composer") => "secondary", __("Outlined with Transparent Background", "js_composer") => "outline", __("Pink", "js_composer") => "pink", __("Blue", "js_composer") => "blue", __("Green", "js_composer") => "green", __("Yellow", "js_composer") => "yellow", __("Purple", "js_composer") => "purple", __("Red", "js_composer") => "red", __("Lime", "js_composer") => "lime", __("Navy", "js_composer") => "navy", __("Cream", "js_composer") => "cream", __("Brown", "js_composer") => "brown", __("Midnight", "js_composer") => "midnight", __("Teal", "js_composer") => "teal"),
			"description" => '',
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button 1 Size", "js_composer"),
			"param_name" => "size1",
			"value" => array(__("Normal", "js_composer") => "", __("Small", "js_composer") => "small", __("Big", "js_composer") => "big"),

		),
		array(
			"type" => "textfield",
			"heading" => __("Button 2 Label", "js_composer"),
			"param_name" => "button2",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Button 2 Link", "js_composer"),
			"param_name" => "link2",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button 2 Color", "js_composer"),
			"param_name" => "style2",
			"value" => array(__("Default (theme color)", "js_composer") => "default", __("Primary (theme color)", "js_composer") => "primary", __("Secondary (theme color)", "js_composer") => "secondary", __("Outlined with Transparent Background", "js_composer") => "outline", __("Pink", "js_composer") => "pink", __("Blue", "js_composer") => "blue", __("Green", "js_composer") => "green", __("Yellow", "js_composer") => "yellow", __("Purple", "js_composer") => "purple", __("Red", "js_composer") => "red", __("Lime", "js_composer") => "lime", __("Navy", "js_composer") => "navy", __("Cream", "js_composer") => "cream", __("Brown", "js_composer") => "brown", __("Midnight", "js_composer") => "midnight", __("Teal", "js_composer") => "teal"),
			"description" => '',
		),
		array(
			"type" => "dropdown",
			"heading" => __("Button 2 Size", "js_composer"),
			"param_name" => "size2",
			"value" => array(__("Normal", "js_composer") => "", __("Small", "js_composer") => "small", __("Big", "js_composer") => "big"),

		),
	),
) );

/* Video element
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Video Player", "js_composer"),
	"base" => "vc_video",
	"icon" => "icon-wpb-film-youtube",
	"category" => __('Content', 'js_composer'),
	"params" => array(

		array(
			"type" => "textfield",
			"heading" => __("Video link", "js_composer"),
			"param_name" => "link",
			"admin_label" => true,
			"description" => sprintf(__('Link to the video. More about supported formats at %s.', "js_composer"), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>')
		),
		array(
			"type" => "dropdown",
			"heading" => __("Ratio", "js_composer"),
			"param_name" => "ratio",
			"value" => array('16x9' => "16-9", '4x3' => "4-3", '3x2' => "3-2", '1x1' => "1-1", ),
			"description" => ''
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'Css', 'js_composer' ),
			'param_name' => 'css',
			// 'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
			'group' => __( 'Design options', 'js_composer' )
		),

	)
) );

/* Message box
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Message Box", "js_composer"),
	"base" => "vc_message",
	"icon" => "icon-wpb-information-white",
	"wrapper_class" => "alert",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("Message Box Color", "js_composer"),
			"param_name" => "color",
			"value" => array(__('Notification (blue)', "js_composer") => "info", __('Attention (yellow)', "js_composer") => "attention", __('Success (green)', "js_composer") => "success", __('Error (red)', "js_composer") => "error"),
			"description" => ''
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "content",
			"heading" => __("Message Text", "js_composer"),
			"param_name" => "content",
			"value" => __("I am message box. Click edit button to change this text.", "js_composer")
		),
	),
	"js_view" => 'VcMessageView'
) );

/* Contact form
---------------------------------------------------------- */
vc_map( array(
	"name"		=> __("Contact Form", "js_composer"),
	"base"		=> "vc_contact_form",
	'icon'		=> 'icon-wpb-ui-separator',
	"category"  => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Contact Form Reciever Email", "js_composer"),
			"param_name" => "form_email",
			"value" => "",
			"description" => sprintf(__('Contact requests will be sent to this Email.', "js_composer"))
		),
		array(
			"type" => "dropdown",
			"heading" => __("Contact Form Name Field State", "js_composer"),
			"param_name" => "form_name_field",
			"value" => array(__('Shown, required', "js_composer") => "required", __('Shown, not required', "js_composer") => "show", __('Hidden', "js_composer") => "not_show"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Contact Form Email Field State", "js_composer"),
			"param_name" => "form_email_field",
			"value" => array(__('Shown, required', "js_composer") => "required", __('Shown, not required', "js_composer") => "show", __('Hidden', "js_composer") => "not_show"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Contact Form Phone Field State", "js_composer"),
			"param_name" => "form_phone_field",
			"value" => array(__('Shown, required', "js_composer") => "required", __('Shown, not required', "js_composer") => "show", __('Hidden', "js_composer") => "not_show"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Contact Form Captcha", "js_composer"),
			"param_name" => "form_captcha",
			"value" => array(__('Don\'t Display Captcha', "js_composer") => "", __('Display Captcha', "js_composer") => "show"),
			"description" => ''
		),
	),
) );



/* Contacts
---------------------------------------------------------- */
vc_map( array(
	"name"		=> __("Contacts", "js_composer"),
	"base"		=> "vc_contacts",
	'icon'		=> 'icon-wpb-ui-separator',
	"category"  => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Address", "js_composer"),
			"param_name" => "address",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Phone", "js_composer"),
			"param_name" => "phone",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Email", "js_composer"),
			"param_name" => "email",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Layout Style", "js_composer"),
			"param_name" => "layout",
			"value" => array(__('Show contact items with Text', "js_composer") => "", __('Show contact items with Icons', "js_composer") => "with_icons",),
			"description" => ''
		),
	),
) );

/* Social Links
---------------------------------------------------------- */
vc_map( array(
	"name"		=> __("Social Links", "js_composer"),
	"base"		=> "vc_social_links",
	'icon'		=> 'icon-wpb-ui-separator',
	"category"  => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "dropdown",
			"heading" => __("Icons Size", "js_composer"),
			"param_name" => "size",
			"value" => array(__('Normal', "js_composer") => "normal", __('Small', "js_composer") => "", __('Big', "js_composer") => "big"),
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Email", "js_composer"),
			"param_name" => "email",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Facebook", "js_composer"),
			"param_name" => "facebook",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Twitter", "js_composer"),
			"param_name" => "twitter",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Google+", "js_composer"),
			"param_name" => "google",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("LinkedIn", "js_composer"),
			"param_name" => "linkedin",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("YouTube", "js_composer"),
			"param_name" => "youtube",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Vimeo", "js_composer"),
			"param_name" => "vimeo",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Flickr", "js_composer"),
			"param_name" => "flickr",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Instagram", "js_composer"),
			"param_name" => "instagram",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Behance", "js_composer"),
			"param_name" => "behance",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Pinterest", "js_composer"),
			"param_name" => "pinterest",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Skype", "js_composer"),
			"param_name" => "skype",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Tumblr", "js_composer"),
			"param_name" => "tumblr",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Dribbble", "js_composer"),
			"param_name" => "dribbble",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("Vkontakte", "js_composer"),
			"param_name" => "vk",
			"value" => "",
			"description" => ''
		),
		array(
			"type" => "textfield",
			"heading" => __("RSS", "js_composer"),
			"param_name" => "rss",
			"value" => "",
			"description" => ''
		),
	),
) );

/* Google maps element
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Google Maps", "js_composer"),
	"base" => "vc_gmaps",
	"icon" => "icon-wpb-map-pin",
	"category" => __('Content', 'js_composer'),
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __("Map Address", "js_composer"),
			"holder" => "div",
			"param_name" => "address",
			"value" => "1600 Amphitheatre Parkway, Mountain View, CA 94043, United States",
			"description" => ''
		),

		array(
			"type" => "textfield",
			"heading" => __("Map Marker text", "js_composer"),
			"param_name" => "marker",
			"description" => __("Leave blank to hide the Marker", "js_composer"),
		),
		array(
			"type" => "textfield",
			"heading" => __("Map height", "js_composer"),
			"param_name" => "height",
			"description" => __('Enter map height in pixels. Default: 400.', "js_composer")
		),
		array(
			"type" => "dropdown",
			"heading" => __("Map type", "js_composer"),
			"param_name" => "type",
			"value" => array(__("Roadmap", "js_composer") => "ROADMAP", __("Satellite", "js_composer") => "SATELLITE", __("Map + Terrain", "js_composer") => "HYBRID", __("Terrain", "js_composer") => "TERRAIN"),
			"description" => ''
		),
		array(
			"type" => "dropdown",
			"heading" => __("Map zoom", "js_composer"),
			"param_name" => "zoom",
			"value" => array(__("14 - Default", "js_composer") => 14, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 15, 16, 17, 18, 19, 20)
		),
		array(
			"type" => "textfield",
			"heading" => __("Map Latitude", "js_composer"),
			"param_name" => "latitude",
			"description" => __("If Longitude and Latitude are set, they override the Address for Google Map.", "js_composer"),
		),
		array(
			"type" => "textfield",
			"heading" => __("Map Longitude", "js_composer"),
			"param_name" => "longitude",
			"description" => __("If Longitude and Latitude are set, they override the Address for Google Map.", "js_composer"),
		),
	)
) );


/* Raw HTML
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Raw HTML', 'js_composer' ),
	'base' => 'vc_raw_html',
	'icon' => 'icon-wpb-raw-html',
	'category' => __( 'Structure', 'js_composer' ),
	'wrapper_class' => 'clearfix',
	'description' => __( 'Output raw html code on your page', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textarea_raw_html',
			'holder' => 'div',
			'heading' => __( 'Raw HTML', 'js_composer' ),
			'param_name' => 'content',
			'value' => base64_encode( '<p>I am raw html block.<br/>Click edit button to change this html</p>' ),
			'description' => __( 'Enter your HTML content.', 'js_composer' )
		),
	)
) );

/* Raw JS
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Raw JS', 'js_composer' ),
	'base' => 'vc_raw_js',
	'icon' => 'icon-wpb-raw-javascript',
	'category' => __( 'Structure', 'js_composer' ),
	'wrapper_class' => 'clearfix',
	'description' => __( 'Output raw javascript code on your page', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textarea_raw_html',
			'holder' => 'div',
			'heading' => __( 'Raw js', 'js_composer' ),
			'param_name' => 'content',
			'value' => __( base64_encode( '<script type="text/javascript"> alert("Enter your js here!" ); </script>' ), 'js_composer' ),
			'description' => __( 'Enter your JS code.', 'js_composer' )
		),
	)
) );


/* Widgetised sidebar
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Widgetised Sidebar', 'js_composer' ),
	'base' => 'vc_widget_sidebar',
	'class' => 'wpb_widget_sidebar_widget',
	'icon' => 'icon-wpb-layout_sidebar',
	'category' => __( 'Structure', 'js_composer' ),
	'description' => __( 'Place widgetised sidebar', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'js_composer' ),
			'param_name' => 'title',
			'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'js_composer' )
		),
		array(
			'type' => 'widgetised_sidebars',
			'heading' => __( 'Sidebar', 'js_composer' ),
			'param_name' => 'sidebar_id',
			'description' => __( 'Select which widget area output.', 'js_composer' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	)
) );


/* Flickr
---------------------------------------------------------- */
vc_map( array(
	'base' => 'vc_flickr',
	'name' => __( 'Flickr Widget', 'js_composer' ),
	'icon' => 'icon-wpb-flickr',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Image feed from your flickr account', 'js_composer' ),
	"params" => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'js_composer' ),
			'param_name' => 'title',
			'description' => __( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'js_composer' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Flickr ID', 'js_composer' ),
			'param_name' => 'flickr_id',
			'admin_label' => true,
			'description' => sprintf( __( 'To find your flickID visit %s.', 'js_composer' ), '<a href="http://idgettr.com/" target="_blank">idGettr</a>' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Number of photos', 'js_composer' ),
			'param_name' => 'count',
			'value' => array( 9, 8, 7, 6, 5, 4, 3, 2, 1 ),
			'description' => __( 'Number of photos.', 'js_composer' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Type', 'js_composer' ),
			'param_name' => 'type',
			'value' => array(
				__( 'User', 'js_composer' ) => 'user',
				__( 'Group', 'js_composer' ) => 'group'
			),
			'description' => __( 'Photo stream type.', 'js_composer' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Display', 'js_composer' ),
			'param_name' => 'display',
			'value' => array(
				__( 'Latest', 'js_composer' ) => 'latest',
				__( 'Random', 'js_composer' ) => 'random'
			),
			'description' => __( 'Photo order.', 'js_composer' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	)
) );


/* Empty Space Element
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Empty Space', 'js_composer' ),
	'base' => 'vc_empty_space',
	'icon' => 'icon-wpb-ui-empty_space',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Add spacer with custom height', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Height', 'js_composer' ),
			'param_name' => 'height',
			'value' => '32px',
			'admin_label' => true,
			'description' => __( 'Enter empty space height.', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
		),
	),
) );

/* Custom Heading element
----------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Custom Heading', 'js_composer' ),
	'base' => 'vc_custom_heading',
	'icon' => 'icon-wpb-ui-custom_heading',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Add custom heading text with google fonts', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textarea',
			'heading' => __( 'Text', 'js_composer' ),
			'param_name' => 'text',
			'admin_label' => true,
			'value'=> __( 'This is custom heading element with Google Fonts', 'js_composer' ),
			'description' => __( 'Enter your content. If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'js_composer' ),
		),
		array(
			'type' => 'font_container',
			'param_name' => 'font_container',
			'value'=>'',
			'settings'=>array(
				'fields'=>array(
					'tag'=>'h2', // default value h2
					'text_align',
					'font_size',
					'line_height',
					'color',
					//'font_style_italic'
					//'font_style_bold'
					//'font_family'

					'tag_description' => __('Select element tag.','js_composer'),
					'text_align_description' => __('Select text alignment.','js_composer'),
					'font_size_description' => __('Enter font size.','js_composer'),
					'line_height_description' => __('Enter line height.','js_composer'),
					'color_description' => __('Select color for your element.','js_composer'),
					//'font_style_description' => __('Put your description here','js_composer'),
					//'font_family_description' => __('Put your description here','js_composer'),
				),
			),
			// 'description' => __( '', 'js_composer' ),
		),
		array(
			'type' => 'google_fonts',
			'param_name' => 'google_fonts',
			'value' => '',// Not recommended, this will override 'settings'. 'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900 bold italic:900:italic'),
			'settings' => array(
				//'no_font_style' // Method 1: To disable font style
				//'no_font_style'=>true // Method 2: To disable font style
				'fields'=>array(
					'font_family'=>'Abril Fatface:regular', //'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',// Default font family and all available styles to fetch
					'font_style'=>'400 regular:400:normal', // Default font style. Name:weight:style, example: "800 bold regular:800:normal"
					'font_family_description' => __('Select font family.','js_composer'),
					'font_style_description' => __('Select font styling.','js_composer')
				)
			),
			// 'description' => __( '', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'Css', 'js_composer' ),
			'param_name' => 'css',
			// 'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' ),
			'group' => __( 'Design options', 'js_composer' )
		),
	),
) );

function remove_vc_base_css_js() {
	wp_deregister_style( 'js_composer_front' );
	wp_deregister_script( 'wpb_composer_front_js' );
}
add_action( 'wp_enqueue_scripts', 'remove_vc_base_css_js', 15 );

if (is_admin()){
	if ( ! function_exists('is_plugin_active')){
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	if (is_plugin_active('astra_js_composer/astra_js_composer.php')){
		deactivate_plugins('astra_js_composer/astra_js_composer.php');
	}
}