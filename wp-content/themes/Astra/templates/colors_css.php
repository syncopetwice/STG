<?php
global $smof_data, $output_styles_to_file;

if ($smof_data['body_text_font'] == '' OR $smof_data['body_text_font'] == 'none') {
	$smof_data['body_text_font'] = 'Open Sans';
}

if ($smof_data['navigation_font'] == '' OR $smof_data['navigation_font'] == 'none') {
	$smof_data['navigation_font'] = 'Open Sans';
}

if ($smof_data['heading_font'] == '' OR $smof_data['heading_font'] == 'none') {
	$smof_data['heading_font'] = 'Roboto Slab';
}

if (empty($smof_data['regular_nav_lineheight'])) {
	$smof_data['regular_nav_lineheight'] = 24;
}

if (empty($smof_data['regular_fontsize'])) {
	$smof_data['regular_fontsize'] = 14;
}

if (empty($smof_data['nav_fontsize'])) {
	$smof_data['nav_fontsize'] = 15;
}

if (empty($smof_data['h1_fontsize'])) {
	$smof_data['h1_fontsize'] = 36;
}

if (empty($smof_data['h1_lineheight'])) {
	$smof_data['h1_lineheight'] = 46;
}

if (empty($smof_data['h2_fontsize'])) {
	$smof_data['h2_fontsize'] = 30;
}

if (empty($smof_data['h2_lineheight'])) {
	$smof_data['h2_lineheight'] = 40;
}

if (empty($smof_data['h3_fontsize'])) {
	$smof_data['h3_fontsize'] = 24;
}

if (empty($smof_data['h3_lineheight'])) {
	$smof_data['h3_lineheight'] = 34;
}

if (empty($smof_data['h4_fontsize'])) {
	$smof_data['h4_fontsize'] = 20;
}

if (empty($smof_data['h4_lineheight'])) {
	$smof_data['h4_lineheight'] = 30;
}

if (empty($smof_data['h5_fontsize'])) {
	$smof_data['h5_fontsize'] = 18;
}

if (empty($smof_data['h5_lineheight'])) {
	$smof_data['h5_lineheight'] = 26;
}

if (empty($smof_data['h6_fontsize'])) {
	$smof_data['h6_fontsize'] = 16;
}

if (empty($smof_data['h6_lineheight'])) {
	$smof_data['h6_lineheight'] = 24;
}

if (empty($output_styles_to_file) OR $output_styles_to_file == FALSE) {
?>
<style id="us_fonts_inline">
<?php } ?>
/* Main Text Font */

body,
p,
td,
.w-portfolio .w-portfolio-item .w-portfolio-item-title {
	font-family: '<?php echo $smof_data['body_text_font']; ?>';
}

body,
p,
td {
	font-size: <?php echo $smof_data['regular_fontsize']; ?>px;
	line-height: <?php echo $smof_data['regular_nav_lineheight']; ?>px;
}

/* Navigation Text Font */

.l-subheader.at_middle .w-nav-item {
	font-family: '<?php echo $smof_data['navigation_font']; ?>';
}

.l-subheader.at_middle .w-nav-item {
	font-size: <?php echo $smof_data['nav_fontsize']; ?>px;
}

/* Heading Text Font */

h1,
h2,
h3,
h4,
h5,
h6,
.w-pricing-item-title,
.w-pricing-item-price,
.w-shortblog-entry-meta-date-day {
	font-family: '<?php echo $smof_data['heading_font']; ?>';
}

h1 {
	font-size: <?php echo $smof_data['h1_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h1_lineheight']; ?>px;
}

h2 {
	font-size: <?php echo $smof_data['h2_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h2_lineheight']; ?>px;
}

h3 {
	font-size: <?php echo $smof_data['h3_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h3_lineheight']; ?>px;
}

h4 {
	font-size: <?php echo $smof_data['h4_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h4_lineheight']; ?>px;
}

h5 {
	font-size: <?php echo $smof_data['h5_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h5_lineheight']; ?>px;
}

h6 {
	font-size: <?php echo $smof_data['h6_fontsize']; ?>px;
	line-height: <?php echo $smof_data['h6_lineheight']; ?>px;
}

<?php
if (empty($output_styles_to_file) OR $output_styles_to_file == FALSE) {
?>
</style>
<style id="us_colors_inline">
<?php
}
?>
/*************************** BODY ***************************/

/* Body Background color */
.l-body {
	background-color: <?php echo ($smof_data['body_background'] != '')?$smof_data['body_background']:'#ecf0f1'; ?>;
	}



/*************************** HEADER ***************************/

