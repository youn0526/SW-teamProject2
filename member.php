<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link
      href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="icon" type="image/x-icon" href="./assets/icon/account.ico" />
    <title>회원목록</title>
    <h2 style="font-family: 'Single Day', cursive">회원목록</h2>
    <style>
      h2 {
        margin-top: 1rem;
  margin-bottom: 1rem;
  font-weight: bold;
  color: #5aa1e7;
  font-size: 2.7rem;
      }
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
        text-align: center;
        position: relative;
        transform: translate(0%, 50%);
      }
      table {
        width: 50%;
        position: absolute;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
      th {
        font-size: 1.3rem;
      }
    </style>
  </head>
  <body>
  <table class="table table-hover">
      <thead>
        <tr class="table-info">
          <th scope="col" style="font-family: 'Single Day', cursive">이름</th>
          <th scope="col" style="font-family: 'Single Day', cursive">이메일</th>
          <th scope="col" style="font-family: 'Single Day', cursive">아이디</th>
          <th scope="col" style="font-family: 'Single Day', cursive">가입날짜</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect("localhost", "dbs0834", "dbs7834!", "dbs0834");
          $jb_sql = "SELECT * FROM member";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'Name' ] . '</td><td>'. $jb_row[ 'Email' ] . '</td><td>' . $jb_row[ 'ID' ] . '</td><td>' . $jb_row[ 'Date' ] . '</td><td>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>