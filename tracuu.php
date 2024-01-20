<style>
html, body {
      background: #fff;

      display: flex;
      justify-content: center;
      align-items: center;

    }
    .result-container {
      background-color: #fff;

      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

      width: auto;
      height: 700px;
      position: absolute;
      top: 0;

      left: 0;



    }

    form {
      background-color: #fff;

      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

      width: 300px;
    }

    h2 {
      margin-bottom: 20px;
    }

    input {
      
      width: calc(100% - 20px);
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      
      width: 100%;
      padding: 8px 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      
      background-color: #45a049;
    }
    .back-to-home {
      text-decoration: none;
      color: #333;
      display: flex;
      align-items: center;
      margin: 20px;
    }
:root {
      --primary-color: #ec1f55;
      --text-color: #333;
    }

    footer {
      text-align: center;
      margin-bottom: 10px;
    }

    footer h4 {
      background-color: transparent;
      padding: 5px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 290px;
      color: var(--primary-color);
      font-size: 17px;
      font-weight: bold;
3      
      text-align: center;
    }
  </style>
</head>
<body>
  <form method="post" action="http://trantiendat.ezyro.com/portal/tracuu/hoso/process_index.php"  style="text-align: center;">
    ID / Mã hồ sơ *: <input name="idToSearch" required="" type="text" /><br />
    Số điện thoại *: <input name="soDTToSearch" required="" type="text" />
    <br />
    Số CCCD *: <input name="soCCCDToSearch" required="" type="text" />
    <br /><br />
    <input name="search" type="submit" value="Tra cứu" />
    <footer>
      <h4>
        <img src="http://trantiendat.ezyro.com/portal/images/logo.png" style="width: 130px;" title="trantiendat.png" />
        <br /><hr style="border: 1px solid #ec1f55;" />
        © Bản quyền thuộc bởi <a href="mailto:trantiendatqvqb@gmail.com" style="color: #ec1f55; text-decoration: none;">Trần Tiến Đạt</a><br />Tập đoàn cổ phần công nghệ Trần Tiến Đạt Network.<br />-----<br />Điện thoại: 02323.515.000<br />Email: dattt@trantiendat.com.vn<br />Trụ sở: Văn phòng số 100, tầng 1, Tòa nhà TTDN Town, số 275 đường Âu Cơ, phường Hòa Khánh Bắc, quận Liên Chiểu, thành phố Đà Nẵng.
      </h4>
    </footer>

  </form></body></html>
