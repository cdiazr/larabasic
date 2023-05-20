<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use function Termwind\ValueObjects\lowercase;

class Settings extends Component
{
    /**
     * Maintenance mode
     *
     * @var bool
     */
    public bool $maintenance;

    /**
     * Master key mode
     *
     * @var bool
     */
    public bool $master;

    /**
     * Target account to let access when master mode is actived
     *
     * @var string
     */
    public string $target;

    /**
     * i18 mode
     *
     * @var bool
     */
    public bool $langs;

    /**
     * Navbar color
     *
     * @var string
     */
    public string $navbar;

    /**
     * Sidebar color
     *
     * @var string
     */
    public string $sidebar;

    /**
     * Footer fixed to the bottom
     *
     * @var bool
     */
    public bool $footer;

    /**
     * Enable/disable chatbot
     *
     * @var bool
     */
    public bool $chatbot;

    public function mount()
    {
        $settings = $this->buildArraySettings();

        $this->chatbot = $settings['chatbot'] == '0'? false : true;
        $this->maintenance = $settings['maintenance'] == '0'? false : true;
        $this->master = $settings['master'] == '0'? false : true;
        $this->target = is_null($settings['target'])? '' : $settings['target'];
        $this->languages = $settings['languages'] == '0'? false : true;
        $this->navbar = $settings['navbar_color'];
        $this->sidebar = $settings['sidebar_color'];
        $this->footer = $settings['footer_fix'] == '0'? false : true;
    }

    public function updatedChatbot()
    {
        $value = $this->chatbot? 1 : 0;
        $this->updatingValue('chatbot', $value);
    }

    public function updatedMaintenance()
    {
        $value = $this->maintenance? 1 : 0;
        $this->updatingValue('maintenance', $value);
    }

    public function updatedMaster()
    {
        $value = $this->master? 1 : 0;
        if($value == 0)
        {
            $this->target = null;
            $this->updatedTarget();
        }

        $this->updatingValue('master', $value);
    }

    public function updatedTarget()
    {
        $this->updatingValue('target', strtolower($this->target));
    }

    public function updatedLanguages()
    {
        $value = $this->languages? 1 : 0;
        $this->updatingValue('languages', $value);
    }

    public function updatedFooter()
    {
        $value = $this->footer? 1 : 0;
        $this->updatingValue('footer_fix', $value);
    }

    public function updatedNavbar()
    {
        $this->updatingValue('navbar_color', strtolower($this->navbar));
    }

    public function updatedSidebar()
    {
        $this->updatingValue('sidebar_color', strtolower($this->sidebar));
    }

    public function render()
    {
        return view('livewire.settings');
    }

    private function updatingValue($key, $value)
    {
        Setting::where('key', $key)->update(['value' => $value]);
    }

    private function buildArraySettings()
    {
        $array = [];
        $settings = Setting::all();
        foreach ($settings as $row)
            $array[$row['key']] = $row['value'];

        return $array;
    }
}
