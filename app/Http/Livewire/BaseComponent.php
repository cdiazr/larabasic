<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BaseComponent extends Component
{
    public $appLang = "en";

    /**
     * @var bool
     */
    public $show = false;
    public $showConfirm = false;

    public $search = '';
    public $size = 10;

    protected $queryString = ['search'];

    public function updateAppLang($lang)
    {
        $this->appLang = $lang;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updateSize($size)
    {
        $this->size = $size;
    }

    public function render()
    {
        return view('livewire.base-component');
    }
}
