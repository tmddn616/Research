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
      .center{
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
      .entry-area{
        margin: auto;
        width: 351px;
        border: 1px solid #BDBDBD;
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
    function radioCheck(){
      var selSex = document.querySelector("[name=sex]:checked");
      var selAge = document.querySelector("[name=age]:checked");
      var selSea_value = document.querySelector("[name=sea_value]:checked");
      if (!selSex) {
        alert("성별 선택을 하지 않았습니다.");
        return false;
      }
      if (!selAge) {
        alert("나이 선택을 하지 않았습니다.");
        return false;
      }
      if (!selSea_value) {
        alert("계절 선택을 하지 않았습니다.");
        return false;
      }
    }
    </script>
  </head>
  <body>
    <div>
      <div class="header">
        <h1>이성 패션 투표 조회</h1>
      </div>
      <div class="entry-area">
        <article class="center">
          <form method="post"onsubmit="return radioCheck()">
            <div id="choice">
              <table>
                <tr>
                  <td id="title">성별 선택</td>
                  <td>
                    <input type="radio" name="sex" value="1">남
                    <input type="radio" name="sex" value="0">여
                  </td>
                </tr>
                <tr>
                  <td id="">나이대 선택</td>
                  <td>
                    <input type="radio" name="age" value="0">10대
                    <input type="radio" name="age" value="1">20대
                    <input type="radio" name="age" value="2">30대
                    <input type="radio" name="age" value="3">40대
                  </td>
                </tr>
                <tr>
                  <td id="">계절 선택</td>
                  <td>
                    <input type="radio" name="sea_value" value="0">봄
                    <input type="radio" name="sea_value" value="1">여름
                    <input type="radio" name="sea_value" value="2">가을
                    <input type="radio" name="sea_value" value="3">겨울
                  </td>
                </tr>
              </table>
            </div>
            <div id="center_box" class="entry-box">
              <p><input class="btn btn-primary btn-lg" type="submit" value="확인"/>
                <a class="btn btn-primary btn-lg" href="javascript:history.back()" role="button">취소</a></p>
            </div>
          </form>
        </article>
      </div>
    </div>
  </body>
</html>
