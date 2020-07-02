<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Fashion_Vote_Inquiry</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style>
      .header {
        background-position:center 43px;
        background-repeat:no-repeat;
        text-align: center;
      }
      .img_center{
        background-position:center 43px;
        background-repeat:no-repeat;
        text-align: center;
        border: 1px solid #BDBDBD;
        margin: auto;
        width: 542px;
      }
      table {
        width: 350px;
      }
      tr, td {
        border: 1px solid #BDBDBD;
        text-align: left;
      }
    </style>
    <script>
    function count_ck(te){
      var chkbox = document.getElementsByName("img");
      var chkCnt = 0;
      for (var i = 0; i < chkbox.length; i++) {
        if (chkbox[i].checked){
          chkCnt++;
        }
      }
      if (chkCnt>2) {
        alert("2개를 초과하였습니다.");
        te.checked = false;
        checked -= 1;
      }
    }
    </script>
  </head>
  <body>
    <div>
      <div class="header">
        <h1>이성 패션 투표</h1>
      </div>
      <div class="img_center">
        <form method="post">
          <hgroup>
            <label for="check0"><img src="" border="0" width="130" height="180" /></label>
            <label for="check1"><img src="" border="0" width="130" height="180" /></label>
            <label for="check2"><img src="" border="0" width="130" height="180" /></label>
            <label for="check3"><img src="" border="0" width="130" height="180" /></label>
            <label>&ensp; <input id="check0" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름1 &emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label> <input id="check1" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름2 &emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label>&ensp; <input id="check2" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름3 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label> <input id="check3" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름4</label>
          </hgroup>
          <hgroup>
            <label for="check4"><img src="" border="0" width="130" height="180" /></label>
            <label for="check5"><img src="" border="0" width="130" height="180" /></label>
            <label for="check6"><img src="" border="0" width="130" height="180" /></label>
            <label for="check7"><img src="" border="0" width="130" height="180" /></label>
            <label>&ensp; <input id="check4" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름5 &emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label> <input id="check5" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름6 &emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label>&ensp; <input id="check6" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름7 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label> <input id="check7" Type="checkbox" name="img" onclick="count_ck(this);" value="0">이름8</label>
          </hgroup>
          <div id="center_box" class="entry-box">
            <p><input class="btn btn-primary btn-lg" type="submit" value="확인"/>
              <a class="btn btn-primary btn-lg" href="javascript:history.back()" role="button">취소</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
