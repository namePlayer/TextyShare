<?php

namespace namePlayer\TextyShare;

use namePlayer\TextyShare\TextyshareUtils;

class GenerateContent
{

    private string $title;
    private string $author;
    private string $text;
    private TextyshareUtils $utils;

    public function __construct()
    {
        $this->utils = new TextyshareUtils();
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }

    public function generateJsonFromData(): string {

        $json = "{\n";

        $json .= "\t\"title\": \"".$this->title."\"\n";
        $json .= "\t\"author\": \"".$this->author."\"\n";
        $json .= "\t\"posted\": ".time().",\n";
        $json .= "\t\"expiry\": 0,\n";
        $json .= "\t\"passwordHash\": null\n";

        $json .= "}";

        return $json;
    }

    public function saveDataToJson(string $data, string $saveName): bool {

        return file_put_contents(CONTENT_DIR.'/'.$saveName.'.json', $data);

    }

    public function saveText(string $saveName): bool {

        return file_put_contents(CONTENT_DIR.'/'.$saveName.'.md', $this->text);

    }

}