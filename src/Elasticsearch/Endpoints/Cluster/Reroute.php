<?php

namespace ElasticsearchV2\Endpoints\Cluster;

use ElasticsearchV2\Common\Exceptions;
use ElasticsearchV2\Endpoints\AbstractEndpoint;

/**
 * Class Reroute
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cluster
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class Reroute extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    protected function getURI()
    {
        $uri = "/_cluster/reroute";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return [
            'dry_run',
            'filter_metadata',
            'explain',
            'metric',
            'master_timeout',
            'timeout',
        ];
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'POST';
    }
}
