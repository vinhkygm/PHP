<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="css/bai2v8.css">
</head>
<body>
    <?php
        require("./configBai2.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        if(!isset($_GET['page'])){
            $_GET['page'] = 1;
        }
        $rowPerPage = 2;
        // vị trí của mẩu tin đầu tiên trên mỗi trang
        $offset = ($_GET['page'] - 1) * $rowPerPage;

        $query = "SELECT * FROM sua LIMIT $offset, $rowPerPage";
        $result = $conn->query($query);
        if(!$result) echo 'Cau truy van bi sai';

        // // tổng số kết quả trả về
        // $numRows = mysqli_num_rows($result);
        // // tổng số trang hiển thị
        // $maxPage = ceil($numRows / $rowPerPage);

    ?>
    <div class="header">THÔNG TIN CHI TIẾT CÁC LOẠI SỮA</div>
    <table align="center" cellspacing="0" width="600px">
        <?php
            if($result->num_rows != 0) {
                while($row = $result->fetch_array()) { ?>
                    <?php $hinh = $row['Hinh']; ?>
                    <tr>
                        <th colspan="2">
                            <h2 class="text-center"><?= $row['Ten_sua']; ?></h2>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/Hinh_sua/<?= $hinh ?>" alt="">
                        </td>
                        <td>
                            <p><b>Thành phần dinh dưỡng:</b></p>
                            <p><?= $row['TP_Dinh_Duong'] ?></p>
                            <p><b>Lợi ích:</b></p>
                            <p><?= $row['Loi_ich'] ?></p>
                            <span class="text-right"> 
                                <b>Trọng lương: </b><?= $row['Trong_luong'].' gr'; ?> -
                                <b>Đơn giá: </b><?= $row['Don_gia'].' VNĐ'; ?>
                            </span>
                        </td>
                    </tr>
                <?php } 
            }
        ?> 
    </table>
    <center>
        <?php 
            $re = $conn->query('SELECT * FROM sua');
            $numRows = mysqli_num_rows($re);
            $maxPage = ceil($numRows/$rowPerPage) + 1;
            if ($_GET['page'] > 1){
                echo '<a href="bai2v8.php?page='.($_GET['page'] - 1).'"> << </a>'; 
            }
            for ($i=1 ; $i<=$maxPage ; $i++)
            {
                if($i == $_GET['page'])
                {
                    echo '<b> <u>'.$i.'</u> </b>'; 
                }
                else echo '<a href="bai2v8.php?page='.$i.'"> '.$i.' </a>';
            }
            if ($_GET['page'] < $maxPage) {
                echo '<a href="bai2v8.php?page='.($_GET['page'] + 1).'"> >> </a>';
            }
            $conn->close();
        ?>
    </center>
</body>
</html>