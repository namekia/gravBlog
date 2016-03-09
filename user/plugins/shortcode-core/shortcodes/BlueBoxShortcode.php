<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BlueBoxShortcode extends Shortcode
{
    function init()
    {
        $this->shortcode->getHandlers()->add('blubox', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('css', 'plugin://shortcode-core/css/sc-sandbox.css');
            // return '<div class="blueBox-wrapper clearfix">
            //           <div class="blueBox">
            //             <div class="bbox">'.$sc->getContent().'</div>
            //           </div>
            //         </div>';
            $output = $this->twig->processTemplate('partials/sc-bluebox.html.twig', [
                'shortcode' => $sc,
            ]);

            return $output;
        });
    }
}
