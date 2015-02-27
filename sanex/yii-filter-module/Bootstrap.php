<?php

namespace sanex\filter;

use yii\base\BootstrapInterface;

/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module URL rules.
        $app->getUrlManager()->addRules(
            [
                'sanex-filter-ajax' => 'filter/filter/show-data-post-ajax',
            ]
        );
    }
}
