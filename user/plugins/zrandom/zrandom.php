<?php
namespace Grav\Plugin;

use Grav\Common\Page\Collection;
use Grav\Common\Plugin;
use Grav\Common\Uri;
use Grav\Common\Taxonomy;

class ZrandomPlugin extends Plugin
{
  public static function getSubscribedEvents() {
      return [
          'onPluginsInitialized' => ['onPluginsInitialized', 0],
      ];
  }
  public function onPluginsInitialized()
  {
      /** @var Uri $uri */
      $uri = $this->grav['uri'];
      $route = $this->config->get('plugins.random.route');

      if ($route && $route == $uri->path()) {
          $this->enable([
              'onPageInitialized' => ['onPageInitialized', 0]
          ]);
      }
  }
  public function onPageInitialized()
  {
      $taxonomy_map = $this->grav['taxonomy'];

      $filters = (array) $this->config->get('plugins.random.filters');
      $operator = $this->config->get('plugins.random.filter_combinator', 'and');

      if (count($filters)) {
          $collection = new Collection();
          $collection->append($taxonomy_map->findTaxonomy($filters, $operator)->toArray());
          if (count($collection)) {
              unset($this->grav['page']);
              $this->grav['page'] = $collection->random()->current();
          }
      }
  }
}
