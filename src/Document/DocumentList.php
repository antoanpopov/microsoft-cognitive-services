<?php

namespace AntoanPopov\MicrosoftCognitiveServices\Document;

class DocumentList
{
    /** @var  Document[] */
    public $documents;

    /**
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Document[] $documents
     * @return DocumentList
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @param Document $document
     * @return DocumentList
     */
    public function addDocument(Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }
}
