<?php
namespace App\Util;

class Modal {

    private string $title = "";
    private string $desc = "";

    private string $buttons = "";
    private string $inside_html = "";
    private bool $is_centered = false;
    private bool $is_large = false;
    private bool $remove_second_close = false;

    public static function generate(string $title, string $desc) :Modal {
        $obj = new Modal();
        $obj->title = $title;
        $obj->desc = $desc;
        return $obj;
    }

    public static function install_bootstrap() {
        echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>');
    }

    public static function install_jquery() {
        echo('<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>');
    }

    public function add_button(string $text, string $attribute = "", string $class = "btn-secondary") :Modal {
        $this->buttons .= "<button type='button' class='btn $class' $attribute>$text</button>";
        return $this;
    }

    public function add_close_button() :Modal {
        $this->add_button("Close", "data-bs-dismiss='modal'");
        return $this;
    }

    public function insert_button(string $html) :Modal {
        $this->buttons .= $html;
        return $this;
    }

    public function insert_html(string $html) :Modal {
        $this->inside_html .= $html;
        return $this;
    }

    public function set_centered() :Modal {
        $this->is_centered = true;
        return $this;
    }

    public function set_large() :Modal {
        $this->is_large = true;
        return $this;
    }

    public function remove_second_close_button() :Modal {
        $this->remove_second_close = true;
        return $this;
    }

    public function open_button(string $button_text, string $attribute = "", string $class = "btn-primary") :string {
        return "<button type='button' class='btn $class' data-toggle='modal' data-target='#kmodal-gen' $attribute onclick=\"$('#kmodal-gen').modal('show');\">
                    $button_text
                </button>";
    }

    public function render(bool $is_show, bool $get_html = false): string|static
    {
        $large = $this->is_large ? "modal-lg" : "";
        $center = $this->is_centered ? "modal-dialog-centered" : "";
        $title = $this->title;
        $inside = $this->desc . $this->inside_html;
        $second_close = $this->remove_second_close ? "" : "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
        $butons = $this->buttons;

        $show = $is_show ? "<script>window.addEventListener('load', function() { $('#kmodal-gen').modal('show'); });</script>" : '';

        $html = "<div class='modal fade' id='kmodal-gen' tabindex='-1' aria-labelledby='kmodal-label'>
                    <div class='modal-dialog $center $large'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='kmodal-label'>$title</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                $inside
                            </div>
                            <div class='modal-footer'>
                                $butons
                                $second_close
                            </div>
                        </div>
                    </div>
                </div>
                $show";

        if ($get_html) {
            return $html;
        } else {
            echo $html;
            return $this;
        }
    }

}

/*

 */
?>
