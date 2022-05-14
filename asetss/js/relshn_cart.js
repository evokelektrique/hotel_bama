var
persianNumbers = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g],
arabicNumbers  = [/0/g, /1/g, /2/g, /3/g, /4/g, /5/g, /6/g, /7/g, /8/g, /9/g],
fixNumbers = function (str)
{
   if(typeof str === 'string')
   {
      for(var i=0; i<10; i++)
      {
         str = str.replace(persianNumbers[i], i).replace(arabicNumbers[i], i);
         str = str.replace("/","");
         str = str.replace(",","");
      }
   }
   return str;
};
$(document).ready(function() {
   $("#time_start").pDatepicker({
      autoClose: true,
      minDate: new persianDate(),
      initialValueType: false,
      format:"YY/M/DD",
   });
});

$(document).ready(function() {
   $("#time_end").pDatepicker({
      autoClose: true,
      minDate: new persianDate().add('d',1),
      initialValueType: false,
      format:"YY/M/DD",
   });
});
var time_end = document.querySelector("#time_end").value;
var time_start = document.querySelector("#time_start").value;

document.querySelector(".price_ent").addEventListener("click",function(){
   var time_end = document.querySelector("#time_end").value;
   var time_start = document.querySelector("#time_start").value;
   var date_time = fixNumbers(time_end)-fixNumbers(time_start);

   if (date_time>30){
      date_time=date_time-70;
   }
   if (time_start==time_end || date_time<0 ){
      alert("تاریخ انتخاب شده درست نیست!!")

   }
   else {



      var price_one = document.querySelector(".price_one").innerHTML;
      price_one = fixNumbers(price_one);


      document.querySelector(".price_sum").innerHTML= price_one*date_time;
   }

})
var now_data = new persianDate().format("YY/M/D");

document.getElementById("slect").addEventListener("click",function (e) {

   var time_end = document.querySelector("#time_end").value;
   var time_start = document.querySelector("#time_start").value;

   e.preventDefault();
   var date_time = fixNumbers(time_end)-fixNumbers(time_start);
   if (date_time>30){
      date_time=date_time-70;
   }
   var username = document.getElementById("username").value;
   var address = document.getElementById("address").value;
   var price_one = document.querySelector(".price_one").innerHTML;
   var name_hotel = document.getElementById("name_hotel").value;
   var name_room = document.getElementById("name_room").value;
   var room_id =document.getElementById("room_id").value;
   var end_time = document.getElementById("end_time").value;

   price_one = fixNumbers(price_one);
   var price_sum = price_one*date_time;
   if (username ==""||address==""){
      alert("لطفا فیلد هارا پر کنید");

   }else if (time_start==time_end ||date_time<0) {
      alert("تاریخ انتخاب شده درست نمی باشد")
   }else if (time_start<end_time){
      alert("این تاریخ قبلا رزرف شده");
   }
   else {
      $.ajax({
         url:"factor.php",
         type:"POST",
         data:{
            "username":username,
            "adres":address,
            "time_start":time_start,
            "time_end":time_end,
            "count_date":date_time,
            "price":price_sum,
            "name_room":name_room,
            "room_id":room_id,
            "name_hotel":name_hotel,
         },
         success:function (res) {
            window.location.href = "user_room.php";
         }
      })
   }


})