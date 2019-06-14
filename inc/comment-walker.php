<?php 
/**
 * Custom comment walker
 *
 * @users Walker_Comment
 */
class Schema_Walker_Comment extends Walker_Comment
{
    public function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 )
    {
       // Our custom 'wpse' comment format
       if ( 'schema' === $args['format'] )
       {
           $depth++;
           $GLOBALS['comment_depth'] = $depth;
           $GLOBALS['comment'] = $comment;

           // Start output buffering
           ob_start();

           // Let's use the native html5 comment template
           $this->html5_comment( $comment, $depth, $args );

           // Our modifications (wrap <time> with <span>)
           $output .= str_replace( 
               [ '<li ', '</li>' ], 
               ['<li itemtype="https://schema.org/Comment" itemscope ', '</li>' ], 
               ob_get_clean() 
           );
       }
       else
       {
           // Fallback for the native comment formats
           parent::start_el( $output, $comment, $depth, $args, $id );
       }    
    }
} // end class