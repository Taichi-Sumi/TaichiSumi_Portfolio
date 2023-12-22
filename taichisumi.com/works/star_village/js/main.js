/* ========== hamburger ========== */
$('.ham').on('click', () => {
    $('.g_nav').toggleClass('on');
    $('.ham').toggleClass('on');
});

/* ========== アコーディオン ========== */
//アコーディオンをクリックした時の動作
$('.title').on('click', function () {//タイトル要素をクリックしたら
    var findElm = $(this).next(".box");//直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle();//アコーディオンの上下動作

    if ($(this).hasClass('close')) {//タイトル要素にクラス名closeがあれば
        $(this).removeClass('close');//クラス名を除去し
    } else {//それ以外は
        $(this).addClass('close');//クラス名closeを付与
    }
});

/* ========== page top ========== */

//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 700) {//上から200pxスクロールしたら
        $('#page-top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
        $('#page-top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
    } else {
        if ($('#page-top').hasClass('UpMove')) {//すでに#page-topにUpMoveというクラス名がついていたら
            $('#page-top').removeClass('UpMove');//UpMoveというクラス名を除き
            $('#page-top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
        }
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// #page-topをクリックした際の設定
$('#page-top a').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});

/* ========== ヘッダーをスクロールに合わせて色変更 ========== */
const bg_ob_func = (entry) => {
    // htmlから#bgを取得

    const nav_letter = document.querySelector('#header');
    // bg_ob.observe(document.querySelector('#bg_placeholder'))で監視している、画面表示されているか？の値がtrueなら.onをbg_targetに付加
    if (entry[0].isIntersecting === true) {
        nav_letter.classList.add('active');
        // そうでない場合はbg_targetからonを取り除く
    } else {
        nav_letter.classList.remove('active');
    };
};

const bg_ob_param = {
    rootMargin: '-90px',
};


const bg_ob = new IntersectionObserver(bg_ob_func, bg_ob_param);

bg_ob.observe(document.querySelector('#key'))

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


