/*
Theme Name: CI theme
Theme URI: https://wordpress.org/themes/twentyfifteen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Our 2015 default theme is clean, blog-focused, and designed for clarity. Twenty Fifteen's simple, straightforward typography is readable on a wide variety of screen sizes, and suitable for multiple languages. We designed it using a mobile-first approach, meaning your content takes center-stage, regardless of whether your visitors arrive by smartphone, tablet, laptop, or desktop computer.
Version: 1.6
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, two-columns, left-sidebar, accessibility-ready, custom-background, custom-colors, custom-header, custom-logo, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, threaded-comments, translation-ready
Text Domain: twentyfifteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

if($wpdb->insert(
        'wp_ci',
        array(
                'Session_id' => $coursename,
                'Question_1' => $coursename1,
                'Question_2' =>$coursecategory
            )
) == false) wp_die('Database Insertion failed'); else echo 'Database insertion successful<p />';
