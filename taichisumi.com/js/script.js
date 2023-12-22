/* ==============================
ローディングアニメ
============================== */
$(window).on('load', function () {
  $("#loader").delay(1000).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
  $("#loader-inner").delay(720).fadeOut('slow');//ロゴを1.2秒（1200ms）待機してからフェードアウト
});

$(function () {

  //ページ内スクロール
  // let navHeight = $(".header").outerHeight();

  // $('a[href^="#"]').on("click", function () {
  //   let href = $(this).attr("href");
  //   let target = $(href == "#" || href == "" ? "html" : href);
  //   let position = target.offset().top - navHeight;
  //   $("html, body").animate({ scrollTop: position, }, 300, "swing");
  //   return false;
  // });

  //ページトップへの動き
  $("#js-page-top").on("click", function () {
    $("body,html").animate({ scrollTop: 0, }, 300);
    return false;
  });

});

/* ==============================
タイピングアニメーション
============================== */
$(function () {
  $('#typing_1st').t({
    delay: 1,//ローディングアニメを待つための遅延
    speed: 150,//150ミリ秒
    speed_vary: true,//人間のようなタイピング動作にする
    caret: true,//キャレットを表示させる
    blink: true,//キャレットを点滅させる
    blink_perm: false,//常に点滅しない(終了時のみ)
    init:function(elm){//名前のタイピングが始まるタイミングで
      $('#typing_2nd').css('opacity','0')//サブタイトルを非表示
    },
    fin:function(elm){//名前のタイピングが終わるタイミングで
      $('#typing_1st > .t-caret').css('display','none'),
      $('#typing_2nd').t({
        typing:function(elm,chr_or_elm,left,total){
          $('#typing_2nd').css('opacity','1')
        },
        //delay: 3.7,//ローディングアニメ、名前のタイピングを待つための遅延
        speed: 150,//150ミリ秒
        speed_vary: true,//人間のようなタイピング動作にする
        caret: true,
        blink: true,
        blink_perm: false,//常に点滅しない(終了時のみ)
      });
    }
  });

  
});

// 文字が表示後、キャレット削除

// $(window).on('load', function() {
//   setTimeout(function() {
//   $('#typing_1st > .t-caret').css('display','none');

//   }, 4000);
// });



/* ==============================
ページトップボタン
============================== */

function PageTopAnime() {
  //ページトップボタンのクラス管理
  let scroll = $(window).scrollTop();
  if (scroll >= 800) {//上から800pxスクロールしたら
    $('.page-top').removeClass('off');//.page-topについているoffというクラス名を除く
    $('.page-top').addClass('on');//.page-topについているonというクラス名を付与
  } else {
    if ($('.page-top').hasClass('on')) {//すでに.page-topにonというクラス名がついていたら
      $('.page-top').removeClass('on');//onというクラス名を除き
      $('.page-top').addClass('off');//offというクラス名を.page-topに付与
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

/* ==============================
Googleフォーム送信
============================== */
let submitted = false;

/* ==============================
スクロールでヘッダー背景色付与
============================== */
const bg_ob_func = (entry) => {
  const header_bg = document.querySelector('#header');
  if (entry[0].isIntersecting === true) {
    header_bg.classList.add('active');
  } else {
    header_bg.classList.remove('active');
  };
};

const bg_ob_param = {
  rootMargin: '-66px',
};

const bg_ob = new IntersectionObserver(bg_ob_func, bg_ob_param);

bg_ob.observe(document.querySelector('#mv'))


/* ==============================
スクロールで要素フェードイン
============================== */
let scrollAnimationElm = document.querySelectorAll('.fade_in');
let scrollAnimationFunc = function () {
  for (let i = 0; i < scrollAnimationElm.length; i++) {
    let triggerMargin = 70;
    if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
      scrollAnimationElm[i].classList.add('on');
    }
  }
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);


