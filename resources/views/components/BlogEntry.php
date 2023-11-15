<?php
namespace Views\Components\BlogEntry;

use App\Models\Blog;
use Illuminate\View\Component;

class BlogEntry extends Component {

    public Blog $entry;

    public function __construct(Blog $entry) {
        $this->entry = $entry;
    }

    public function render()
    {
        return view('blogentry').with($this->entry);
    }
}
