<?php
/* 
	Plugin Name: Post Divider
	Plugin URI: https://github.com/cdutson/wp-post-divider
	Description: Allows the user to get the content before and after the <!--MORE--> tag. Please refer to Read Me or plugin website for use examples.
	Version: 1.3
	Author: Corey Dutson
	Author URI: http://www.wallofscribbles.com
*/

/* 	USE: Use within 'The Loop'. Pass the function the $post->post_content.

	Example: GETTING THE TEXT BEFORE THE MORE TAG
	<?php the_pre_more_text(); ?>
	<?php $content = get_the_pre_more_text(); ?>

	Example: GETTING THE TEXT AFTER THE MORE TAG
	<?php the_post_more_text(); ?>
	<?php $content = get_the_post_more_text(); ?> */

/* for internal use with this plugin */
function privateConditionContent($body)
{ return  str_replace(']]>', ']]&gt;', apply_filters('the_content', $body)); }

/* Echos the text before the <!--MORE--> tag */
function the_pre_more_text ()
{
   $returnVal = get_the_pre_more_text ($post->post_content);
   if ($returnVal !== FALSE)
      echo $returnVal;
   else
      the_excerpt();
}

/* Returns the text before the <!--MORE--> tag */
function get_the_pre_more_text ()
{
	global $post; 
	$moreTag = '<!--more';

	 $morePos = stripos($post->post_content, $moreTag);
   if ($morePos !== FALSE || $morePos > -1)
      privateConditionContent(substr($post->post_content, 0, $morePos));
   else
      return FALSE;
}

/* Echos the text after the <!--MORE--> tag */
function the_post_more_text ()
{ echo get_the_post_more_text (); }

/* Returns the text after the <!--MORE--> tag */
function get_the_post_more_text ()
{
	global $post; 
   $moreTag = '<!--more';
   $content = FALSE;

   $morePos = stripos($post->post_content, $moreTag);

   if ($morePos !== FALSE || $morePos > -1)
   {
      $content = substr($post->post_content, $morePos + strlen($moreTag));
      $morePos = stripos($content, '-->');
      if ($morePos !== FALSE || $morePos > -1)
         $content = substr($content, $morePos + 3); // TODO: Make this less... well, bad
   }
   else
      $content = $post->post_content;

   return privateConditionContent($content);
}

/* Echos all of the text both before and after the More tag */
function all_post_text()
{ echo get_all_post_text(); }

/* Returns all of the text both before and after the More tag */
function get_all_post_text()
{
	global $post;
	return privateConditionContent($post->post_content);
}

?>