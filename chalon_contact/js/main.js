//スクロールしたら
$(window).on('scroll', () => {
    //どれくらいスクロールされたかを取得する
    const scroll_height = $(window).scrollTop();
    //console.log(scroll_height);
    //もし一定以上(500px)スクロールされていたら
    if (scroll_height > 500) {
        $('.to_top').addClass('on');
    } else {
        $('.to_top').removeClass('on');
    }
});

//ハンバーガーメニュー
$('.menu_btn').on('click', () => {
    $('header').toggleClass('on');
});

//メニューの空いているところをクリックしても、メニューが消える
$('header nav').on('click', () => {
    $('header').removeClass('on');
});


//定番と米粉を消して
$('.tab_contents').hide();
$('#this_month').show();

//ナビがクリックされたら
$('.menu ul li a').on('click', (e) => {
    //クリックされたaタグのhref属性の値を取得
    const target = $(e.currentTarget).attr('href');

    //いったん全部消す
    $('.tab_contents').hide();

    //クリックされたaタグの該当するdivタグを表示
    $(target).fadeIn();

    //aタグ独自の動きを止める
    return false;
});


//topページのニュース
const now_date = new Date();

$('time').each((index, elem) => {
    //console.log(elem);
    const target = $(elem).attr('datetime');
    const target_date = new Date(target);

    //どれ位経ったを変数に格納
    const diff_time = now_date - target_date;

    //変数diff_timeが7日分以内だったら、newを付ける
    if (diff_time < 7 * 24 * 60 * 60 * 1000) {
        // console.log('7日以内！');
        $(elem).append('<span>NEW</span>');
    }
});