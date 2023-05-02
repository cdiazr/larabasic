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
    public $maintenance;

    /**
     * Master key mode
     *
     * @var bool
     */
    public $master;

    /**
     * Target account to let access when master mode is actived
     *
     * @var string
     */
    public $target;

    /**
     * i18 mode
     *
     * @var bool
     */
    public $langs;

    /**
     * Navbar color
     *
     * @var string
     */
    public $navbar;

    /**
     * Sidebar color
     *
     * @var string
     */
    public $sidebar;

    /**
     * Footer fixed to the bottom
     *
     * @var bool
     */
    public $footer;

    public function mount()
    {
        $settings = $this->buildArraySettings();

        $this->maintenance = $settings['maintenance'] == '0'? false : true;
        $this->master = $settings['master'] == '0'? false : true;
        $this->target = is_null($settings['target'])? '' : $settings['target'];
        $this->languages = $settings['languages'] == '0'? false : true;
        $this->navbar = $settings['navbar_color'];
        $this->sidebar = $settings['sidebar_color'];
        $this->footer = $settings['footer_fix'] == '0'? false : true;
    }

    public function updatedMaintenance()
    {
        $value = $this->maintenance? 1 : 0;
        Setting::where('key', 'maintenance')->update(['value' => $value]);
    }

    public function updatedMaster()
    {
        $value = $this->master? 1 : 0;
        if($value == 0)
        {
            $this->target = null;
            $this->updatedTarget();
        }

        Setting::where('key', 'master')->update(['value' => $value]);
    }

    public function updatedTarget()
    {
        Setting::where('key', 'target')->update(['value' => strtolower($this->target)]);
    }

    public function updatedLanguages()
    {
        $value = $this->languages? 1 : 0;
        Setting::where('key', 'languages')->update(['value' => $value]);
    }

    public function updatedFooter()
    {
        $value = $this->footer? 1 : 0;
        Setting::where('key', 'footer_fix')->update(['value' => $value]);
    }

    public function updatedNavbar()
    {
        Setting::where('key', 'navbar_color')->update(['value' => strtolower($this->navbar)]);
    }

    public function updatedSidebar()
    {
        Setting::where('key', 'sidebar_color')->update(['value' => strtolower($this->sidebar)]);
    }

    public function render()
    {
        return view('livewire.settings');
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
