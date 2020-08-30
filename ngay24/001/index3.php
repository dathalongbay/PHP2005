<?php

class Student {

    // thuộc tính
    public $name = "";
    public $age = "";
    public $address = "";
    // điểm TB
    public $avgScore = 0;
    // xếp loại
    public $result;

    // khai báo các phương thức

    public function setInfo($name, $age, $address) {
        // gán tham số cho các thuộc tính
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function calcScore($score) {

        $sumScore = 0;
        for($i = 0; $i < 8; $i++) {
            $sumScore += $score[$i];
        }

        $avgScore = $sumScore/8;
        $this->avgScore = $avgScore;

        if ($this->avgScore < 5) {
            $this->result = "trượt";
        } else if ($this->avgScore < 6.5) {
            $this->result = "trung bình";
        } else if ($this->avgScore < 7) {
            $this->result = "trung bình khá";
        } else if ($this->avgScore < 8) {
            $this->result = "khá";
        } else {
            $this->result = "giỏi";
        }

        return $this->result;
    }



}

// tạo ra 1 class sinh viên
// với các thuộc tính  : tên , tuổi , quê quán , điểm học kỳ
// thuộc tính điểm học kỳ là 1 mảng chứa 8 giá trị
// tương ứng với 8 kỳ học
// hãy viết 1 phương thức để tính điểm trung bình
// sau đó in ra xếp loại cho sinh viên đó

// cuối cùng tạo 2 đối tượng có tên là nam và hương
// khởi tạo từ class sinh viên này
// truyền các thông tin cho các thuộc tính của class
// và gọi phương thức tính điểm TB và in ra xếp loại

$nam = new Student();
$nam->setInfo("nguyễn văn nam", 22, "hà nội");
echo "<br> xếp loại nam : " . $nam->calcScore([8,9,4,5,6,9,7,9]);


// truy cap 1 thuộc tính bên ngoài class
echo "<br> điểm TB : " . $nam->avgScore;

echo "<pre>";
print_r($nam);
echo "</pre>";