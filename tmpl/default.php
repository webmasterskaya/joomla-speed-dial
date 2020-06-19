<?php
/**
 * @package    joomla-speed-dial
 *
 * @author     Артём <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'mod_speeddial/style.css', ['relative' => true, 'version' => 'auto']);

$items = $params->get('items', new \stdClass());
?>
<div class="speed-dial">
    <ul class="speed-dial-items">
		<?php foreach ($items as $item) : ?>
            <li class="speed-dial-item">
                <a href="<?php echo $item->item_link; ?>">
                    <div class="speed-dial-item-image">
                        <img src="<?php echo $item->item_icon; ?>"
                             alt="<?php echo htmlspecialchars($item->item_icon); ?>">
                    </div>
                    <div class="speed-dial-item-content">
                        <p class="speed-dial-item-title"><?php echo $item->item_title; ?><br>
                            <em><?php echo $item->item_subtitle; ?></em>
                        </p>
                    </div>
                </a>
            </li>
		<?php endforeach; ?>
    </ul>
</div>