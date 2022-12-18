<?php

namespace App\View\Components\Viho;

use Illuminate\View\Component;

class LinkButton extends Component
{
    public $href;

    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href=null,$icon=null)
    {
        if(is_array($href)){
            $this->href=route($href[0],$href[1]);
        }
        elseif(is_string($href) && strpos($href,'http')===0){
            $this->href=$href;
        }elseif(is_string($href) && $href=='#'){
            $this->href=$href;
        }else{
            $this->href=route($href[0]);
        }

        $this->icon=$icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.viho.link-button');
    }
}
