<?php

namespace namePlayer\TextyShare;

class TemplateEngine
{

    public function render(string $name, array $arguments = [])
    {
        ob_start();

        extract($arguments);

        include(TEMPLATE_DIR . '/' . $name . '.php');

        return ob_get_clean();
    }

    public function outputAlerts(array $messages): string
    {
        $output = '';
        foreach ($messages as $alert) {

            $output .= $this->render('alert', ['type' => $alert['type'], 'message' => $alert['message']]);

        }

        return $output;
    }


}