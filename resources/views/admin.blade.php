<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>管理システム</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    div.serch {
      margin: 30px;
      border: 2px solid #000;
      padding: 20px;
    }

    .serch h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 30px;
    }

    form {
      width: 100%;
      align-content: center;
      font-size: 15px;

    }

    div.cust {
      display: flex;
      align-content: center;
      margin-bottom: 15px;
    }

    .cust dl {
      display: flex;
      width: 45%;
    }

    .cust dt {
      display: flex;
      width: 25%;
      height: 45px;
      margin: 10px auto 0;
      font-weight: 600;
    }

    .cust dd {
      display: flex;
      width: 80%;
    }

    .cust div {
      width: 100%;
    }

    .cust input {
      width: 40%;
      line-height: 25px;
      margin-bottom: 5px;
      border: 1px solid gray;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .cust .nm input {
      width: 90%;
    }

    p.ex {
      color: gray;
    }

    span.req {
      color: red;
    }

    input[type="radio"] {
      display: none;
      opacity: 0;
    }

    label.gender::before {
      display: inline-block;
      position: absolute;
      top: -5px;
      left: 0px;
      content: "";
      border-radius: 15px;
      border: 1px solid gray;
      width: 30px;
      height: 30px;
      background-color: transparent;
      box-sizing: border-box;
      vertical-align: middle;
    }

    label.gender::after {
      display: inline-block;
      position: absolute;
      top: 5px;
      left: 10px;
      content: " ";
      width: 10px;
      height: 10px;
      background-color: #000;
      box-sizing: border-box;
      vertical-align: middle;
      opacity: 0;
    }

    input[type=radio]:checked+label.gender::after {
      border-radius: 5px;
      opacity: 1;
      background-color: #000;
    }

    label.gender {
      position: relative;
      padding: 0 0 0 42px;
    }

    label.f,
    label.m {
      margin-left: 20px;
    }

    input[type="submit"] {
      width: 10%;
      height: 30px;
      background-color: #000;
      color: white;
      display: block;
      margin: 0 auto 0 auto;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    input.reset[type="submit"] {
      background-color: transparent;
      text-decoration: underline;
      color: #000;
      display: block;
      margin: 0 auto 0 auto;
      border: none;
      cursor: pointer;
    }

    .page {
      display: flex;
      justify-content: space-between;
      margin: 30px;
    }

    .result table {
      width: 85%;
      margin: 10px auto;
      text-align: left;
      line-height: 36px;
    }

    th {
      border-bottom: 1px solid #000;
    }

    table input[type="submit"] {
      width: 60%;
      background-color: #000;
      color: #fff;
      display: block;
      margin: 0 auto 0 auto;
      border: none;
      cursor: pointer;
    }

    .opinion_all {
      display: none;
    }

    .opinion_part:hover {
      display: none;
    }

    .opinion_part:hover+.opinion_all {
      display: block;
    }

    span.rounded-md a,
    span.rounded-md span span {
      display: inline-block;
      position: relative;
      padding: 2px;
      border: none;
      margin: auto 0;
      text-decoration: none;
    }

    span.rounded-md a::before,
    span.rounded-md span span::before {
      position: absolute;
      left: -1px;
      top: -1px;
      padding: 2px;
      display: block;
      border: 1px solid gray;
      width: 14px;
      height: 14px;
      content: "";
    }

    span.rounded-md a:hover {
      background-color: black;
      color: white;
    }

    p.text-sm,
    nav div.flex {
      /*paginateメソッドの〇〇〇*/
      display: none;
    }

    svg.w-5.h-5 {
      /*paginateメソッドの矢印の大きさ調整のために追加*/
      width: 10px;
      height: 10px;
    }
  </style>
</head>

<body>
  <div class="serch">
    <h1>管理システム</h1>
    <form action="/admin/serch" method="get">
      @csrf
      <div class="cust">
        <dl class="nm">
          <dt>お名前</dt>
          <dd>
            <div>
              <p>
                @if($inputs != [] && empty("page"))
                <input type="text" name="fullname" id="fullname" value={{$inputs['fullname']}}>
                @else
                <input type="text" name="fullname" id="fullname">
                @endif
              </p>
            </div>
          </dd>
        </dl>
        <dl class="gender">
          <dt>性別</dt>
          <dd>
            @if($inputs == [] )
            <input type="radio" name="gender" id="all" value="3" checked>
            <label for="all" class="gender">全て&nbsp</label>
            <input type="radio" name="gender" id="male" value="1">
            <label for="male" class="m gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @elseif(empty("page") && $inputs['gender'] == "3")
            <input type="radio" name="gender" id="all" value="3" checked>
            <label for="all" class="gender">全て&nbsp</label>
            <input type="radio" name="gender" id="male" value="1">
            <label for="male" class="m gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @elseif(empty("page") && $inputs['gender'] == "1")
            <input type="radio" name="gender" id="all" value="3">
            <label for="all" class="gender">全て&nbsp</label>
            <input type="radio" name="gender" id="male" value="1" checked>
            <label for="male" class="m gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @elseif(empty("page") && $inputs['gender'] == "2")
            <input type="radio" name="gender" id="all" value="3">
            <label for="all" class="gender">全て&nbsp</label>
            <input type="radio" name="gender" id="male" value="1">
            <label for="male" class="m gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2" checked>
            <label for="female" class="f gender">女性</label>
            @else
            <input type="radio" name="gender" id="all" value="3" checked>
            <label for="all" class="gender">全て&nbsp</label>
            <input type="radio" name="gender" id="male" value="1">
            <label for="male" class="m gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @endif
          </dd>
        </dl>
      </div>
      <div>
      </div>
      <div class="cust date">
        <dl>
          <dt>登録日</dt>
          <dd>
            <div>
              @if($inputs != [] && empty("page"))
              <input type="date" name="date_start" id="" value={{$inputs['date_start']}}>
              <span>～</span>
              <input type="date" name="date_end" id="" value={{$inputs['date_end']}}>
              @else
              <input type="date" name="date_start">
              <span>～</span>
              <input type="date" name="date_end">
              @endif
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>メールアドレス</dt>
          <dd>
            <div>
              @if($inputs != [] && empty("page"))
              <input type="email" name="email" id="" value={{$inputs['email']}}>
              @else
              <input type="email" name="email" id="">
              @endif
            </div>
          </dd>
        </dl>
      </div>
      <div><input type="submit" class="submit" value="検索"></div>
      <div><input class="reset" type="submit" class="submit" value="リセット" formaction="/admin/reset" formmethod="get"></div>
    </form>
  </div>


  <div class="result">
    <div class="page">
      <div>
        @if($results != [])
        <span>全</span>
        {{ $results->total() }}
        <span>件中　　</span>
        {{ $results->firstItem() }}
        <span>~</span>
        {{ $results->lastItem() }}
        <span>件</span>
      </div>
      <div class="page_no">
        {{ $results->appends(Request::only('gender'))->links() }}
      </div>
      @else
      @endif
    </div>

    <table>
      @if($results != [])
      <tr>
        <th width="10%">ID</th>
        <th width="10%">お名前</th>
        <th width="10%">性別</th>
        <th width="20%">メールアドレス</th>
        <th width="40%">ご意見</th>
        <th width="10%"></th>
      </tr>

      @foreach($results as $key=>$result)
      <tr>
        <td>{{$result['id']}}</td>
        <td>{{$result['fullname']}}</td>
        <td>{{$result['gender']}}</td>
        <td>{{$result['email']}}</td>

        <td class="opinion_part">{{Str::limit($result['opinion'],50,'ご意見は25文字以上の場合は...')}}</td>
        <td class="opinion_all">{{$result['opinion']}}</td>

        <td>
          <form action="/admin/delete" method="get">
            @csrf
            <input type="hidden" name="id" value={{$result['id']}}>
            <input type="submit" value="削除">
          </form>
        </td>
      </tr>
      @endforeach
      @else

      @endif
    </table>
  </div>
</body>

</script>