/* Header Background color */
.l-subheader.at_middle,
.l-subheader.at_middle .w-nav-item.level_2:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.active:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-item:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-ancestor:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_3:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.active:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-item:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-ancestor:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-search-input input {
	background-color: <?php echo ($smof_data['header_background'] != '')?$smof_data['header_background']:'#2c3e50'; ?>;
	}

/* Header Alternate Background Color */
.l-subheader.at_top,
.l-subheader.at_middle .w-nav-item.level_1:hover .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-list.level_2,
.l-subheader.at_middle .w-nav-list.level_3,
.w-lang.layout_dropdown .w-lang-list .w-lang-item {
	background-color: <?php echo ($smof_data['header_background_alternative'] != '')?$smof_data['header_background_alternative']:'#253444'; ?>;
	}
	
/* Border Color */
.l-subheader.at_top,
.l-subheader.at_middle,
.l-subheader.at_middle .w-nav.touch_enabled .w-nav-anchor {
	border-color: <?php echo ($smof_data['header_border'] != '')?$smof_data['header_border']:'#2c3e50'; ?>;
	}
	
/* Fade Elements Color */
.l-subheader.at_top .w-contacts,
.l-subheader.at_top .w-contacts-item-value a,
.l-subheader.at_top .w-socials-item-link,
.w-lang.layout_dropdown .w-lang-list .w-lang-item,
.w-lang.layout_dropdown .w-lang-current {
	color: <?php echo ($smof_data['header_fade'] != '')?$smof_data['header_fade']:'#75818a'; ?>;
	}
	
/* Navigation Color */
.w-logo-title,
.l-subheader.at_middle .w-nav-control,
.l-subheader.at_middle .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-list.level_2 .w-nav-anchor,
.l-subheader.at_middle .w-search-show,
.l-subheader.at_middle .w-search-input input,
.l-subheader.at_middle .w-search.submit_inside .w-search-submit,
.l-subheader.at_middle .w-search-close {
	color: <?php echo ($smof_data['header_navigation'] != '')?$smof_data['header_navigation']:'#dadfe0'; ?>;
	}

/* Navigation Hover Color */
.l-subheader.at_top .w-contacts-item-value a:hover,
.w-lang.layout_dropdown .w-lang-list .w-lang-item:hover,
.w-lang.layout_dropdown .w-lang-current:hover,
.l-subheader.at_middle .w-nav-control:hover,
.l-subheader.at_middle .w-nav-item.level_1:hover .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_1.active:hover .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_1.current-menu-item:hover .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_1.current-menu-ancestor:hover .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_2:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.active:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-item:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-ancestor:hover .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_3:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.active:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-item:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-ancestor:hover .w-nav-anchor.level_3,
.l-subheader.at_middle .w-search-show:hover,
.l-subheader.at_middle .w-search.submit_inside .w-search-submit:hover,
.l-subheader.at_middle .w-search-close:hover {
	color: <?php echo ($smof_data['header_navigation_hover'] != '')?$smof_data['header_navigation_hover']:'#fff'; ?>;
	}
.l-subheader.at_middle .w-nav-anchor.level_1:after  {
	background-color: <?php echo ($smof_data['header_navigation_hover'] != '')?$smof_data['header_navigation_hover']:'#fff'; ?>;
	}

/* Navigation Active Color */
.l-subheader.at_middle .w-nav-item.level_1.active .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_1.current-menu-item .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_1.current-menu-ancestor .w-nav-anchor.level_1,
.l-subheader.at_middle .w-nav-item.level_2.active .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-item .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_2.current-menu-ancestor .w-nav-anchor.level_2,
.l-subheader.at_middle .w-nav-item.level_3.active .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-item .w-nav-anchor.level_3,
.l-subheader.at_middle .w-nav-item.level_3.current-menu-ancestor .w-nav-anchor.level_3 {
	color: <?php echo ($smof_data['header_navigation_active'] != '')?$smof_data['header_navigation_active']:'#1abc9c'; ?>;
	}



/*************************** MAIN CONTENT ***************************/

/* Background Color */
.l-canvas,
.g-hr-h i,
.w-clients-itemgroup,
.w-clients-nav,
.w-filters-item-link:hover,
.w-iconbox.icon_top .w-iconbox-h,
.w-pagehead-nav .w-pagehead-nav-h .w-pagehead-nav-item,
.w-search.submit_inside .w-search-submit:hover,
.w-tabs-item.active,
.w-timeline-item,
.w-timeline-section-title,
.w-timeline.type_vertical .w-timeline-section-content,
.flex-direction-nav a,
.tp-leftarrow.default,
.tp-rightarrow.default {
	background-color: <?php echo ($smof_data['main_background'] != '')?$smof_data['main_background']:'#fff'; ?>;
	}
