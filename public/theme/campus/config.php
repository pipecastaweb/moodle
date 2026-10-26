<?php

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../boost/lib.php');

$THEME->name = 'campus';

$THEME->parents = ['boost'];

$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->editor_scss = [];

$THEME->usefallback = true;

/*
 * Usar el renderer personalizado de Campus.
 */
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

/*
 * SCSS personalizado.
 */
$THEME->scss = function($theme) {

    $scss = theme_boost_get_main_scss_content($theme);

    $scss .= file_get_contents(__DIR__ . '/scss/post.scss');

    return $scss;
};