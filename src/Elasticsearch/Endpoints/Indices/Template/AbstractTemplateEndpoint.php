<?php

namespace ElasticsearchV2\Endpoints\Indices\Template;

use ElasticsearchV2\Endpoints\AbstractEndpoint;

/**
 * Class AbstractTemplateEndpoint
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Indices\Template
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
abstract class AbstractTemplateEndpoint extends AbstractEndpoint
{
    /** @var  string */
    protected $name;

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
