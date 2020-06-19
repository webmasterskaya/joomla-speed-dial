<?php
/**
 * @package    joomla-speed-dial
 *
 * @author     Артём <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

$items = $params->get('items', new \stdClass());

if (empty($items))
{
	return false;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_speeddial', $params->get('layout', 'default'));
