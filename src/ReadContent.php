<?php

namespace namePlayer\TextyShare;

use Exception;

class ReadContent
{

    private string $jsonData;

    /**
     *
     * @throws Exception
     */
    public function __construct(string $postLocation)
    {

        if(!file_exists($postLocation)) {
            throw new Exception('File cannot be located: ' . $postLocation);
        }

        $this->jsonData = file_get_contents($postLocation);

    }

    public function verifyDocumentJson(?string $json): bool {

        json_decode(empty($json) ? $this->jsonData : $json);
        return json_last_error() === JSON_ERROR_NONE;

    }

    public function getDocumentJsonAsObject(): object {

        return json_decode($this->jsonData);

    }

}