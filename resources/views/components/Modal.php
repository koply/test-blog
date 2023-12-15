<?php
namespace Views\Components\Modal;

use Illuminate\View\Component;

class Modal extends Component {

    public string $title;
    public string $desc;
    public bool $show;

    public function __construct($title, $desc, $show) {
        $this->title = $title;
        $this->desc = $desc;
        $this->show = $show;
    }

    public function render()
    {
        return view('modal').with([$this->title, $this->desc, $this->show]);
    }
}
