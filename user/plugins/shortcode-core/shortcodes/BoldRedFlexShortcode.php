<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BoldRedShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('bld', function(ShortcodeInterface $sc) {
            return '<span style="font-weight: bold; color: red;">'.$sc->getContent().'</span>';
        });
    }
}

// <?php

// namespace Grav\Plugin\Shortcodes;

// use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// class UnderlineShortcode extends Shortcode
// {
//     public function init()
//     {
//         $this->shortcode->getHandlers()->add('u', function(ShortcodeInterface $sc) {
//             return '<span style="text-decoration: underline;">'.$sc->getContent().'</span>';
//         });
//     }
// }
