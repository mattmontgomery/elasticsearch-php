<?php

namespace ElasticsearchV2\Common\Exceptions\Curl;

use ElasticsearchV2\Common\Exceptions\ElasticsearchException;
use ElasticsearchV2\Common\Exceptions\TransportException;

/**
 * Class CouldNotConnectToHost
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class CouldNotConnectToHost extends TransportException implements ElasticsearchException
{
}
