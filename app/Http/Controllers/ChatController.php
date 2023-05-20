<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIChatService;

class ChatController extends Controller
{
    private $openAIChatService;

    public function __construct(OpenAIChatService $openAIChatService)
    {
        $this->openAIChatService = $openAIChatService;
    }

    public function index()
    {
        return view('chat');
    }

    public function getChatResponse(Request $request)
    {
        $messages = ['role' => $request->input('role'), 'content' => $request->input('messages')];
        $model = $request->input('model', 'davinci');
        $temperature = $request->input('temperature', 0.5);
        $maxTokens = $request->input('maxTokens', 60);
        $n = $request->input('n', 1);

        $response = $this->openAIChatService->getChatResponse($messages, $model, $temperature, $maxTokens, $n);

        return response()->json(['response' => $response]);
    }
}
