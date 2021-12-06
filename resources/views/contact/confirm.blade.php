<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>確認画面</title>

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

    div.contact {
      margin: 10px;
    }

    .contact h1 {
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
      justify-content: center;
      align-content: center;
      margin-bottom: 15px;
    }

    .cust dl {
      display: flex;
      width: 75%;
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

    .cust div.post {
      display: flex;
      width: 95%;
      margin: auto 0 auto 0;
      padding: auto 0 auto 0;
    }

    .cust .post p {
      width: 5%;
      display: inline-block;
      margin: auto 0;
    }

    .cust .post input {
      width: 95%;
      margin: auto 0 auto auto;
      display: inline-block;
    }

    p.ex {
      color: #000;
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

    input.revise[type="submit"] {
      background-color: transparent;
      text-decoration: underline;
      color: #000;
      display: block;
      margin: 0 auto 0 auto;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="contact">
    <h1>内容確認</h1>
    <form action="/contact/send" method="post">
      @csrf
      <div class="cust">
        <dl class="nm">
          <dt>お名前</dt>
          <dd>
            <div>
              <p class="ex">{{$inputs['fullname']}}</p>
              <input type="hidden" name="fullname" id="fullname" value={{$inputs['fullname']}}>
              <input type="hidden" name="familynm" id="familynm" value={{$inputs['familynm']}}>
              <input type="hidden" name="firstnm" id="firstnm" value={{$inputs['firstnm']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl class="gender">
          <dt>性別</dt>
          <dd>
            <p class="ex">
              @if($inputs['gender']=="1")
              {{'男性'}}
              @elseif($inputs['gender']=="2")
              {{'女性'}}
              @endif
            </p>
            <input type="hidden" name="gender" id="gender" value={{$inputs['gender']}}>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>メールアドレス</dt>
          <dd>
            <div>
              <p class="ex">{{$inputs['email']}}</p>
              <input type="hidden" name="email" id="email" value={{$inputs['email']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>郵便番号</dt>
          <dd>
            <div class="post">
              <p>{{$inputs['postcode']}}</p>
              <input type="hidden" name="postcode" id="postcode" value={{$inputs['postcode']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>住所</dt>
          <dd>
            <div>
              <p class="ex">{{$inputs['address']}}</p>
              <input type="hidden" name="address" id="address" value={{$inputs['address']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>建物名<span class="req"></dt>
          <dd>
            <div>
              <p class="ex">{{$inputs['building_name']}}</p>
              <input type="hidden" name="building_name" id="building_name" value={{$inputs['building_name']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>ご意見</dt>
          <dd>
            <div>
              <p>{{$inputs['opinion']}}</p>
              <input type="hidden" name="opinion" id="opinion" value={{$inputs['opinion']}}>
            </div>
          </dd>
        </dl>
      </div>
      <div><input type="submit" class="submit" value="送信"></div>
      <div><input class="revise" type="submit" class="submit" value="修正する" formaction="/contact/revise" formmethod="POST"></div>
    </form>
  </div>
</body>