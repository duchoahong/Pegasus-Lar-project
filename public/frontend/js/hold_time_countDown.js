$(document).ready(function() {

  // ------------- count down thoi gian giu ghe khi booking seat --------------
  var timeAble = 5;
  var count = 0;
  var timeLeft = 0;
  $('.hold-time-countDown').html('0'+timeAble+':'+'00');
  function convertMin(s) {
    min = Math.floor(s / 60);
    sec = s - min*60;
    if (sec < 10) {
      sec = '0'+sec;
    }if (min < 10) {
      min = '0'+min;
    }
    $('.hold-time-countDown').html(min+':'+sec);
  }
  function timeIt() {
    count++;
    timeLeft = timeAble*60 - count;
    convertMin(timeLeft);
    if (timeLeft == 0) {
      alert('Thời gian giữ ghế đã hết, reload lại trang để thực hiện giao dịch');
      window.location.reload();
    }
  }
  setInterval(timeIt, 1000);
  // ---------------------------------------------------------------------
})