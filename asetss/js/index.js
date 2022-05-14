document.querySelector('.icon_bar').addEventListener("click",function () {
   document.querySelector(".icon_bar").classList.toggle("fa-times");
 document.querySelector(".nav_menu_top").classList.toggle("show");
})
const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar

});

$(document).ready(function() {
   $(document).on( 'keydown' , '.farsi' ,function (e) {
      console.log(e.key);
      if(e.key == 'Alt' || e.key == 'Shift' || e.key == 'Tab' || e.key == 'Backspace')
         return;

      if( !e.key.match(/^[ا آ ئ ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی]+$/)) {
         e.preventDefault();
      }
   });        

   $(document).on( 'keydown' , '.numeric' ,function (e) {
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 40)) {
         return;
      }
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
      }
   });        
});