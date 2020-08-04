<!doctype html>
<head>
<meta charset="UTF-8">
<title>등록</title>
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
    
	<div id="board_write">
        <h1><a href="/">등록</a></h1>
            <div id="write_area">
                <form action="movie_write_ok.php" method="post" enctype="multipart/form-data">
					<div>
					제목: <input type="text" size="35" name="name" id="name" placeholder="제목" required>
					</div>
					<br>
					<div>
					내용 1: <input type="text" size="40" name="cont_1" id="cont" placeholder="내용1" required>
					</div>
					<br>
					<div>
					내용 2: <input type="text" size="35" name="cont_2" id="cont" placeholder="내용 2" required>
					</div>
					<br>
					<div>
					내용 3: <input type="textarea" size="35" name="cont_3" id="cont" placeholder="내용 3" required>
					</div>
					<br>
					<div>
					이미지: <input type="file" name="lo_image_link" value="1" />
					</div>
					<br>
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>