.color_primary .w-iconbox.icon_top .w-iconbox-h,
.color_alternate .w-iconbox.icon_top .w-iconbox-h {
	border-color: <?php echo ($smof_data['main_background'] != '')?$smof_data['main_background']:'#fff'; ?>;
	}
.g-btn.type_outline:hover {
	color: <?php echo ($smof_data['main_background'] != '')?$smof_data['main_background']:'#fff'; ?>;
	}

/* Alternate Background Color */
.g-btn.type_default,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="url"],
input[type="tel"],
input[type="number"],
input[type="date"],
textarea,
select,
.l-submain.for_filters,
.w-blog.imgpos_atleft .w-blog-entry.format-audio .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-gallery .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-link .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-quote .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-status .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-video .w-blog-entry-preview-icon,
.w-clients-nav:hover,
.w-portfolio-item-meta,
.w-pricing-item-price,
.w-shortblog-entry-meta-date,
.w-tabs-list,
.w-tabs.layout_accordion .w-tabs-section-title:hover,
.w-tags.layout_block .w-tags-item-link,
.w-testimonial-text,
.w-timeline-list:before,
.w-timeline.type_vertical .w-timeline-section:before {
	background-color: <?php echo ($smof_data['main_background_alternative'] != '')?$smof_data['main_background_alternative']:'#ecf0f1'; ?>;
	}
.w-testimonial-person:before {
	border-top-color: <?php echo ($smof_data['main_background_alternative'] != '')?$smof_data['main_background_alternative']:'#ecf0f1'; ?>;
	}

/* Border Color */
.l-submain,
.g-hr-h,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="url"],
input[type="tel"],
input[type="number"],
input[type="date"],
textarea,
select,
.w-blog-entry,
.w-blog-entry.sticky,
.w-blog.type_masonry .w-blog-entry.sticky,
.w-bloglist,
.w-bloglist.date_atbottom .w-bloglist-entry,
.w-blogpost,
.w-comments-list,
.w-comments-item,
.w-iconbox.icon_top .w-iconbox-h,
.w-nav-list.layout_ver .w-nav-anchor,
.w-pricing-item-h,
.w-portfolio-item-meta,
.w-shortblog-entry-meta-date,
.w-tabs.layout_accordion,
.w-tabs.layout_accordion .w-tabs-section,
.w-timeline.type_vertical .w-timeline-section-content,
#wp-calendar thead th,
#wp-calendar tbody td,
#wp-calendar tfoot td,
.widget.widget_nav_menu .menu-item a,
.widget.widget_nav_menu .menu-item a:hover {
	border-color: <?php echo ($smof_data['main_border'] != '')?$smof_data['main_border']:'#dce2e5'; ?>;
	}
.g-hr-h i,
.page-404 i {
	color: <?php echo ($smof_data['main_border'] != '')?$smof_data['main_border']:'#dce2e5'; ?>;
	}
.pagination .page-numbers {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['main_border'] != '')?$smof_data['main_border']:'#dce2e5'; ?> inset;
	}
.pagination .page-numbers:hover {
	box-shadow: 0 0 0 22px <?php echo ($smof_data['main_border'] != '')?$smof_data['main_border']:'#dce2e5'; ?> inset;
	}

/* Heading Color */
.g-html h1,
.g-html h2,
.g-html h3,
.g-html h4,
.g-html h5,
.g-html h6,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="url"],
input[type="tel"],
input[type="number"],
input[type="date"],
textarea,
select,
.g-btn.type_default:hover,
.w-blog-entry-title,
.color_primary .w-iconbox.icon_top .w-iconbox-h .w-iconbox-text-title,
.color_alternate .w-iconbox.icon_top .w-iconbox-h .w-iconbox-text-title,
.w-tabs-item:hover {
	color: <?php echo ($smof_data['main_heading'] != '')?$smof_data['main_heading']:'#2c3e50'; ?>;
	}
.g-btn.type_outline:before {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['main_heading'] != '')?$smof_data['main_heading']:'#2c3e50'; ?> inset;
	}
.g-btn.type_outline:hover:before {
	box-shadow: 0 0 0 26px <?php echo ($smof_data['main_heading'] != '')?$smof_data['main_heading']:'#2c3e50'; ?> inset;
	}

/* Text Color */
.l-canvas,
.g-btn.type_default,
.g-btn.type_outline,
.pagination .page-numbers,
.w-clients-nav,
.w-clients-nav:hover,
.w-filters-item-link,
.w-iconbox.icon_top .w-iconbox-h,
.w-nav-list.layout_ver .w-nav-anchor,
.w-pagehead h1,
.w-socials-item-link,
.w-tags-item-link,
.widget.widget_archive ul li a,
.widget.widget_categories ul li a,
.widget.widget_nav_menu .menu-item a {
	color: <?php echo ($smof_data['main_text'] != '')?$smof_data['main_text']:'#576676'; ?>;
	}

