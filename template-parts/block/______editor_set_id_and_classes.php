<?php 
$anchor = '';
if( !empty( $block['anchor'] ) ) $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
if( !empty( $block['className'] ) ) $blockclass .= ' '.sanitize_title( $block['className'] );

if (!empty(get_field('container_margin'))) { $blockclass .= ' '.sanitize_title(get_field('container_margin'));};


?>
