<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Text
 *
 * @copyright   (C) 2016 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$value = $field->value;

if ($value == '')
{
	return;
}

if (is_array($value))
{
	$value = implode(', ', $value);
}
$out = '<a href="#">'.$value.'</a>';
//echo htmlentities($value);
echo JHtml::_('content.prepare', $out);
echo 'ciao';