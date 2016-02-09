<?php

function row_start_func(  ) {
    return "<div class='row'>";
}
add_shortcode( 'row_start', 'row_start_func' );

function row_end_func(  ) {
    return "</div>";
}
add_shortcode( 'row_end', 'row_end_func' );


function box_func( $atts ) {
    extract(shortcode_atts(array(
        'title' => '',
        'text' => '',
        'url' => '',
        'button_text' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col4">';
    $html.='    <div class="box">';
    $html.='       <h2>'.$title.'</h2>';
    $html.='       <h4>'.$text.'</h4>';
    $html.='       <a href="'.$url.'" class="btn-1"><h5>'.$button_text.'</h5></a>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'box', 'box_func' );


function image_box_12_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'text' => '',
    ), $atts));

    $html = "";

    $html.='<div class="col12">';
    $html.='    <div class="card card12">';
    $html.='        <img src="'.$image.'" alt="" class="img-responsive"/>';
    $html.='        <div class="text-box text-box-right">';
    $html.='            <h3>'.$title.'</h3>';
    $html.='            <h1>'.$text.'</h1>';
    $html.='        </div>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'image_box_12', 'image_box_12_func' );


function card_12_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'text' => '',
        'url' => '',
        'button_text' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col12">';
    $html.='    <div class="card card12">';
    $html.='        <div class="card-top">';
    $html.='            <img src="'.$image.'" alt="" />';
    $html.='        </div>';
    $html.='        <div class="card-bottom">';
    $html.='            <h2>'.$title.'</h2>';
    $html.='            <h4>'.$text.'</h4>';
    $html.='            <a href="'.$url.'" class="btn-1"><h5>'.$button_text.'</h5></a>';
    $html.='        </div>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'card_12', 'card_12_func' );



function card_8_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'text' => '',
        'url' => '',
        'button_text' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col8">';
    $html.='    <div class="card card8">';
    $html.='        <div class="card-top">';
    $html.='            <img src="'.$image.'" alt="" />';
    $html.='        </div>';
    $html.='        <div class="card-bottom">';
    $html.='            <h2>'.$title.'</h2>';
    $html.='            <h4>'.$text.'</h4>';
    $html.='            <a href="'.$url.'" class="btn-1"><h5>'.$button_text.'</h5></a>';
    $html.='        </div>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'card_8', 'card_8_func' );

function card_4_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'text' => '',
        'url' => '',
        'button_text' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col4">';
    $html.='    <div class="card card4">';
    $html.='        <div class="card-top">';
    $html.='            <img src="'.$image.'" alt="" />';
    $html.='        </div>';
    $html.='        <div class="card-bottom">';
    $html.='            <h2>'.$title.'</h2>';
    $html.='            <h4>'.$text.'</h4>';
    $html.='            <a href="'.$url.'" class="btn-1"><h5>'.$button_text.'</h5></a>';
    $html.='        </div>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'card_4', 'card_4_func' );




function section_func( $atts ) {
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col12">';
    $html.='    <div class="section-title">';
    $html.='        <h3>'.$title.'</h3>';
    $html.='        <h1>'.$subtitle.'</h1>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'section', 'section_func' );



function small_card_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col4">';
    $html.='    <div class="card-small card4">';
    $html.='        <div class="card-top">';
    $html.='            <img src="'.$image.'" alt=""/>';
    $html.='        </div>';
    $html.='        <div class="card-bottom">';
    $html.='            <h3>'.$title.'</h3>';
    $html.='        </div>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'small_card', 'small_card_func' );


function white_box_start_func( $atts ) {
    extract(shortcode_atts(array(
        'title' => ''
    ), $atts));

    $html = "";

    $html.='<div class="white-box">';
    $html.='<div class="row">';
    $html.='    <div class="col12">';
    $html.='        <h2>'.$title.'</h2>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'white_box_start', 'white_box_start_func' );


function white_box_end_func(  ) {
    return "</div>";
}
add_shortcode( 'white_box_end', 'white_box_end_func' );


function wb_button_func( $atts ) {
    extract(shortcode_atts(array(
        'url' => '',
        'button_text' => ''
    ), $atts));

    $html = "";

    $html.='<div class="col3">';
    $html.='    <a href="'.$url.'" class="btn-1 btn-block"><h5>'.$button_text.'</h5></a>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'wb_button', 'wb_button_func' );