/* Primary Color */
a,
.w-blog.imgpos_atleft .w-blog-entry.format-audio .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-gallery .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-link .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-quote .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-status .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-video .w-blog-entry-link:hover .w-blog-entry-preview-icon,
.w-blog-entry-link:hover .w-blog-entry-title-h,
.w-filters-item-link:hover,
.w-filters-item.active .w-filters-item-link,
.color_primary .w-iconbox.icon_top .w-iconbox-text-link,
.color_alternate .w-iconbox.icon_top .w-iconbox-text-link,
.w-nav-list.layout_ver .w-nav-anchor:hover,
.w-nav-list.layout_ver .active .w-nav-anchor.level_1,
.w-shortblog-entry-title-h,
.w-tabs-item.active,
.w-tabs.layout_accordion .w-tabs-section.active .w-tabs-section-title,
.widget.widget_nav_menu .menu-item.current-menu-item > a,
.widget.widget_nav_menu .menu-item.current-menu-ancestor > a {
	color: <?php echo ($smof_data['main_primary'] != '')?$smof_data['main_primary']:'#1abc9c'; ?>;
	}
.color_primary,
.g-btn.type_primary,
input[type="submit"],
.pagination .page-numbers.current,
.w-actionbox.color_primary,
.l-main .w-contacts-item i,
.w-iconbox-icon,
.w-pricing-item.type_featured .w-pricing-item-title,
.w-team-member-links-item:hover,
.w-timeline-item.active,
.w-timeline-section.active .w-timeline-section-title {
	background-color: <?php echo ($smof_data['main_primary'] != '')?$smof_data['main_primary']:'#1abc9c'; ?>;
	}
.g-html blockquote,
.w-clients.columns_5 .w-clients-item:hover,
.w-filters-item.active .w-filters-item-link,
.w-tabs-item.active {
	border-color: <?php echo ($smof_data['main_primary'] != '')?$smof_data['main_primary']:'#1abc9c'; ?>;
	}
.w-timeline-item,
.w-timeline-section-title {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['main_primary'] != '')?$smof_data['main_primary']:'#1abc9c'; ?> inset;
	}
.w-timeline-item:hover,
.w-timeline-section-title:hover {
	box-shadow: 0 0 0 30px <?php echo ($smof_data['main_primary'] != '')?$smof_data['main_primary']:'#1abc9c'; ?> inset;
	}

/* Secondary Color */
a:hover,
a:active,
.w-blog.type_masonry .w-blog-entry-meta a:hover,
.color_primary .w-iconbox.icon_top .w-iconbox-text-link:hover,
.color_alternate .w-iconbox.icon_top .w-iconbox-text-link:hover,
.w-shortblog-entry-link:hover .w-shortblog-entry-title-h,
.w-tags-item-link:hover,
.widget.widget_archive ul li a:hover,
.widget.widget_categories ul li a:hover,
.widget.widget_nav_menu .menu-item a:hover,
.widget.widget_tag_cloud .tagcloud a:hover {
	color: <?php echo ($smof_data['main_secondary'] != '')?$smof_data['main_secondary']:'#ffa412'; ?>;
	}
.color_secondary,
.g-btn.type_secondary,
.w-iconbox:hover .w-iconbox-icon,
.w-pagehead-nav .w-pagehead-nav-h .w-pagehead-nav-item:hover,
.w-pricing-item-title,
.w-tags.layout_block .w-tags-item-link:hover {
	background-color: <?php echo ($smof_data['main_secondary'] != '')?$smof_data['main_secondary']:'#ffa412'; ?>;
	}
.w-iconbox-icon:before {
	box-shadow: 0 0 0 3px <?php echo ($smof_data['main_secondary'] != '')?$smof_data['main_secondary']:'#ffa412'; ?>;
	}

