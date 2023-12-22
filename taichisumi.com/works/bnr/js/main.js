// タブパネル切り替え
$('.bijoude_btn').on('click', () => {
    $('#bijoude_content').addClass('active');
    $('#iqserver_content, #wws_content').removeClass('active');

});

$('.iqserver_btn').on('click', () => {
    $('#iqserver_content').addClass('active');
    $('#bijoude_content, #wws_content').removeClass('active');
});

$('.wws_btn').on('click', () => {
    $('#wws_content').addClass('active');
    $('#bijoude_content, #iqserver_content').removeClass('active');
});


/*＝＝＝＝＝＝＝＝＝元々のやつ＝＝＝＝＝＝＝＝＝＝ */
// function active(obj) {
//     //  クラスactiveがなかったら、activeを追加
//     if (!obj.nextElementSibling.classList.contains("active")) {
//         obj.nextElementSibling.classList.add("active");
//     } else {  //  フワッと消す時の処理
//         obj.nextElementSibling.style = "opacity:0"; //  まずopacityで見えなくする
//         setTimeout((e) => { //  0.5秒後にクラスactiveを削除
//             obj.nextElementSibling.classList.remove("active");
//             obj.nextElementSibling.style = "opacity:1";
//         }, 500);
//     }
// }


/*＝＝＝＝＝＝テスト＝＝＝＝＝＝ */

// if ($('#bijoude_content, #bijoude_content,#wws_content').hasClass('active')) {
//     console.log('ok');
// } else {
//     $('#bijoude_content, #bijoude_content,#wws_content').hasClass('active').css('opacity', '0');
// }

/* =====ham====== */
$('.ham_base').on('click', () => {
    $('.ham_base').toggleClass('on');
    $('nav').toggleClass('on');
});

/*====リンクをクリックしたらナビ表示が消える======= */
$('.bijoude_btn, .iqserver_btn, .wws_btn').on('click', () => {
    $('.ham_base').removeClass('on');
    $('nav').removeClass('on');
});
