<?php

namespace App\Services;

class OpenAIChatService
{
    public function getChatResponse($messages, $model, $temperature = 0.5, $maxTokens = null, $n = 1)
    {
        $headers = array(
            "Authorization: Bearer " . env('OPENAI_APIKEY'),
            "OpenAI-Organization: " . env('OPENAI_ORGID'),
            "Content-Type: application/json"
        );

        // Prepare messages
        $preparedMessages[] = ['role' => $messages['role'], 'content' => $messages['content']];


        // Define data
        $data = [
            "model" => $model,
            "messages" => $preparedMessages,
            "max_tokens" => $maxTokens,
            "temperature" => $temperature,
            "n" => $n
        ];

        // Init curl
        $curl = curl_init(env('OPENAI_URL'));

        $options = array(
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => 1
        );

        // Set curl options
        curl_setopt_array($curl, $options);

        $result = curl_exec($curl);

        if (curl_errno($curl)) {
            return 'Error:' . curl_error($curl);
        } else {
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($httpCode == 200) {
                return json_decode($result, true);
            } else {
                return 'Error: '.$httpCode;
            }
        }

        curl_close($curl);
    }
}
