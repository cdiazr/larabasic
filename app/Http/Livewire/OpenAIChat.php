<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OpenAIChat extends Component
{
    /**
     * @var
     */
    public string $model;

    public float $temperature;

    public integer $maxTokens;

    public integer $n;


    public function render()
    {
        return view('livewire.open-a-i-chat');
    }
}
