<?php

namespace ElasticsearchV2\Endpoints\Script;

use ElasticsearchV2\Endpoints\AbstractEndpoint;
use ElasticsearchV2\Common\Exceptions;

/**
 * Class Put
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Script
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Put extends AbstractEndpoint
{
    /** @var  String */
    private $lang;

    /**
     * @param $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        if (isset($lang) !== true) {
            return $this;
        }

        $this->lang = $lang;

        return $this;
    }

    /**
     * @param array $body
     *
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
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->lang) !== true) {
            throw new Exceptions\RuntimeException(
                'lang is required for Put'
            );
        }
        if (isset($this->id) !== true) {
            throw new Exceptions\RuntimeException(
                'id is required for put'
            );
        }
        $id   = $this->id;
        $lang = $this->lang;
        $uri  = "/_scripts/$lang/$id";

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'version_type',
            'version',
            'op_type'
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
