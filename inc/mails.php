<?php



////////////////////////////////////////////////////////
//////////  custom_excerpt  ////////////////////
//////////////////////////////////////////////////////



function custom_excerpt($text, $post = '') {

    if ( '' == $text ) {

        if ( !empty($post) ) {
            $text = $post->post_content;
        } else {
            $text = get_the_content('');
        }

        $text = strip_shortcodes( $text );

        /** This filter is documented in wp-includes/post-template.php */
        $text = apply_filters( 'the_content', $text );
        $text = str_replace(']]>', ']]&gt;', $text);

        /**
         * Filters the number of words in an excerpt.
         *
         * @since 2.7.0
         *
         * @param int $number The number of words. Default 55.
         */
        $excerpt_length = apply_filters( 'excerpt_length', 55 );
        /**
         * Filters the string in the "more" link displayed after a trimmed excerpt.
         *
         * @since 2.9.0
         *
         * @param string $more_string The string shown within the more link.
         */
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

        return $text;
    }

    return $text;
}
add_filter('get_the_excerpt', 'custom_excerpt', 10, 2);