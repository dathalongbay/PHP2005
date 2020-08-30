<?php
class TagLink {

    public $href = "";
    public $target = "";
    public $title = "";
    public $text = "";


    public function __construct($href, $text, $target = "", $title = "")
    {
        // gán các tham số truyền vào cho các thuộc tính của đối tượng
        $this->href = $href;
        $this->text = $text;
        $this->target = $target;
        $this->title = $title;
    }

    // tạo 1 phương thức
    public function displayHTML() {

        $a = "<a href=\"$this->href\" target=\"$this->target\" title=\"$this->title\">$this->text</a>";

        return $a;

    }

}

// <a href="" target="" title="">text</a>

// tạo ra 1 class hiển thị thẻ a trong html
// sử dụng các thuộc tính cho class này
// và tạo 1 phương thức để hiển thị

$kenh14 = new TagLink("https://kenh14.vn/", "kenh 14", "_blank", "kenh 14");
echo $kenh14->displayHTML();