<?php
namespace AliyunMNS\Requests;

class GetSubscriptionAttributeRequest extends BaseRequest
{
    private $topicName;
    private $subscriptionName;

    public function __construct($topicName, $subscriptionName)
    {
        parent::__construct('get', 'topics/' . $topicName . '/subscriptions/' . $subscriptionName);
        $this->topicName = $topicName;
        $this->subscriptionName = $subscriptionName;
    }

    public function getTopicName()
    {
        return $this->topicName;
    }

    public function getSubscriptionName()
    {
        return $this->subscriptionName;
    }

    public function generateBody()
    {
        return NULL;
    }

    public function generateQueryString()
    {
        return NULL;
    }
}
