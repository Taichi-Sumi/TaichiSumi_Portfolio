/* ========== global nav スクロールに合わせて色変更 ========== */
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
    rootMargin: '-50px',
};


const bg_ob = new IntersectionObserver(bg_ob_func, bg_ob_param);

bg_ob.observe(document.querySelector('#key'))

// /* ========== global nav スクロールに合わせて色変更 ========== */
// const online_ob_func = (entry) => {
//     // htmlから#bgを取得
//     const nav_letter = document.querySelector('#ul_active');

//     // bg_ob.observe(document.querySelector('#bg_placeholder'))で監視している、画面表示されているか？の値がtrueなら.onをbg_targetに付加
//     if (entry[0].isIntersecting === true) {
//         nav_letter.classList.add('active');
//         // そうでない場合はbg_targetからonを取り除く
//     } else {
//         nav_letter.classList.remove('active');
//     };
// };

// const online_ob_param = {
//     rootMargin: '-400px',
// };


// const online_ob = new IntersectionObserver(online_ob_func, online_ob_param);

// online_ob.observe(document.querySelector('#online_shop'))

/* ========== hamburger ========== */
$('.ham_base').on('click', () => {
    $('.g_nav').toggleClass('on');
    $('.ham_base').toggleClass('on');
});


/* ========== accordion panel (faq) ========== */

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


