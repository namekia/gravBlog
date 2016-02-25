<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class FigureShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('ui-figure', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('js', ['jquery', 101]);
            // $this->shortcode->addAssets('js', 'plugin://shortcode-ui/js/ui-tabs.js');
            $this->shortcode->addAssets('css', 'plugin://shortcode-ui/css/ui-figure.css');

            $hash = $this->shortcode->getId($sc);

            $output = $this->twig->processTemplate('partials/ui-figure.html.twig', [
                'hash' => $hash,
                // 'active' => $sc->getParameter('active', 0),
                'position' => $sc->getParameter('position', 'top-left'),
                'theme' => $sc->getParameter('theme', $this->config->get('plugins.shortcode-ui.theme.figure', 'default')),
                // 'child_tabs' => $this->shortcode->getStates($hash),
            ]);

            return $output;
        });

        // $this->shortcode->getHandlers()->add('ui-figure', function(ShortcodeInterface $sc) {
        //     // Add tab to tab state using parent tabs id
        //     $hash = $this->shortcode->getId($sc->getParent());
        //     $this->shortcode->setStates($hash, $sc);
        //     return;
        // });
    }
}
