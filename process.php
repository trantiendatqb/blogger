  <?php
  include 'db_connect.php';
  // Hàm tra cứu thông tin theo ID, Tên, và Số điện thoại
  function searchInfoByIdAndNameAndPhone($id, $soDT, $soCCCD) {
    global $conn;
    $sql = "SELECT * FROM ThongTin WHERE id = $id AND so_dien_thoai = '$soDT' AND so_cccd = '$soCCCD'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo
        "<div class='result-container'>" .
        "<center><img src='http://trantiendat.ezyro.com/portal/images/logo.png' style='width:200px' id='printButton' title='trantiendat.png'><br>
<a style='color:#ec1f55; text-decoration: none;' href='mailto:trantiendatqvqb@gmail.com'>TẬP ĐOÀN CỔ PHẦN CÔNG NGHỆ TRAN TIEN DAT NETWORK<br>HỆ THỐNG TRA CỨU HỒ SƠ</a></center>
  <hr style='border: 1px solid #ec1f55;'>"
        .$row[""].
        "<b>ID / Mã hồ sơ:</b> " . $row["id"] .
        "<br>Họ và Tên: " . $row["ten"] .
        "<br>Ngày sinh: ".$row["ngay_sinh"].
        "<br>Số điện thoại: ".$row["so_dien_thoai"].
        "<br>Email: " .$row["thu_dien_tu"] .
        "<br>Địa chỉ: " .$row["dia_chi"] .
        "<br>Số CCCD: " .$row["so_cccd"].
        "<br>Cơ quan giải quyết: " .$row["cqgq"].
        "<br>Thời gian tiếp nhận hồ sơ: " . $row["ngay_tiep_nhan"] .
        "<br>Thời gian trả kết quả hồ sơ: ".$row["ngay_tra_kq"] .
        "<br>Kết quả: " . $row["ket_qua"] .
        "<hr>* Nếu thông tin, nội dung giải quyết không chính xác, xin vui lòng liên hệ về cơ quan tiếp nhận giải quyết là ".$row["cqgq"].". Hoặc liên hệ trực tiếp đến Trung tâm chăm sóc khách hàng trực thuộc Tập đoàn cổ phần công nghệ Tran Tien Dat Network<center>-----<br>Fax: 0232.3515.000<br>E-mail: cskh@trantiendat.com.vn<br>Web: www.trantiendat.com.vn/<br> Trân trọng cảm ơn!</center><br>
  <a onclick='history.back()' class='back-to-home'>
<svg xmlns='http://www.w3.org/2000/svg' height='16' width='16' viewBox='0 0 512 512'><path d='M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z'/></svg>&nbsp;Trở lại trang trước
  </a>"
        . $row[""].
        "</div>";
      }
    } else {
      echo
      "<div class='result-container'>" .
      "<center><img src='http://trantiendat.ezyro.com/portal/images/logo.png' style='width:200px' title='trantiendat.png'><br>
<a style='color:#ec1f55; text-decoration: none;' href='mailto:trantiendatqvqb@gmail.com'>TẬP ĐOÀN CỔ PHẦN CÔNG NGHỆ TRAN TIEN DAT NETWORK<br>HỆ THỐNG TRA CỨU HỒ SƠ</a></center>
  <hr style='border: 1px solid #ec1f55;'>"
      .$row[""].
      "Không tìm thấy kết quả tra cứu. Vui lòng nhập lại đúng các thông tin trên hệ thống.".$row[""].
      "<hr>*Hoặc liên hệ trực tiếp đến Trung tâm chăm sóc khách hàng trực thuộc Tập đoàn cổ phần công nghệ Tran Tien Dat Network<center>-----<br>Fax: 0232.3515.000<br>E-mail: cskh@trantiendat.com.vn<br>Web: www.trantiendat.com.vn/<br> Trân trọng cảm ơn! </center>
  <a onclick='history.back()' class='back-to-home'>
<svg xmlns='http://www.w3.org/2000/svg' height='16' width='16' viewBox='0 0 512 512'><path d='M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z'/></svg>&nbsp;Trở lại trang trước
  </a>"
      . $row[""].
      "</div>";
    }
  }

  // Kiểm tra xem có dữ liệu được gửi từ form hay không
  if (isset($_POST['search'])) {
    $idToSearch = $_POST['idToSearch'];
    $soDTToSearch = $_POST['soDTToSearch'];
    $soCCCDToSearch = $_POST['soCCCDToSearch'];
    searchInfoByIdAndNameAndPhone($idToSearch, $soDTToSearch, $soCCCDToSearch);
  }

  $conn->close();
  ?>
