=== PostDivider ===
Contributors: Corey Dutson
Tags: content, more tag, excerpt
Requires at least: 2.0.2
Tested up to: 3.5.1
Stable tag: trunk

Allows the user to select text before and after the MORE tag using custom hooks.

== Description ==

Provides hooks that can be used within 'The Loop' to grab content from before and after the <!--MORE--> tag. If no MORE tag is provided, it will return `the_excerpt()` and `the_content()` respectively. You can also use a function to access all content, regardless of MORE tag.

== Installation ==

1. Upload `PostDivider` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

Once that's done, you can use the following hooks to display the content:
*(Please note that these functions operate within 'The Loop')*

**Getting the text before the <!--MORE--> tag**
* `the_pre_more_text();` - this will display the text automatically.
* `$content = get_the_pre_more_text();` - this stores the text within a variable.

**Getting the text after the <!--MORE--> tag**
* `the_post_more_text();` - this will display the text automatically.
* `$content = get_the_post_more_text();` - this stores the text within a variable.

**Getting all of the text regardless of <!--MORE--> tag**
* `all_post_text();` - this will display the text automatically.
* `$content = get_all_post_text();` - this stores the text within a variable.

== Frequently Asked Questions ==

= The pre more text is just displaying the excerpt, and the post more has all of the content including the excerpt! *What's going on?* =

If your post does not have a **MORE** tag used in it, the functions default to the normal Wordpress functions; namely the_excerpt() and the_content()

== Current version ==

Current version: 1.3

== Revision History ==

0.1 - made within the functions.php file of the theme
0.5 - created the plugin, still required $post->post_content to be passed to functions
1.0 - removed $post->post_content to be passed in.
1.1 - fixed a bug that stopped `the_content()` from posting
1.2 - added function to get all post content, regardless of MORE tag
1.3 - moved to github