/* Fade Elements Color */
.w-blog-entry-meta-date i,
.w-blog-entry-meta-author i,
.w-blog-entry-meta-tags i,
.w-blog-entry-meta-comments i,
.w-blogpost-meta,
.w-blog.imgpos_atleft .w-blog-entry.format-audio .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-gallery .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-link .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-quote .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-status .w-blog-entry-preview-icon,
.w-blog.imgpos_atleft .w-blog-entry.format-video .w-blog-entry-preview-icon,
.w-blog.type_masonry .w-blog-entry-meta-date,
.w-blog.type_masonry .w-blog-entry-meta-author,
.w-blog.type_masonry .w-blog-entry-meta-tags,
.w-blog.type_masonry .w-blog-entry-meta-comments,
.w-blog.type_masonry .w-blog-entry-meta a,
.w-bloglist-entry-date,
.w-bloglist-entry-author,
.w-clients-nav,
.w-clients-nav:hover,
.w-comments-item-date,
.w-nav-list.layout_ver .w-nav-anchor:before,
.w-pagehead p,
.w-pagehead-nav .w-pagehead-nav-h .w-pagehead-nav-item,
.w-portfolio-item-meta i,
.w-search.submit_inside .w-search-submit:before,
.for_faq .w-tabs-section-title-icon,
.w-team-member-role,
.w-testimonial-person i,
.flex-direction-nav a,
.tp-leftarrow.default,
.tp-rightarrow.default,
#wp-calendar thead th,
.widget.widget_archive ul li:before,
.widget.widget_categories ul li:before,
.widget.widget_nav_menu .menu-item a:before,
.widget.widget_recent_entries ul li span,
.widget.widget_rss ul li span,
.widget.widget_rss ul li cite,
.widget.widget_tag_cloud .tagcloud a {
	color: <?php echo ($smof_data['main_fade'] != '')?$smof_data['main_fade']:'#9ba5a8'; ?>;
	}
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
input[type="date"]:focus,
textarea:focus,
select:focus {
	border-color: <?php echo ($smof_data['main_fade'] != '')?$smof_data['main_fade']:'#9ba5a8'; ?>;
	box-shadow: 0 0 0 1px <?php echo ($smof_data['main_fade'] != '')?$smof_data['main_fade']:'#9ba5a8'; ?>;
	}



/*************************** ALTERNATE CONTENT ***************************/

/* Background Color */
.color_alternate,
.color_alternate .g-hr-h i,
.color_alternate .w-clients-itemgroup,
.color_alternate .w-clients-nav,
.color_alternate .w-tabs-item.active,
.color_alternate .w-timeline-item,
.color_alternate .w-timeline-section-title,
.color_alternate .w-timeline.type_vertical .w-timeline-section-content {
	background-color: <?php echo ($smof_data['alt_background'] != '')?$smof_data['alt_background']:'#ecf0f1'; ?>;
	}
.color_alternate .g-btn.type_outline:hover {
	color: <?php echo ($smof_data['alt_background'] != '')?$smof_data['alt_background']:'#ecf0f1'; ?>;
	}

/* Alternate Background Color */
.color_alternate .g-btn.type_default,
.color_alternate input[type="text"],
.color_alternate input[type="password"],
.color_alternate input[type="email"],
.color_alternate input[type="url"],
.color_alternate input[type="tel"],
.color_alternate input[type="number"],
.color_alternate input[type="date"],
.color_alternate textarea,
.color_alternate select,
.color_alternate .w-clients-nav:hover,
.color_alternate .w-portfolio-item-meta,
.color_alternate .w-pricing-item-price,
.color_alternate .w-shortblog-entry-meta-date,
.color_alternate .w-tabs-list,
.color_alternate .w-tabs.layout_accordion .w-tabs-section-title:hover,
.color_alternate .w-tags.layout_block .w-tags-item-link,
.color_alternate .w-testimonial-text,
.color_alternate .w-timeline-list:before,
.color_alternate .w-timeline.type_vertical .w-timeline-section:before {
	background-color: <?php echo ($smof_data['alt_background_alternative'] != '')?$smof_data['alt_background_alternative']:'#fff'; ?>;
	}
.color_alternate .w-testimonial-person:before {
	border-top-color: <?php echo ($smof_data['alt_background_alternative'] != '')?$smof_data['alt_background_alternative']:'#fff'; ?>;
	}

/* Border Color */
.color_alternate .l-submain,
.color_alternate .g-hr-h,
.color_alternate input[type="text"],
.color_alternate input[type="password"],
.color_alternate input[type="email"],
.color_alternate input[type="url"],
.color_alternate input[type="tel"],
.color_alternate input[type="number"],
.color_alternate input[type="date"],
.color_alternate textarea,
.color_alternate select,
.color_alternate .w-blog-entry,
.color_alternate .w-blog-entry.sticky,
.color_alternate .w-blog.type_masonry .w-blog-entry.sticky,
.color_alternate .w-bloglist,
.color_alternate .w-bloglist.date_atbottom .w-bloglist-entry,
.color_alternate .w-blogpost,
.color_alternate .w-comments-list,
.color_alternate .w-comments-item,
.color_alternate .w-nav-list.layout_ver .w-nav-anchor,
.color_alternate .w-pricing-item-h,
.color_alternate .w-portfolio-item-meta,
.color_alternate .w-shortblog-entry-meta-date,
.color_alternate .w-tabs.layout_accordion,
.color_alternate .w-tabs.layout_accordion .w-tabs-section,
.color_alternate .w-timeline.type_vertical .w-timeline-section-content,
.color_alternate #wp-calendar thead th,
.color_alternate #wp-calendar tbody td,
.color_alternate #wp-calendar tfoot td,
.color_alternate .widget.widget_nav_menu .menu-item a,
.color_alternate .widget.widget_nav_menu .menu-item a:hover {
	border-color: <?php echo ($smof_data['alt_border'] != '')?$smof_data['alt_border']:'#d0d6d9'; ?>;
	}
