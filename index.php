<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

<title>YesNo診断</title>
<meta name="outbrain-crawl" content="no-rec">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/style.css?" type="text/css">
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>

<header id="commonHeader">
<section id="flowsHead" class="wf-mplus1p">あなたにあった〇〇が1分でわかる</section>
<section id="flows" class="wf-mplus1p">〇〇診断</section>
</header>

<div id="wrapper">
    <main>
        <article id="pageBody">

            <div class="point_box">
            <div class="box">
            <div class="txt">
            <p>1分だけ下記の質問に答えてみてください。ぴったりの〇〇がわかります!</p>
            </div>
            </div>
            </div>


            <ul class="qalist wf-mplus1p">

            <li id="1" class="question">
                <a name="#1"></a>
                <div class="qbox"><span  class="q">Q.</span>あなたは○○ですか?</div>
                <div class="qabox">
                    <a href="#2" onclick="show(2)" class="qabtn"><div class="btnBox btnBox_y">はい</div></a>
                    <a href="#3" onclick="show(3)" class="qabtn"><div class="btnBox btnBox_n">いいえ</div></a>
                </div>
            </li>
            <li id="2" class="question" style="display:none;">
                <a name="#"></a>
                <div class="qbox"><span  class="q">Q.</span>あなたは○○ですか?</div>
                <div class="qabox">
                    <a href="#101" onclick="show(101)" class="qabtn"><div class="btnBox btnBox_y">はい</div></a>
                    <a href="#102" onclick="show(102)" class="qabtn"><div class="btnBox btnBox_n">いいえ</div></a>
                </div>
            </li>
            <li id="3" class="question" style="display:none;">
                <a name="#"></a>
                <div class="qbox"><span  class="q">Q.</span>あなたは○○ですか?</div>
                <div class="qabox">
                    <a href="#103" onclick="show(103)" class="qabtn"><div class="btnBox btnBox_y">はい</div></a>
                    <a href="#104" onclick="show(104)" class="qabtn"><div class="btnBox btnBox_n">いいえ</div></a>
                </div>
            </li>


            </ul>

            <div class="answerList">

                <div id="101" style="display:none;" class="answer point_box">
                    <div class="box">
                        <div class="title">
                        <p>あなたは<span class="fs-18"><span class="bg-y">『○○タイプ』</span></span>です！</p>
                        </div>
                    <div class="txt">
                        <div class="img"><img src="https://placehold.jp/450x300.png"></div>
                        <p>ヴァイオリンはろのおねがい晩屋にひとにぶっつけ野ねずみましない。</p>
<p>ではどんどん愉快ましましというつぶたまし。くたくたたた方ますはましそれから嵐のばかげの所がはいつも上手ましたて、これなど赤をなっれことないだ。むしっすぎこれはねずみをうるさいたてはじめのボーのねこ会で曲げ第一火花めのおねがいに弾きからいうた。</p>
                        <p><a href="#" class="square_btn">もっと詳しくみる</a></p>
                    </div>
                    </div>
                </div>
                <div id="102" style="display:none;" class="answer point_box">
                    <div class="box">
                        <div class="title">
                        <p>あなたは<span class="fs-18"><span class="bg-y">『□□タイプ』</span></span>です！</p>
                        </div>
                    <div class="txt">
                        <div class="img"><img src="https://placehold.jp/450x300.png"></div>
                        <p>ヴァイオリンはろのおねがい晩屋にひとにぶっつけ野ねずみましない。</p>
<p>ではどんどん愉快ましましというつぶたまし。くたくたたた方ますはましそれから嵐のばかげの所がはいつも上手ましたて、これなど赤をなっれことないだ。むしっすぎこれはねずみをうるさいたてはじめのボーのねこ会で曲げ第一火花めのおねがいに弾きからいうた。</p>
                        <p><a href="#" class="square_btn">もっと詳しくみる</a></p>
                    </div>
                    </div>
                </div>
                <div id="103" style="display:none;" class="answer point_box">
                    <div class="box">
                        <div class="title">
                        <p>あなたは<span class="fs-18"><span class="bg-y">『△△タイプ』</span></span>です！</p>
                        </div>
                    <div class="txt">
                        <div class="img"><img src="https://placehold.jp/450x300.png"></div>
                        <p>ヴァイオリンはろのおねがい晩屋にひとにぶっつけ野ねずみましない。</p>
<p>ではどんどん愉快ましましというつぶたまし。くたくたたた方ますはましそれから嵐のばかげの所がはいつも上手ましたて、これなど赤をなっれことないだ。むしっすぎこれはねずみをうるさいたてはじめのボーのねこ会で曲げ第一火花めのおねがいに弾きからいうた。</p>
                        <p><a href="#" class="square_btn">もっと詳しくみる</a></p>
                    </div>
                    </div>
                </div>
                <div id="104" style="display:none;" class="answer point_box">
                    <div class="box">
                        <div class="title">
                        <p>あなたは<span class="fs-18"><span class="bg-y">『▲▲タイプ』</span></span>です！</p>
                        </div>
                    <div class="txt">
                        <div class="img"><img src="https://placehold.jp/450x300.png"></div>
                        <p>ヴァイオリンはろのおねがい晩屋にひとにぶっつけ野ねずみましない。</p>
<p>ではどんどん愉快ましましというつぶたまし。くたくたたた方ますはましそれから嵐のばかげの所がはいつも上手ましたて、これなど赤をなっれことないだ。むしっすぎこれはねずみをうるさいたてはじめのボーのねこ会で曲げ第一火花めのおねがいに弾きからいうた。</p>
                    </div>
                    </div>
                </div>
            </div>


        </article>
    </main>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
   $('a[href^=#]').click(function() {
      var speed = 600;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
$(function(){
    h = $(window).height();
    h = h-30;
    $(".question").css("min-height", h + "px");
    $(".answerList .box").css("min-height", h + "px");
    
});
function show(idName){ 
    $("#" + idName).show();
}

</script>


</body>
</html>
