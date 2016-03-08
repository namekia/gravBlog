<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BlueBoxShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('blubox', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('css', 'plugin://shortcode-core/css/sc-sandbox.css');
            // return '<div class="blueBox-wrapper clearfix">
            //           <div class="blueBox">

            //           <div class="bbox">'.$sc->getContent().'</div>
            //       </div>
            //     </div>';
            // return '<span style="font-weight: bold; color: red;">'.$sc->getContent().'</span>';
            $output = $this->twig->processTemplate('templates/partials/sc-bluebox.html.twig', [
                'shortcode' => $sc,
            ]);

            return $output;
        });
    }
}
