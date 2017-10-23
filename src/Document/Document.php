<?php

namespace AntoanPopov\MicrosoftCognitiveServices\Document;

class Document
{

    /**
     * @var string $id
     */
    public $id;

    /**
     * @var string 4text
     */
    public $text;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Document
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Document
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

}