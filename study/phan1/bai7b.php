<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bai 7 Ket qua</title>
   <link rel="stylesheet" href="css/bai6b.css">
</head>

<body>
   <?php
   if (isset($_POST['submit'])) {
      $firstNumber = $_POST['firstNumber'];
      $secondNumber = $_POST['secondNumber'];
      $sign = $_POST['sign'];
      if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
         header("location: bai7.php");
      } else
         switch ($sign) {
            case "Cộng":
               $result = $firstNumber + $secondNumber;
               break;
            case "Trừ":
               $result = $firstNumber - $secondNumber;
               break;
            case "Nhân":
               $result = $firstNumber * $secondNumber;
               break;
            case "Chia":
               if ($secondNumber == 0) {
                  header("location: http://localhost/study/phan1/bai7.php");
                  break;
               } else $result = $firstNumber / $secondNumber;
               break;
         }
   } else {
   }

   ?>
   <form action="" method="post">
      <div class="header">Phép tính trên hai số</div>
      <table>
         <tr class="chonPhepTinhSection">
            <td class="headerChonPhepTinh">Chọn phép tính</td>
            <td><?php echo $sign ?></td>
         </tr>
         <tr>
            <td class="headerText">Số thứ nhất</td>
            <td><input type="text" name="firstNumber" value="<?php if (isset($_POST['firstNumber'])) echo $_POST['firstNumber'] ?>" readonly></td>
         </tr>
         <tr>
            <td class="headerText">Số thứ hai</td>
            <td><input type="text" name="secondNumber" value="<?php if (isset($_POST['secondNumber'])) echo $_POST['secondNumber'] ?>" readonly></td>
         </tr>
         <tr>
            <td class="headerText">Kết quả</td>
            <td><input type="text" name="result" value="<?php echo $result ?>" readonly></td>
         </tr>
         <tr>
            <td></td>
            <td><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></td>
         </tr>
      </table>
   </form>
</body>

</html>