<?php

$students = [
    ["ho_ten" => "Nguyen Van An", "ngay_sinh" => "2003-01-15", "gioi_tinh" => "Nam", "diem_toan" => 8.5, "diem_van" => 7.0, "diem_anh" => 6.5],
    ["ho_ten" => "Tran Thi Bich", "ngay_sinh" => "2003-02-20", "gioi_tinh" => "Nu", "diem_toan" => 9.0, "diem_van" => 8.5, "diem_anh" => 8.0],
    ["ho_ten" => "Le Van Cuong", "ngay_sinh" => "2003-03-10", "gioi_tinh" => "Nam", "diem_toan" => 7.5, "diem_van" => 7.0, "diem_anh" => 6.0],
    ["ho_ten" => "Pham Thi Dung", "ngay_sinh" => "2003-04-05", "gioi_tinh" => "Nu", "diem_toan" => 8.0, "diem_van" => 9.0, "diem_anh" => 8.5],
    ["ho_ten" => "Hoang Van Em", "ngay_sinh" => "2003-05-12", "gioi_tinh" => "Nam", "diem_toan" => 6.5, "diem_van" => 6.0, "diem_anh" => 7.0],
    ["ho_ten" => "Vu Thi Phuong", "ngay_sinh" => "2003-06-18", "gioi_tinh" => "Nu", "diem_toan" => 9.5, "diem_van" => 8.0, "diem_anh" => 9.0],
    ["ho_ten" => "Do Van Giang", "ngay_sinh" => "2003-07-22", "gioi_tinh" => "Nam", "diem_toan" => 7.0, "diem_van" => 7.5, "diem_anh" => 6.5],
    ["ho_ten" => "Bui Thi Hoa", "ngay_sinh" => "2003-08-30", "gioi_tinh" => "Nu", "diem_toan" => 8.0, "diem_van" => 8.5, "diem_anh" => 7.5],
    ["ho_ten" => "Nguyen Van Khai", "ngay_sinh" => "2003-09-14", "gioi_tinh" => "Nam", "diem_toan" => 6.0, "diem_van" => 6.5, "diem_anh" => 6.0],
    ["ho_ten" => "Tran Thi Lan", "ngay_sinh" => "2003-10-25", "gioi_tinh" => "Nu", "diem_toan" => 9.0, "diem_van" => 9.5, "diem_anh" => 8.5],
    ["ho_ten" => "Le Van Minh", "ngay_sinh" => "2003-11-03", "gioi_tinh" => "Nam", "diem_toan" => 7.5, "diem_van" => 7.0, "diem_anh" => 7.5],
    ["ho_ten" => "Pham Thi Ngoc", "ngay_sinh" => "2003-12-08", "gioi_tinh" => "Nu", "diem_toan" => 8.5, "diem_van" => 8.0, "diem_anh" => 9.0],
    ["ho_ten" => "Hoang Van Phong", "ngay_sinh" => "2004-01-16", "gioi_tinh" => "Nam", "diem_toan" => 6.5, "diem_van" => 6.0, "diem_anh" => 6.5],
    ["ho_ten" => "Vu Thi Quynh", "ngay_sinh" => "2004-02-19", "gioi_tinh" => "Nu", "diem_toan" => 9.0, "diem_van" => 8.5, "diem_anh" => 8.0],
    ["ho_ten" => "Do Van Son", "ngay_sinh" => "2004-03-27", "gioi_tinh" => "Nam", "diem_toan" => 7.0, "diem_van" => 7.5, "diem_anh" => 7.0],
    ["ho_ten" => "Bui Thi Thao", "ngay_sinh" => "2004-04-11", "gioi_tinh" => "Nu", "diem_toan" => 8.0, "diem_van" => 8.0, "diem_anh" => 8.5],
    ["ho_ten" => "Nguyen Van Tuan", "ngay_sinh" => "2004-05-09", "gioi_tinh" => "Nam", "diem_toan" => 6.5, "diem_van" => 6.5, "diem_anh" => 6.0],
    ["ho_ten" => "Tran Thi Uyen", "ngay_sinh" => "2004-06-14", "gioi_tinh" => "Nu", "diem_toan" => 9.5, "diem_van" => 9.0, "diem_anh" => 8.5],
    ["ho_ten" => "Le Van Vinh", "ngay_sinh" => "2004-07-20", "gioi_tinh" => "Nam", "diem_toan" => 7.0, "diem_van" => 7.0, "diem_anh" => 7.5],
    ["ho_ten" => "Pham Thi Yen", "ngay_sinh" => "2004-08-28", "gioi_tinh" => "Nu", "diem_toan" => 8.5, "diem_van" => 8.5, "diem_anh" => 8.0],
];


foreach ($students as &$student) {
    $student['diem_tb'] = round(($student['diem_toan'] + $student['diem_van'] + $student['diem_anh']) / 3, 2);
}
unset($student);


function inDanhSachSapXepTen($students) {
    $sorted = $students;
    usort($sorted, function($a, $b) {
        return strcmp($a['ho_ten'], $b['ho_ten']);
    });
    echo "Danh sách sinh viên sắp xếp theo tên:\n";
    foreach ($sorted as $sv) {
        echo "Họ tên: {$sv['ho_ten']}, Ngày sinh: {$sv['ngay_sinh']}, Giới tính: {$sv['gioi_tinh']}, ĐTB: {$sv['diem_tb']}\n";
    }
}


function danhSachSinhVienNu($students) {
    $nu = array_filter($students, function($sv) {
        return $sv['gioi_tinh'] === 'Nu';
    });
    echo "Danh sách sinh viên nữ:\n";
    foreach ($nu as $sv) {
        echo "Họ tên: {$sv['ho_ten']}, Ngày sinh: {$sv['ngay_sinh']}, ĐTB: {$sv['diem_tb']}\n";
    }
    return $nu;
}


function danhSachDiemTBCao($students) {
    $cao = array_filter($students, function($sv) {
        return $sv['diem_tb'] >= 8.0;
    });
    echo "Danh sách sinh viên ĐTB >= 8.0:\n";
    foreach ($cao as $sv) {
        echo "Họ tên: {$sv['ho_ten']}, ĐTB: {$sv['diem_tb']}\n";
    }
    return $cao;
}


function sapXepTheoDiemTB(&$students) {
    usort($students, function($a, $b) {
        return $b['diem_tb'] <=> $a['diem_tb'];
    });
    echo "Danh sách sinh viên sắp xếp theo ĐTB:\n";
    foreach ($students as $sv) {
        echo "Họ tên: {$sv['ho_ten']}, ĐTB: {$sv['diem_tb']}\n";
    }
}


function timNuDiemTBCaoNhat($students) {
    $nu = array_filter($students, function($sv) {
        return $sv['gioi_tinh'] === 'Nu';
    });
    $max = array_reduce($nu, function($carry, $sv) {
        return (!$carry || $sv['diem_tb'] > $carry['diem_tb']) ? $sv : $carry;
    }, null);
    if ($max) {
        echo "Bạn nữ có ĐTB cao nhất: {$max['ho_ten']}, ĐTB: {$max['diem_tb']}\n";
    }
}


inDanhSachSapXepTen($students);
danhSachSinhVienNu($students);
danhSachDiemTBCao($students);
sapXepTheoDiemTB($students);
timNuDiemTBCaoNhat($students);
?>