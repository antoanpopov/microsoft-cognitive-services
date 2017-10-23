<?php

namespace AntoanPopov\MicrosoftCognitiveServices\Services;

use AntoanPopov\MicrosoftCognitiveServices\Document\DocumentList;

class Service{

    /** @var  string $endpoint */
    protected $endpoint;

    /** @var  DocumentList $documents */
    protected $documents;


    public function __construct()
    {
        $this->documents = new DocumentList();
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     * @return Service
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @return DocumentList
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param DocumentList $documents
     * @return Service
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }
}