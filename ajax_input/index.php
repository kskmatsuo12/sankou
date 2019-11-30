<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Ajax:POSTデータ登録</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<div class="jumbotron">
  <fieldset>
    <form>
    <legend id="free">Ajax:フリーアンケート</legend>
    <label>名前：<input type="text" id="name"></label><br>
    <label>Email：<input type="text" id="email"></label><br>
    <label><textArea id="naiyou" rows="4" cols="40"></textArea></label><br>
    </form>
    <button id="btn">登録</button>
  </fieldset>
</div>

<!-- Main[End] -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        //登録ボタンをクリック
        $("#btn").on("click",function() {
            //Ajax送信開始
            $.ajax({
                type: "POST",     //POST or GET
                url: "insert.php", //どこに送信？
                data: {            //送信データ
                    name: $("#name").val(),
                    email: $("#email").val(),
                    naiyou: $("#naiyou").val() 
                },
                dataType: "html",         //戻ってくるデータの型を指定
                success: function(data) { //通信成功時にsuccess内が実行される！
                  if(data=="false"){
                    alert("エラー");
                  }else{
                    $("#name").val("");
                    $("#email").val("");
                    $("#naiyou").val("");
                    $("#free").html("登録成功しました");
                  }
                }
            });

        });
    </script>

</body>
</html>