.color_alternate .g-hr-h i,
.color_alternate .page-404 i {
	color: <?php echo ($smof_data['alt_border'] != '')?$smof_data['alt_border']:'#d0d6d9'; ?>;
	}
.color_alternate .pagination .page-numbers {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['alt_border'] != '')?$smof_data['alt_border']:'#d0d6d9'; ?> inset;
	}
.color_alternate .pagination .page-numbers:hover {
	box-shadow: 0 0 0 22px <?php echo ($smof_data['alt_border'] != '')?$smof_data['alt_border']:'#d0d6d9'; ?> inset;
	}

/* Heading Color */
.color_alternate h1,
.color_alternate h2,
.color_alternate h3,
.color_alternate h4,
.color_alternate h5,
.color_alternate h6,
.color_alternate input[type="text"],
.color_alternate input[type="password"],
.color_alternate input[type="email"],
.color_alternate input[type="url"],
.color_alternate input[type="tel"],
.color_alternate input[type="number"],
.color_alternate input[type="date"],
.color_alternate textarea,
.color_alternate select,
.color_alternate .g-btn.type_default:hover,
.color_alternate .w-blog-entry-title,
.color_alternate .w-tabs-item:hover {
	color: <?php echo ($smof_data['alt_heading'] != '')?$smof_data['alt_heading']:'#2c3e50'; ?>;
	}
.color_alternate .g-btn.type_outline:before {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['alt_heading'] != '')?$smof_data['alt_heading']:'#2c3e50'; ?> inset;
	}
.color_alternate .g-btn.type_outline:hover:before {
	box-shadow: 0 0 0 26px <?php echo ($smof_data['alt_heading'] != '')?$smof_data['alt_heading']:'#2c3e50'; ?> inset;
	}

/* Text Color */
.color_alternate,
.color_alternate .g-btn.type_default,
.color_alternate .g-btn.type_outline,
.color_alternate .pagination .page-numbers,
.color_alternate .w-filters-item-link,
.color_alternate .w-clients-nav,
.color_alternate .w-clients-nav:hover,
.color_alternate .w-nav-list.layout_ver .w-nav-anchor,
.color_alternate .w-pagehead h1,
.color_alternate .w-socials-item-link,
.color_alternate .w-tags-item-link,
.color_alternate .widget.widget_archive ul li a,
.color_alternate .widget.widget_categories ul li a,
.color_alternate .widget.widget_nav_menu .menu-item a {
	color: <?php echo ($smof_data['alt_text'] != '')?$smof_data['alt_text']:'#576676'; ?>;
	}

/* Primary Color */
.color_alternate a,
.color_alternate .w-blog-entry-link:hover .w-blog-entry-title-h,
.color_alternate .w-nav-list.layout_ver .w-nav-anchor:hover,
.color_alternate .w-nav-list.layout_ver .active .w-nav-anchor.level_1,
.color_alternate .w-shortblog-entry-title-h,
.color_alternate .w-tabs-item.active,
.color_alternate .w-tabs.layout_accordion .w-tabs-section.active .w-tabs-section-title,
.color_alternate .widget.widget_nav_menu .menu-item.current-menu-item > a,
.color_alternate .widget.widget_nav_menu .menu-item.current-menu-ancestor > a {
	color: <?php echo ($smof_data['alt_primary'] != '')?$smof_data['alt_primary']:'#1abc9c'; ?>;
	}
.color_alternate .g-btn.type_primary,
.color_alternate input[type="submit"],
.color_alternate .pagination .page-numbers.current,
.color_alternate .w-actionbox.color_primary,
.color_alternate .l-main .w-contacts-item i,
.color_alternate .w-iconbox-icon,
.color_alternate .w-pricing-item.type_featured .w-pricing-item-title,
.color_alternate .w-tags.layout_block .w-tags-item-link:hover,
.color_alternate .w-team-member-links-item:hover,
.color_alternate .w-timeline-item.active,
.color_alternate .w-timeline-section.active .w-timeline-section-title {
	background-color: <?php echo ($smof_data['alt_primary'] != '')?$smof_data['alt_primary']:'#1abc9c'; ?>;
	}
