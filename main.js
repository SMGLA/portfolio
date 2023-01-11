'use strict';

{

  // On scroll behaviour - to_top icon
  function scrollDetectorCallback(entries) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        toTop.classList.add('scrolled');
      } else {
        toTop.classList.remove('scrolled');
      }
    })
  }

   // On scroll behaviour - project-cards
  function onScrollCallback(entries, obs) {
    entries.forEach(entry => {
      console.log(entry);
      if (!entry.isIntersecting) {
        return;
      }
      entry.target.classList.add('appear');
      obs.unobserve(entry.target);
    });
  }

  const onScrollObserver = new IntersectionObserver(onScrollCallback, {
    threshold: 0.6,
  });

  document.querySelectorAll('.project-card').forEach(el => {
    onScrollObserver.observe(el);
    console.log(el);
  });

  // const onScrollObserver = new IntersectionObserver(onScrollCallback);
  // onScrollObserver.observe(document.querySelectorAll('project-card'));


  const toTop = document.getElementById('to_top');

  // Detect scrolling by observing the empty .target element for to_top icon
  const scrollDetectorObserver = new IntersectionObserver(scrollDetectorCallback);
  scrollDetectorObserver.observe(document.getElementById('target'));

  // To_top icon behaviour: remove "#"
  toTop.addEventListener('click', e => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });


  // On scroll behaviour - header
  const header = document.querySelector('header');

  let scrollPoint = 0; // 現在のスクロール位置をセットする変数
  let lastPoint = 0; // 1つ前のスクロール位置をセットする変数

  window.addEventListener("scroll", () => {
    scrollPoint = window.scrollY;
    
    if (scrollPoint > lastPoint) { // 下スクロールの場合
      header.classList.add('fixed-hide');
    } else { // 上スクロールの場合
      header.classList.remove('fixed-hide');
    }
    
    lastPoint = scrollPoint;
  });


}

// {

//   // １．監視対象を定義
//   const target = document.getElementById('contact');
//   const header = document.querySelector('header');

// // ５．条件に合致したときの動作を定義
//   function callback(entries) { // entriesのように引数を指定するとtargetの情報を得られる（entriesは配列）
//     // console.log('fired!'); // デフォルトでは監視対象が0%と100%ブラウザの端と交差時点で実行される
//     console.log(entries[0]) // targetが1つの場合[0]番目の情報を出力する

//     if (entries[0].isIntersecting) { // targetが交差していれば
//       header.target.classList.add('hide'); // .hide クラスを追加
//     } else { // targetが交差していなければ
//       header.target.classList.remove('hide'); // .hide クラスを削除
//     }
//     }

// // ３．オプションを定義
//   const options = { // オブジェクト形式にする
//     threshhold: 0.6,
//     // threshhold: [0.2, 0.8],
//   }

// // ２．オブザーバーのインスタンスを定義
//   const observer = new IntersectionObserver(callback, options); // callback functionを引数として渡して上でそのcallback functionを定義する
//   // パーセンテージを指定する場合は、第2引数としてoptionsのような変数を指定する

// // ４．オブザーバーにtargetを監視させる
//   observer.observe(target);


// }