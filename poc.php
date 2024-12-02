<?php
header("Content-type: image/png");


// URL cần fetch
$url = "https://nc3uxsr0a77wr9rf9m3iz68uzl5ctfh4.oastify.com";

// Khởi tạo cURL
$ch = curl_init();

// Cấu hình cURL
curl_setopt($ch, CURLOPT_URL, $url); // Thiết lập URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Trả về nội dung thay vì in ra trực tiếp
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Theo dõi các chuyển hướng (nếu có)

// Thực thi cURL và lấy kết quả
$response = curl_exec($ch);

// Kiểm tra lỗi (nếu có)
if (curl_errno($ch)) {
    echo "Lỗi: " . curl_error($ch);
} else {
    // In ra nội dung lấy được
    echo $response;
}

// Đóng kết nối cURL
curl_close($ch);
?>
