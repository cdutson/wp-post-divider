wp-post-divider
===============

A quick and dirty plugin for Wordpress that goes one step beyond the_excerpt()

##Overview
This plugin came into existence roughly 5 years ago, back when I was fairly young to Wordpress. I had just built my first theme, but found some of the built-in post hooks lacking. I wanted to be able to get the intro of my story, regardless of length. You can use the_excerpt() or do a character truncation against the body text, but that seemed silly to me. As such, I rolled up my sleeves and hacked together some theme code that would allow me to fetch everything before and/or after the <!--more--> tag.

A couple days later, I realised that this could be useful to someone other than me, and turned it into a plugin.

Recently I realised that I'm still using my plugin (meaning it still works with the current iteration of Wordpress) and that Wordpress still hasn't introduced a native way to do what I wanted. 

And here we are now.

##Installation
Just pop the postdivider.php file into your wp-content/plugins directory and turn it on. It doesn't actually do anything itself, but does allow for you to add hooks into your theme.

##Usage
The plugin comes with 6 functions that mimic the native Wordpress style of getting post information.

###Pre-more text
The pre-more text is, simply put, all of the text before the <!--more--> tag.
```php
// Echos out all of the text before the <!--more--> tag
the_pre_more_text();

// Returns all of the text before the <!--more--> tag
$text = get_the_pre_more_text();
```

###Post-more text
The opposite to the pre-more text, the post-more text is all of the text following the <!--more--> tag.
```php
// Echos out all of the text after the <!--more--> tag
the_post_more_text();

// Returns all of the text after the <!--more--> tag
$text = get_the_post_more_text();
```

###All post text
For convenience more than anything, the all post text is as the name says, all of the post text with the <!--more--> tag stripped out.
```php
// Echos out all of the post text
all_post_text();

// Returns all of the post text 
$text = get_all_post_text();
```