<!-- File: search.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        /* Thêm các kiểu CSS cho trang kết quả tìm kiếm nếu cần */
    </style>
</head>
<body>

    <h1>Search Results</h1>

    <?php
    // Kiểm tra xem có dữ liệu tìm kiếm được gửi từ biểu mẫu không
    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $search_query = $_GET['q'];

        // Thực hiện xử lý tìm kiếm ở đây (ví dụ: tìm kiếm trong cơ sở dữ liệu)

        // Hiển thị kết quả
        echo "<p>Search query: " . htmlspecialchars($search_query) . "</p>";
        echo "<p>Search results go here.</p>";
    } else {
        // Hiển thị thông báo nếu không có dữ liệu tìm kiếm
        echo "<p>No search query provided.</p>";
    }
    ?>

</body>
</html>
