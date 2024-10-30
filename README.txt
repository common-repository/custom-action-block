=== Custom Action Block ===
Contributors: tpplugins
Tags: blocks, custom-actions, gutenberg
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add custom action hooks to your content with a new Gutenberg block.

== Description ==

Custom Action Block is a powerful WordPress plugin that adds a new block type to the Gutenberg editor. This block allows users to insert custom action hooks anywhere on their WordPress site, not just in posts and pages. This flexibility enables developers to add dynamic content or functionality at any location where blocks can be used, including:
- Posts and pages
- Custom post types
- Widget areas (if block-based widgets are enabled)
- Site-wide areas in block-based themes (header, footer, sidebar)
- Reusable blocks that can be inserted anywhere

By providing this level of flexibility, Custom Action Block opens up endless possibilities for customizing and extending your WordPress site's functionality.

[youtube https://www.youtube.com/watch?v=pzxVkwU--ok]

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/custom-action-block` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

== Usage ==
For Content Creators:

1. Edit a post or page using the block editor
2. Click the '+' icon to add a new block
3. Search for "Custom Action" in the block inserter
4. Add the Custom Action block to your content
5. In the block settings, specify a unique name for your action (e.g., "my_custom_action")

== Frequently Asked Questions ==

### Can I use Custom Action blocks in areas other than posts and pages?
Yes! Custom Action blocks can be used anywhere that supports blocks. This includes widget areas (if your theme supports block-based widgets), headers, footers, and other template parts in block-based themes.

### Can I use multiple Custom Action blocks in a single post?
Yes, you can use as many Custom Action blocks as you need. Just make sure to give each a unique action name.

### Is this plugin compatible with my theme?
This plugin should be compatible with any theme that supports the WordPress block editor (Gutenberg).

### How can developers take advantage of these custom actions?

For example:

```php
<?php add_action('my_custom_action','your_custom_function', 10); ?>
<?php function your_custom_function() {
    echo "This content is dynamically inserted by a custom action!";
} ?>```

== Screenshots ==

1. Custom action block (1/4)
2. Custom action name (2/4)
3. Use on your functions.php (3/4)
4. Action fire on front site (4/4)

== Changelog ==

= 1.0 =
* Initial release
