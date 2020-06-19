$(document).ready(function() {
  var owl = $(".movie-list");
 
  owl.owlCarousel({
      items : 6, //6 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      // itemsTablet: [600,2], //2 items between 600 and 0
      // itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      loop:true,
      autoplay:true,
      autoplayTimeout:2500,
      autoplayHoverPause:true
  });
  $('.m-select-item').mouseover(function() {
    $(this).children('.m-select-feature').css('display', 'block');
    $(this).children('.m-select-play').css('display', 'block');
  }).mouseout(function() {
    $(this).children('.m-select-feature').css('display', 'none');
    $(this).children('.m-select-play').css('display', 'none');
  })
  function deleteSelectedSeat(val) {
    $('.user-selected-seat').empty();
    for( var i = 0; i < seat.length; i++){ 
      if ( seat[i] == val) {
        seat.splice(i, 1); 
      }
    }
    var str = seat[0];
    for (var i = 1; i < seat.length; i++) {
      str += ', '+seat[i];
      // $('.user-selected-seat').append(seat[i]+', ');
    }
    if (typeof(str) !== 'undefined' && str !== null) {
      $('.user-selected-seat').text(str);
    }
    if (seat.length > 0) {
      $('.movie-booking-seat').text(seat.length);
    } else {
      $('.movie-booking-seat').text('empty');
    }
    console.log(seat);
  }
  function addSelectedSeat(val) {

    seat.push(val);

    var str = seat[0];
    for (var i = 1; i < seat.length; i++) {
      str += ', '+seat[i];
    }
    $('.user-selected-seat').text(str);

    $('.movie-booking-seat').text(seat.length);
    console.log(seat);
  }
  var seat = Array();
  if (seat.length == 0) {
    $('.movie-booking-seat').text('empty');
  }
  $('.avail').click(function() {
    var clicks = $(this).data('clicks');

    var seatNumber = $(this).children().attr('seat-number');
    var seatRow = $(this).parent().children('.row-name').children().text();
    console.log(seatRow);
    var seatNo = seatNumber+seatRow;

    if (clicks) {
      $(this).children().empty();
      $(this).removeClass('selected-box').addClass('unselected');

      console.log('success', $(this).data('clicks'));

      deleteSelectedSeat(seatNo);
    } else {
      $(this).children().text(seatNumber);
      $(this).removeClass('unselected').addClass('selected-box');
      console.log(seatNumber, $(this).data('clicks'));

      addSelectedSeat(seatNo);
    }
    $(this).data('clicks', !clicks);
    // $(this).data('clicks', !clicks) nhu cai ban le, thay doi true/false tuong ung so lan click;
  });

  // -------- check customer Click on Type of payment then show Checked icon -------------

  $('.payment-type-item').click(function() {
    var click = $(this).data('click');
    if (click) {
      $(this).children('.icon-check').empty();
      // console.log(0);
    }else {
      for (var i = 0; i < $('.payment-type-item').length; i++) {
        if($('.payment-type-item').eq(i).data('click')) {
          var click2 = $('.payment-type-item').eq(i).data('click');
          $('.payment-type-item').eq(i).data('click', !click2);
          $('.payment-type-item').eq(i).children('.icon-check').empty();
        } 
      }
      $(this).children('.icon-check').html('<i class="far fa-check-circle fa-2x float-right payment-check"></i>');
      $('.payment-check').css('color', '#f05050');
      // console.log(1);
    }
    $(this).data('click', !click);
  });

  $('.submit-payment').click(function(e) {
    e.preventDefault();
    $('#shopping-done').submit();
  })
  $('.btn-booking').click(function() {
    $('.selectDayField').empty().html('<h3 class="text-center selectDay-invite">Mời lựa chọn ngày mua vé ^^</h3>');
  })
  $('.date-cell').click(function() {
    for (var i = 0; i < $('.date-cell').length; i++) {
      $('.date-cell').eq(i).css('border', '2px solid #fff');
    }
    $(this).css('border', '2px solid #222');

    // var click = $(this).data('click');
    // if (click) {
    //   $(this).css('border', '2px solid #222');
    //   // console.log(0);
    // }else {
    //   for (var i = 0; i < $('.date-cell').length; i++) {
    //     if($('.date-cell').eq(i).data('click')) {
    //       var click2 = $('.date-cell').eq(i).data('click');
    //       $('.date-cell').eq(i).data('click', !click2);
    //       $('.date-cell').eq(i).css('border', '2px solid #fff');
    //     } else {
    //       $('.date-cell').eq(i).css('border', '2px solid #fff');
    //     }
    //   }
    //   $(this).css('border', '2px solid #222');
    //   // console.log(1);
    // }
    // $(this).data('click', !click);
  })
  // ----------- sessionStorage-----------
  // function addSelectedSeat (val) {
  //   $('.user-selected-seat').append(val+', ');
  // }
  // function removeTempSeat(key) {
  //   sessionStorage.removeItem(key);
  // }
  // function setTempSeat(key, val) {
  //   sessionStorage.setItem(key, val);
  //   console.log(sessionStorage.getItem(key));
  // }
  // ----------- sessionStorage-----------

});

