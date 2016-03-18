<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class zzzFigureShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('ZZZui-figure', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('css', 'plugin://shortcode-ui/css/ui-figure.css');

            $output = $this->twig->processTemplate('partials/ui-figure.html.twig', [
                'image' => $sc->getParameter('image'),
                'position' => $sc->getParameter('position'),
                'cite' => $sc->getParameter('cite'),
                'caption' => $sc->getParameter('caption'),
                'theme' => $sc->getParameter('theme', $this->config->get('plugins.shortcode-ui.theme.figure', 'default')),
            ]);

            return $output;
        });
    }
}
