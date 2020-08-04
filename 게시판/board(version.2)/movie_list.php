<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>영화 목록</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<div>
		<nav id="topMenu"	>
			<ul>
				<li><a class="menuLink" href="/page/main.php">Logo</a></li>
				<li><a class="menuLink" href="/member/logout.php">북마크</a></li>
				<li><a class="menuLink" href="/member/mypage.php">마이페이지</a></li>
				<li><a class="menuLink" href="/member/logout.php">로그아웃</a></li>
			</ul>
		</nav>
	</div>

<div id="movie_info_area"> 
  <h1>영화 목록</h1>
  <h4>관리자가 영화를 등록하는 및 관리하는 페이지 입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="150">영화 제목</th>
                <th width="120">주연</th>
                <th width="100">개봉 날짜</th>
                <th width="100">대표 OST</th>
				<th width="100">관람가</th>
				<th width="100">수상 내역</th>
				<th width="100">장르</th>
				<th width="500">줄거리</th>
				<th width="100">상영 시간</th>
				<th width="100">다운로드 링크</th>
				<th width="100">제작 국가</th>
				<th width="100">감독</th>
				<th width="100">포스터</th>
				<th width="100">기타</th>
				
            </tr>
        </thead>
        <?php
        // movie_info테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from movie_info order by m_idx desc limit 0,5"); 
            while($movie_info = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$movie_info["m_name"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($movie_info["title"],mb_substr($movie_info["title"],0,30,"utf-8")."...",$movie_info["title"]);
			  }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $movie_info["m_idx"]; ?><a></td>
          <td width="150"><a href="/page_admin/movie_read.php?idx=<?php echo $movie_info["m_idx"];?>"><?php echo $title;?></a></td>
          <td width="120"><?php echo $movie_info['m_lead_role']?></td>
          <td width="100"><?php echo $movie_info['m_Opening_date']?></td>
          <td width="100"><?php echo $movie_info['m_OST']; ?></td>
		  <td width="100"><?php echo $movie_info['m_r_age']; ?></td>
		  <td width="100"><?php echo $movie_info['m_awards']; ?></td>
		  <td width="100"><?php echo $movie_info['m_genre']; ?></td>
		  <td width="500"><?php echo $movie_info['m_summay']; ?></td>
		  <td width="100"><?php echo $movie_info['m_r_time']; ?></td>
		  <td width="100"><?php echo $movie_info['m_link']; ?></td>
		  <td width="100"><?php echo $movie_info['m_country']; ?></td>
		  <td width="100"><?php echo $movie_info['m_director']; ?></td>
		  <td width="100"><img src="http://localhost/img/poster/<?php echo $movie_info['m_lo_image_link']; ?>" width="100"/></td>		  
		  <td width="100"><?php echo $movie_info['etc']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="/page_admin/movie_write.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>