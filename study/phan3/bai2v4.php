<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2.4</title>
    <link rel="stylesheet" href="css/bai2v4.css">
</head>

<body>
    <div class="header">THÔNG TIN SỮA</div>
    <table border="1">
        <th>Số TT</th>
        <th>Tên sữa</th>
        <th>Hãng sữa</th>
        <th>Loại sữa</th>
        <th>Trọng lượng</th>
        <th>Đơn giá</th>
        <?php
        require("./configBai2.php");
        $conn = new mysqli($hostname, $username, $password, $dbname);
        if ($conn->connect_error) die("Connection Error" . $conn->connect_error);
        else {
            if (!isset($_GET['page'])) {
                $_GET['page'] = 1;
            }
            $rowsPerPage = 2; //số lượng cột data trong page
            $offset = ($_GET['page'] - 1) * $rowsPerPage; //cách ra bao nhiêu cột data đã đi qua
            $query = "SELECT * FROM hang_sua, loai_sua, sua LIMIT $offset, $rowsPerPage";
            $result = $conn->query($query);
            $numRows = mysqli_num_rows($result);
            $maxPage = ceil($numRows / $rowsPerPage);
            if (!$result) echo "Câu truy vấn bị sai";
            else {
                if ($result->num_rows != 0) {
                    $switch = true;
                    $count = 1;
                    while ($row = $result->fetch_array()) {
                        if ($switch == true) {
                            echo "<tr class='trow'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $row['Ten_sua'] . "</td>";
                            echo "<td>" . $row['Ten_hang_sua'] . "</td>";
                            echo "<td>" . $row['Ten_loai'] . "</td>";
                            echo "<td>" . $row['Trong_luong'] . "</td>";
                            echo "<td>" . $row['Don_gia'] . "</td>";
                            echo "</tr>";
                            $switch = false;
                            $count++;
                        } else {
                            echo "<tr style='background-color: rgb(255, 220, 195)'>";
                            echo "<td>" . $count . "</td>";
                            echo "<td>" . $row['Ten_sua'] . "</td>";
                            echo "<td>" . $row['Ten_hang_sua'] . "</td>";
                            echo "<td>" . $row['Ten_loai'] . "</td>";
                            echo "<td>" . $row['Trong_luong'] . "</td>";
                            echo "<td>" . $row['Don_gia'] . "</td>";
                            echo "</tr>";
                            $switch = true;
                            $count++;
                        }
                    }
                } else echo "Bảng không có dữ liệu";
            }
        }
        ?>
    </table>
    <div class="footer">
    <?php
        $re = mysqli_query($conn, 'select Ma_sua from sua');
        $numRows = mysqli_num_rows($re);
        $maxPage = floor($numRows / $rowsPerPage) + 1;
        if ($_GET['page'] > 1) {
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - ($_GET['page'] -1) ) . "><<</a> "; //Về đầu trang
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . "><</a> "; //gắn thêm nút Back
        }
        for ($i = 1; $i <= $maxPage; $i++) {
            if ($i == $_GET['page']) {
                echo '<b>' . $i . '</b> '; //trang hiện tại sẽ được bôi đậm
            } else echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "> " . $i . " </a> ";
        }
        if ($_GET['page'] < $maxPage) {
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">></a>";  //gắn thêm nút Next
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + ($maxPage - $_GET['page'])) . ">>></a>";  // Về cuối trang
        }
        $conn->close();
    ?>
    </div>
</body>

</html>