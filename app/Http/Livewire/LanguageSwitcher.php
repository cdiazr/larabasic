<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public function switchLanguage($locale)
    {
        if (in_array($locale, ['en', 'es'])) {
            app()->setLocale($locale);
            session()->put('locale', $locale);

            // Emite el evento 'languageChanged'
            $this->emit('languageChanged');
        }
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