.color_alternate .g-html blockquote,
.color_alternate .w-clients.columns_5 .w-clients-item:hover,
.color_alternate .w-filters-item.active .w-filters-item-link,
.color_alternate .w-tabs-item.active {
	border-color: <?php echo ($smof_data['alt_primary'] != '')?$smof_data['alt_primary']:'#1abc9c'; ?>;
	}
.color_alternate .w-timeline-item,
.color_alternate .w-timeline-section-title {
	box-shadow: 0 0 0 2px <?php echo ($smof_data['alt_primary'] != '')?$smof_data['alt_primary']:'#1abc9c'; ?> inset;
	}
.color_alternate .w-timeline-item:hover,
.color_alternate .w-timeline-section-title:hover {
	box-shadow: 0 0 0 30px <?php echo ($smof_data['alt_primary'] != '')?$smof_data['alt_primary']:'#1abc9c'; ?> inset;
	}

/* Secondary Color */
.color_alternate a:hover,
.color_alternate a:active,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta a:hover,
.color_alternate .w-shortblog-entry-link:hover .w-shortblog-entry-title-h,
.color_alternate .w-tags-item-link:hover,
.color_alternate .widget.widget_archive ul li a:hover,
.color_alternate .widget.widget_categories ul li a:hover,
.color_alternate .widget.widget_nav_menu .menu-item a:hover,
.color_alternate .widget.widget_tag_cloud .tagcloud a:hover {
	color: <?php echo ($smof_data['alt_secondary'] != '')?$smof_data['alt_secondary']:'#ffa412'; ?>;
	}
.color_alternate .g-btn.type_secondary,
.color_alternate .w-iconbox:hover .w-iconbox-icon,
.color_alternate .w-pricing-item-title,
.color_alternate .w-tags.layout_block .w-tags-item-link:hover {
	background-color: <?php echo ($smof_data['alt_secondary'] != '')?$smof_data['alt_secondary']:'#ffa412'; ?>;
	}
.color_alternate .w-iconbox-icon:before {
	box-shadow: 0 0 0 3px <?php echo ($smof_data['alt_secondary'] != '')?$smof_data['alt_secondary']:'#ffa412'; ?>;
	}

/* Fade Elements Color */
.color_alternate .w-blog-entry-meta-date i,
.color_alternate .w-blog-entry-meta-author i,
.color_alternate .w-blog-entry-meta-tags i,
.color_alternate .w-blog-entry-meta-comments i,
.color_alternate .w-blogpost-meta,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta-date,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta-author,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta-tags,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta-comments,
.color_alternate .w-blog.type_masonry .w-blog-entry-meta a,
.color_alternate .w-bloglist-entry-date,
.color_alternate .w-bloglist-entry-author,
.color_alternate .w-clients-nav,
.color_alternate .w-clients-nav:hover,
.color_alternate .w-comments-item-date,
.color_alternate .w-nav-list.layout_ver .w-nav-anchor:before,
.color_alternate .w-pagehead p,
.color_alternate .w-portfolio-item-meta i,
.color_alternate .w-search.submit_inside .w-search-submit:before,
.color_alternate .for_faq .w-tabs-section-title-icon,
.color_alternate .w-team-member-role,
.color_alternate .w-testimonial-person i,
.color_alternate  #wp-calendar thead th,
.color_alternate .widget.widget_archive ul li:before,
.color_alternate .widget.widget_categories ul li:before,
.color_alternate .widget.widget_nav_menu .menu-item a:before,
.color_alternate .widget.widget_recent_entries ul li span,
.color_alternate .widget.widget_rss ul li span,
.color_alternate .widget.widget_rss ul li cite,
.color_alternate .widget.widget_tag_cloud .tagcloud a {
	color: <?php echo ($smof_data['alt_fade'] != '')?$smof_data['alt_fade']:'#9ba5a8'; ?>;
	}
.color_alternate input[type="text"]:focus,
.color_alternate input[type="password"]:focus,
.color_alternate input[type="email"]:focus,
.color_alternate input[type="url"]:focus,
.color_alternate input[type="tel"]:focus,
.color_alternate input[type="number"]:focus,
.color_alternate input[type="date"]:focus,
.color_alternate textarea:focus,
.color_alternate select:focus {
	border-color: <?php echo ($smof_data['alt_fade'] != '')?$smof_data['alt_fade']:'#9ba5a8'; ?>;
	box-shadow: 0 0 0 1px <?php echo ($smof_data['alt_fade'] != '')?$smof_data['alt_fade']:'#9ba5a8'; ?>;
	}



