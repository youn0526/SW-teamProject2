<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="icon" type="image/x-icon" href="img/account.png" />
    <title>회원목록</title>
    <h2>회원목록</h2>
    <style>
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
    </style>
  </head>
  <body>
  <table class="table table-hover table-dark">
      <thead>
        <tr>
        <th scope="col">전화번호</th>
          <th scope="col">내용</th>
          <th scope="col">참여날짜</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $jb_conn = mysqli_connect("localhost", "dbs0834", "dbs7834!", "dbs0834");
      $jb_sql = "SELECT * FROM servey";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'Number' ] . '</td><td>'. $jb_row[ 'Contents' ] . '</td><td>' . $jb_row[ 'Date' ] . '</td><td>';
      }
     ?>
  </body>
</html>