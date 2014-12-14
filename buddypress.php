<?php

$context = Maera_Timber::get_context();
$post    = Timber::query_post();

$context['post']       = $post;
$context['bp_content'] = maera_get_echo( 'the_content' );

Maera_Timber::render( array( 'bp.twig' ), $context, apply_filters( 'maera/timber/cache', false ) );
