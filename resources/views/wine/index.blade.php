@extends('layouts.front')

@section('content')

<div class="main">
  <div class="container">
   <div class="card-contents">
    <h3 class="text-title">はじめに</h3>
    <p class="Introduction">「でもワインって調べてもよくわからないし、難しそう・・・」</p>
    <p class="Introduction">「お店で恥はかきたくない。けど、勉強はしたくない・・・」</p>
    <p class="Introduction">「どのワインを選んだらいいんだろう・・・」</p>
    <p class="bs"> 「 カッコよく「ワイン好き」って言いたい！ </p>
    <p>ワインを楽しめるようになると、なんだか「オトナ」な感じでカッコいいですよね！</p>
    <p>ただ、奥が深く「何から覚えたらいいの？」という方も多いんではないでしょうか。</p>
    <p>大丈夫です！　このサイトでは超初心者の方向けに、「実際に使える知識」だけを簡単にまとめています。</p>

    <p class="bs"> 最初は覚えなくても大丈夫！まずは「知る」ことが第一歩です。</p>
    <p class="bs">ざっくりと読んでいき、必要なものは都度インプットしていきましょう！！</p>

  <h3 class="text-title2">ざっくり基礎知識</h3>
    <p>◆もくじ</p>
  <ul class="table-of-contents">
    <li><a href="#mkj">赤ワインと白ワイン</a></li>
    <li><a href="#mkj_1">スパークリングワイン</a></li>
    <li><a href="#mkj_2">ワインの味のタイプ</a></li>
    <li><a href="#mkj_3">新世界・旧世界</a></li>
    <li><a href="#mkj_4">メジャーな品種（赤・白）</a></li>
  </ul>

  <h3 id="mkj">【　赤ワインと白ワイン　】</h3>
     <div class="step-1">
       <p>赤ワインと白ワインの違い。それはズバリ！「使用するブドウ」と「醸造法」です。</p>
       <p>赤ワインには黒ブドウ（赤黒い果皮のブドウ）、白ワインには白ブドウ（緑がかった果皮のブドウ）を使用します。</p>
       <p>赤ワインの醸造は潰したブドウの果実・果汁を皮と種も一緒に漬け込む「醸し」という工程があり、その結果、</p>
       <p>皮から出た色素で「赤色」となるのです。</p>
       <p>白ワインの場合は「醸し」の工程がなく、潰したブドウの果汁のみで発酵させるため透き通ったワインとなります。</p>
       <p>また黒ブドウでも、果皮を除いて造れば白ワインにもなります。</p>
       <p>つまり、白ブドウからは白ワインのみ造れますが、黒ブドウは赤・白両方のワインを造ることができるということですね！</p>
     </div>

  <h3 id="mkj_1">【　スパークリングワインとシャンパン　】</h3>
     <div class="step-1">
       <p>スパークリングワインは名前の通り発泡性のワインの総称です。では、よく聞く「シャンパン」との違いは</p>
       <p>なんなのでしょうか？</p>
       <p>スパークリングワインは、各国・各地域で決められた特定の基準（産地・使用するブドウ・醸造法など）を満たすと</p>
       <p>「これは特別なワインだ」と名乗ることができます。　つまり、ブランド化できるんですね。</p>
       <p>日本の牛で例えると、日本各地にはある規定で管理し育てられた「ブランド牛」がありますよね。（神戸牛、米沢牛など）</p>
       <p>聞き慣れない名前の牛も多くありますが、皆さんが思い浮かぶブランド牛は何でしょうか？</p>
       <p>「松坂牛」などは高級ブランド牛で超有名ですよね。「シャンパン」は言わば、これにあたります。</p>
       <p>「数あるブランドスパークリングワインの中でもトップに君臨するのがシャンパンなんだな〜」とだけ思って貰えばOKです！</p>
     </div>

  <h3 id="mkj_2">【ワインの味のタイプ】</h3>
     <div class="step-1">
       <p>赤ワインの味わいのタイプを表現するとき、一般的には「軽い〜重い」で表現されます。</p>
       <p>これをちょっとカッコよく言い換えると「〇〇ボディ」と言う言い方をします。</p>
       <p>「ボディ」とはそのままの意味で、重さを「身体」で例えているのです。</p>
       <p>軽い順に、「ライトボディ、ミディアムボディ、フルボディ」といった風に表現され、</p>
       <p>重いワインほど濃厚な味わいと言う意味で使われます。ざっくり覚えて起きましょう！</p>
     </div>

  <h3 id="mkj_3">【新世界(=ニューワールド)・旧世界】</h3>
     <div class="step-1">
       <p>ワイン自体の違いがわかったところで、次はワインを２つの「世界」でざっくり分けてみましょう！</p>
       <p>「世界」とは何かと言うと、単純に国を２つのグループに分けています。</p>
       <p>簡単に説明すると、</p>
       <p>◆旧世界・・・ワインの歴史の古い国(主にヨーロッパ)。紀元前からワインを生産し、古くからの技術でワインを生産。</p>
       <p>◆新世界・・・ワインの歴史の浅い国(約16世紀以降ワインの生産が有名になった国)。比較して安く、コスパがいい。</p>
       <p>ちなみに、「新世界」に比べ、「旧世界」は実際に言葉としてはあまり使わません。</p>
       <p>ワインの飲む人達の会話では、よく「ニューワールドのワインはコスパいいよね〜」なんて言ったりします。</p>
     </div>
  </div>
  <h3 id="mkj_4">【メジャーな品種（赤・白）】</h3>
  <div class="hinshu">
  <div class="hinshu-contents-red"><span class="title-tape">赤品種</span>
    <ul class="hinshu-red">
      <li>カベルネ・ソーヴィニョン</li>
      <li>ピノ・ノワール</li>
      <li>メルロー</li>
      <li>シラー(ズ)</li>
    </ul>
  </div>

  <div class="hinshu-contents-white"><span class="title-tape">白品種</span>
    <ul class="hinshu-white">
      <li>シャルドネ</li>
      <li>ソーヴィニヨン・ブラン</li>
      <li>ヴィオニエ</li>
      <li>カベルネ・フラン</li>
    </ul>
  </div>
  </div>
  </div>
  <p id="pageTop"><a href="#">トップへ戻る</a></p>

    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
