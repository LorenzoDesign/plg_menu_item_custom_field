<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Menuitem
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Plugin\Fields\Menuitem\Extension;;

use Joomla\CMS\Form\Form;
use Joomla\Component\Fields\Administrator\Plugin\FieldsPlugin;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Fields Menuitem Plugin
 *
 * @since  3.7.0
 */
final class Menuitem extends FieldsPlugin
{
	/**
	 * Transforms the field into a DOM XML element and appends it as a child on the given parent.
	 *
	 * @param   stdClass    $field   The field.
	 * @param   \DOMElement  $parent  The field node parent.
	 * @param   Form        $form    The form.
	 *
	 * @return  \DOMElement
	 *
	 * @since   4.0.0
	 */
	public function onCustomFieldsPrepareDom($field, \DOMElement $parent, Form $form)
	{
		if (!$fieldNode = parent::onCustomFieldsPrepareDom($field, $parent, $form))
		{
			return;
		}

		$fieldNode->setAttribute('type', 'menuitem');

		return $fieldNode;
	}
}
 