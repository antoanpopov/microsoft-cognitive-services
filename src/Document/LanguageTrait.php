<?php

namespace AntoanPopov\MicrosoftCognitiveServices\Document;

trait LanguageTrait {

    /**
     * @var string $language
     */
    public $language;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return LanguageTrait
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }


}