/*************************** SUBFOOTER ***************************/

/* Background Color */
.l-subfooter.at_top {
	background-color: <?php echo ($smof_data['subfooter_background'] != '')?$smof_data['subfooter_background']:'#2c3e50'; ?>;
	}

/* Border Color */
.l-subfooter.at_top,
.l-subfooter.at_top #wp-calendar thead th,
.l-subfooter.at_top #wp-calendar tbody td,
.l-subfooter.at_top #wp-calendar tfoot td,
.l-subfooter.at_top .widget.widget_nav_menu .menu-item a {
	border-color: <?php echo ($smof_data['subfooter_border'] != '')?$smof_data['subfooter_border']:'#415569'; ?>;
	}

/* Text Color */
.l-subfooter.at_top,
.l-subfooter.at_top .w-socials-item-link,
.l-subfooter.at_top .widget.widget_tag_cloud .tagcloud a {
	color: <?php echo ($smof_data['subfooter_text'] != '')?$smof_data['subfooter_text']:'#a5aeb0'; ?>;
	}

/* Heading Color */
.l-subfooter.at_top h1,
.l-subfooter.at_top h2,
.l-subfooter.at_top h3,
.l-subfooter.at_top h4,
.l-subfooter.at_top h5,
.l-subfooter.at_top h6 {
	color: <?php echo ($smof_data['subfooter_heading'] != '')?$smof_data['subfooter_heading']:'#fff'; ?>;
	}

/* Link Color */
.l-subfooter.at_top a,
.l-subfooter.at_top .widget.widget_archive ul li a,
.l-subfooter.at_top .widget.widget_categories ul li a,
.l-subfooter.at_top .widget.widget_nav_menu .menu-item a {
	color: <?php echo ($smof_data['subfooter_link'] != '')?$smof_data['subfooter_link']:'#dadfe0'; ?>;
	}

/* Link Hover Color */
.l-subfooter.at_top a:hover,
.l-subfooter.at_top .w-socials-item-link:hover,
.l-subfooter.at_top .widget.widget_archive ul li a:hover,
.l-subfooter.at_top .widget.widget_categories ul li a:hover,
.l-subfooter.at_top .widget.widget_nav_menu .menu-item a:hover,
.l-subfooter.at_top .widget.widget_tag_cloud .tagcloud a:hover {
	color: <?php echo ($smof_data['subfooter_link_hover'] != '')?$smof_data['subfooter_link_hover']:'#ffa412'; ?>;
	}

/* Fade Elements Color */
.l-subfooter.at_top #wp-calendar thead th,
.l-subfooter.at_top .widget.widget_archive ul li:before,
.l-subfooter.at_top .widget.widget_categories ul li:before,
.l-subfooter.at_top .widget.widget_nav_menu .menu-item a:before,
.l-subfooter.at_top .widget.widget_recent_entries ul li span,
.l-subfooter.at_top .widget.widget_rss ul li span,
.l-subfooter.at_top .widget.widget_rss ul li cite {
	color: <?php echo ($smof_data['subfooter_fade'] != '')?$smof_data['subfooter_fade']:'#879598'; ?>;
	}



/*************************** FOOTER ***************************/

/* Background Color */
.l-subfooter.at_bottom {
	background-color: <?php echo ($smof_data['footer_background'] != '')?$smof_data['footer_background']:'#253444'; ?>;
	}

/* Border Color */
.l-subfooter.at_bottom {
	border-color: <?php echo ($smof_data['footer_border'] != '')?$smof_data['footer_border']:'#253444'; ?>;
	}

/* Text Color */
.l-subfooter.at_bottom {
	color: <?php echo ($smof_data['footer_text'] != '')?$smof_data['footer_text']:'#75818a'; ?>;
	}

/* Link Color */
.l-subfooter.at_bottom a {
	color: <?php echo ($smof_data['footer_link'] != '')?$smof_data['footer_link']:'#a5aeb0'; ?>;
	}

/* Link Hover Color */
.l-subfooter.at_bottom a:hover {
	color: <?php echo ($smof_data['footer_link_hover'] != '')?$smof_data['footer_link_hover']:'#ffa412'; ?>;
	}
<?php
if (empty($output_styles_to_file) OR $output_styles_to_file == FALSE) {
?>
</style>
<?php
}
?>
<?php if ($smof_data['custom_css'] != '') { ?>
<?php
if (empty($output_styles_to_file) OR $output_styles_to_file == FALSE) {
?>
<style>
<?php
}
?>
<?php echo $smof_data['custom_css'] ?>
<?php
if (empty($output_styles_to_file) OR $output_styles_to_file == FALSE) {
?>
</style>
<?php
}
?>
<?php } ?>