<?php
namespace AliyunMNS\Requests;

class BatchPeekMessageRequest extends BaseRequest
{
    private $queueName;
    private $numOfMessages;

    public function __construct($queueName, $numOfMessages)
    {
        parent::__construct('get', 'queues/' . $queueName . '/messages');

        $this->queueName = $queueName;
        $this->numOfMessages = $numOfMessages;
    }

    public function getQueueName()
    {
        return $this->queueName;
    }

    public function getNumOfMessages()
    {
        return $this->numOfMessages;
    }

    public function generateBody()
    {
        return NULL;
    }

    public function generateQueryString()
    {
        return http_build_query(array("numOfMessages" => $this->numOfMessages, "peekonly" => "true"));
    }
}
