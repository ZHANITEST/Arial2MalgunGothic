<!DOCTYPE HTML/>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>'Arial'를 '맑은 고딕'으로</title>
		
		<style type="text/css">
			body{
				margin:0; color:#fff;
				font-size:12px;
				font-family: Arial,Malgun Gothic,NanumGothic;
				background-color:#222;
			}
			h1{
				font-size:44px;
				font-weight:bold;
				color:#f55;
			}
			div#container{
				width:800px;
				margin: auto;
			}
			div#footer{
				font-size:14px;
				text-align:center;
				color:#0ff;
			}
			div#whitebox{
				width:100%;
				height:auto;
				color:#000;
				background-color:#fff;
			}
			textarea#textbox{
				width:100%; height:200px;
			}
			input#input{
				width:30%;
			}
		</style>
	</head>
	
	<body>
		<div id="container">
			<?
			if( @(!$_POST["target"]) || (!$_POST["replace"]) || (!$_POST["body"]) )
			{
				echo('<div id="body">
				<h1>A2M</h1>
				<h2>본문 내용을 입력하고 Go! 단추를 누릅니다.</h2>
				<form action="index.php" method="POST">
					<b>Target:</b><input id="input" type="text" name="target" value="arial" />
					<b>Replace:</b><input id="input" type="text" name="replace" value="맑은 고딕,malgun gothic,나눔고딕,nanumgothic" />
					<input style="width:27%;" type="submit" value="Go!" />
					<textarea id="textbox" name="body"></textarea><br>
				</form>
			</div>');
			}
			else
			{
				$target = htmlspecialchars( $_POST["target"] );
				$replace = htmlspecialchars( $_POST["replace"] );
				$body = htmlspecialchars( $_POST["body"] );
				
				$result = str_replace( "\\", "", str_replace( $target, $replace, $body ) );
				echo('<h1>Result!</h1>
					<h2>본문 내용을 3번 클릭한 후 Ctrl+C로 복사하세요.</h2>
					<div id="whitebox">'.$result.'</div><br>
				');
			}
			?>
			<div id="footer">
				2014 XKY, GPLv3
			</div>
		</div>
	</body>
</html>
