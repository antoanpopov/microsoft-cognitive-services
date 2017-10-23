<?php

namespace AntoanPopov\MicrosoftCognitiveServices\Services;


use AntoanPopov\MicrosoftCognitiveServices\Document\DocumentList;
use AntoanPopov\MicrosoftCognitiveServices\Document\KeyPhrase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class KeyPhrases extends Service
{

    protected $endpoint = "https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/keyPhrases";

    /**
     * @param null $id
     * @param null $language
     * @param null $text
     * @return $this
     */
    public function addKeyPhrase($id = null, $language = null, $text = null)
    {
        $keyPhrase = new KeyPhrase();
        $keyPhrase->setId($id);
        $keyPhrase->setLanguage($language);
        $keyPhrase->setText($text);

        $this->documents->addDocument($keyPhrase);

        return $this;
    }

    public function getKeyPhrases()
    {

        $client = new Client(['base_uri' => 'https://westus.api.cognitive.microsoft.com']);
        $request = new Request(
            'POST', $this->endpoint, [
            'Content-Type' => 'application/json',
            'Ocp-Apim-Subscription-Key' => config('antoanpopov.microsoft-cognitive-services.config.api_key'),
        ],
            \GuzzleHttp\json_encode($this->getDocuments())
        );
        try {

            return $client->send($request)->getBody()->getContents();

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

}