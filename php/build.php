<?php
/**
 * Part of chinese-font-size project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$font   = 'Noto Sans';
$weight = 'bold';
$file   = 'Noto-' . $weight . '.html';
$start  = 10;
$end    = 100;

$tmpl = <<<TMPL
<p style="font-size: %spx; font-weight: %s;">
	%spx: 微風迎客，軟語伴茶。
</p>

TMPL;

$layout = <<<LAYOUT
<div style="font-family: '%s';">
	<h1>%s</h1>

%s
</div>
LAYOUT;

$html = array();

foreach (range($start, $end) as $size)
{
	$html[] = sprintf($tmpl, $size, $weight, $size);
}

$output = sprintf($layout, $font, $font, implode('', $html));

file_put_contents(__DIR__ . '/../' . $file, $output);

echo sprintf("Building font: %s success.\n\n", $font);
