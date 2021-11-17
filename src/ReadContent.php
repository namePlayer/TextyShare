<?php

namespace namePlayer\TextyShare;

use Exception;

class ReadContent
{

    private string $jsonData;
    private string $postLocation;

    /**
     *
     * @throws Exception
     */
    public function __construct(string $postLocation)
    {

        if(!file_exists($postLocation . 'json')) {
            throw new Exception('File cannot be located: ' . $postLocation . 'json');
        }

        $this->postLocation = $postLocation;
        $this->jsonData = file_get_contents($postLocation . 'json');

    }

    public function verifyDocumentJson(?string $json): bool {

        json_decode(empty($json) ? $this->jsonData : $json);
        return json_last_error() === JSON_ERROR_NONE;

    }

    public function getDocumentJsonAsObject(): object {

        return json_decode($this->jsonData);

    }

    public function getDocumentText(): string {

        return file_get_contents($this->postLocation . 'md');

    }

}