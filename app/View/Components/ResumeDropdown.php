<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResumeDropdown extends Component
{
    /**
     * Create a new component instance.
     * string 
     * @return void
     */
    public $data;
    public $title;
    public $name;
    
    public function __construct($data, $title, $name)
    {
        $this->data = $data;
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.resume-dropdown', ['data'=>$this->data, 'title'=>$this->title , 'name'=>$this->name]);
        // return view('components.resume-dropdown');
    }
}
