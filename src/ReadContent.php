<?php

namespace namePlayer\TextyShare;

class ReadContent
{

    private function convertToArray($json): array {
        return json_decode($json);
    }

}