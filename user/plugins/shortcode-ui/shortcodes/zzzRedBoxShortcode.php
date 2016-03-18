<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ZZZRedBoxShortcode extends Shortcode
{
    function init()
    {
        $this->shortcode->getHandlers()->add('ZZZredbox', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('css', 'plugin://shortcode-ui/css/sc-sandbox.css');
            $output = $this->twig->processTemplate('partials/zzzsc-redbox.html.twig', [
                'shortcode' => $sc,
            ]);

            return $output;
        });
    }
}
