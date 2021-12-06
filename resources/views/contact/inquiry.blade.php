<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>お問い合わせ</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- post_code_js -->

  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

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

    .cust input {
      width: 95%;
      line-height: 25px;
      margin-bottom: 5px;
      border: 1px solid gray;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .cust .nm input {
      width: 90%;
    }

    .cust .post span {
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

    label.f {
      margin-left: 20px;
      position: relative;
    }

    textarea {
      resize: none;
      width: 95%;
      box-sizing: border-box;
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
  </style>
</head>

<body>
  <div class="contact">
    <h1>お問い合わせ</h1>
    <form action="/contact/confirm" method="post" class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      @csrf
      <div class="cust">
        <dl class="nm">
          <dt>お名前<span class="req">&nbsp;※</span></dt>
          <dd>
            <div>
              <p>
                @if($inputs != [])
                <input type="text" name="familynm" id="familynm" value={{$inputs['familynm']}} required onblur="this.reportValidity()">
                @else
                <input type="text" name="familynm" id="familynm" required onblur="this.reportValidity()">
                @endif
              </p>
              <p class="ex">例）山田</p>
            </div>
            <div>
              <p>
                @if($inputs != [])
                <input type="text" name="firstnm" id="firstnm" value={{$inputs['firstnm']}} required onblur="this.reportValidity()">
                @else
                <input type="text" name="firstnm" id="firstnm" required onblur="this.reportValidity()">
                @endif
              <p class="ex">例）太郎</p>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl class="gender">
          <dt>性別<span class="req">&nbsp;※</span></dt>
          <dd>
            @if($inputs == [])
            <input type="radio" name="gender" id="male" value="1" checked>
            <label for="male" class="gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @elseif($inputs['gender'] == "1")
            <input type="radio" name="gender" id="male" value="1" checked>
            <label for="male" class="gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2">
            <label for="female" class="f gender">女性</label>
            @elseif($inputs['gender'] == "2")
            <input type="radio" name="gender" id="male" value="1">
            <label for="male" class="gender">男性&nbsp</label>
            <input type="radio" name="gender" id="female" value="2" checked>
            <label for="female" class="f gender">女性</label>
            @endif
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>メールアドレス<span class="req">&nbsp;※</span></dt>
          <dd>
            <div>
              @if($inputs != [])
              <input type="email" name="email" id="email" required value={{$inputs['email']}} onblur="this.reportValidity()">
              @else
              <input type="email" name="email" id="email" required onblur="this.reportValidity()">
              @endif
              <p class="ex">例）test@example.com</p>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>郵便番号<span class="req">&nbsp;※</span></dt>
          <dd>
            <div>
              <div class="post">
                <span>〒</span>
                @if($inputs != [])
                <input type="text" name="postcode" class="p-postal-code" required pattern="\d{3}-\d{4}" value={{$inputs['postcode']}} id="postcode" oninput="value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace('ー','-').replace('―','-');" onblur="this.reportValidity()">
                @else
                <input type="text" name="postcode" class="p-postal-code" required pattern="\d{3}-\d{4}" oninput="value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace('ー','-').replace('―','-');" onblur="this.reportValidity()">
                @endif
              </div>
              <p class=" ex">例）〒123-4567</p>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>住所<span class="req">&nbsp;※</span></dt>
          <dd>
            <div>
              @if($inputs != [])
              <input type="text" name="address" id="address" class="p-region p-locality p-street-address p-extended-address" required value={{$inputs['address']}} onblur="this.reportValidity()">
              @else
              <input type="text" name="address" class="p-region p-locality p-street-address p-extended-address" required onblur="this.reportValidity()">
              @endif
              <p class="ex">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>建物名<span class="req"></dt>
          <dd>
            <div>
              @if($inputs != [])
              <input type="text" name="building_name" id="building_name">
              @else
              <input type="text" name="building_name" id="building_name">
              @endif
              <p class="ex">例）千駄ヶ谷マンション101
              </p>
            </div>
          </dd>
        </dl>
      </div>
      <div class="cust">
        <dl>
          <dt>ご意見<span class="req">&nbsp;※</span></dt>
          <dd>
            <div>
              @if($inputs != [])
              <textarea name="opinion" id="opinion" cols="75" rows="10" maxlength="120" required onblur="this.reportValidity()">{{$inputs['opinion']}}</textarea>
              @else
              <textarea name="opinion" id="opinion" cols="75" rows="7" maxlength="120" required onblur="this.reportValidity()"></textarea>
              @endif

            </div>
          </dd>
        </dl>
      </div>
      <div><input type="submit" class="submit" value="確認"></div>
    </form>
  </div>
</body>