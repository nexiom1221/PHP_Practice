<?php
include "db.php"
 ?>
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
                 <th width="100">장르</th>
                 <th width="100">미리보기</th>


             </tr>
         </thead>



<?php

  $sql = mq("select * from movie_info order by m_idx desc limit 0,5");
    while($movie_info = $sql->fetch_array())
    {

      $title=$movie_info["m_name"];
      if(strlen($title)>30)
      {

        $title=str_replace($movie_info["title"],mb_substr($movie_info["title"],0,30,"utf-8")."...",$movie_info["title"]);
}

?>

<tbody>
  <tr>

    <td width="70"><?php echo $movie_info["m_idx"]; ?><a></td>
    <td width="150"><a href="movie_read.php?idx=<?php echo $movie_info["m_idx"];?>"><?php echo $title;?></a></td>
    <td width="120"><?php echo $movie_info['cont_1']?></td>
    <td width="120"><?php echo $movie_info['cont_2']?></td>
<td width="100"><img src="http://localhost/board/img/<?php echo $movie_info['m_lo_image_link']; ?>" width="100"/></td>

  </tr>
</tbody>
<?php } ?>
</table>
<div id="write_btn">
<a href="/page_admin/main_write_html.php"><button>글쓰기</button></a>
</div>
</div>
</body>
</html>
