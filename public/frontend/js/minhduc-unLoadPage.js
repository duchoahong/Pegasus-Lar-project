function getSelectDay(movieId, date) {
  	$('.selectDayField').empty();
  	var query = {"MovieID" :movieId, "Date" : date };
  	$.ajax({
	    url: "/movie-present-day",
	    method: "GET",
	    data: {query : query},
	    success: function(data) {
     	 	if (data.length > 0) {
		      	var output = '<div class="row "><div class="col-md-12">';
		      	var output1 ='<h5>Sáng</h5><ul class="time-list time-list-m list-inline">';
		      	var output2 ='<h5>Chiều</h5><ul class="time-list time-list-a list-inline">';
		      	var output3 ='<h5>Tối</h5><ul class="time-list time-list-e list-inline">';
		      	var output4 ='<h5>Khuya</h5><ul class="time-list time-list-d time-list-e list-inline">';

		      	var bcheck = '07:00:00';
	       		var bcheck = Number(bcheck.split(':')[0])*60*60+Number(bcheck.split(':')[1])*60;
		      	var mcheck = '12:00:00';
	       		var mcheck = Number(mcheck.split(':')[0])*60*60+Number(mcheck.split(':')[1])*60;
		      	var acheck = '19:00:00';
	       		var acheck = Number(acheck.split(':')[0])*60*60+Number(acheck.split(':')[1])*60;
		      	var echeck = '24:00:00';
	       		var echeck = Number(echeck.split(':')[0])*60*60+Number(echeck.split(':')[1])*60;
		      	for (var i = 0; i < data.length; i++) {
		       		var timeData = data[i].TimeVal;
		       		console.log(data);
		       		var convertSec = Number(timeData.split(':')[0])*60*60+Number(timeData.split(':')[1])*60;
					if (convertSec > bcheck && convertSec <= mcheck) {
						output1 += '<li class="time-cell list-inline-item">'+
									'<a href="booking/mv/'+data[i].MovieID+'/room/'+data[i].Room_id+'/dy/'+data[i].dateSelected+'/seq/'+convertSec+'">'+
									'<span>'+data[i].TimeVal+'</span>'+
									'<br>'+
									'<span>'+data[i].seatAvail+'&nbsp;ghế trống</span>'+
									'</a>'+
									'</li>';
					} else if(convertSec > mcheck && convertSec <= acheck){
						output2 += '<li class="time-cell list-inline-item">'+
									'<a href="#">'+
									'<span>'+data[i].TimeVal+'</span>'+
									'<br>'+
									'<span>'+data[i].seatAvail+'&nbsp;ghế trống</span>'+
									'</a>'+
									'</li>';
					} else if (convertSec > acheck && convertSec <= echeck){
						output3 += '<li class="time-cell list-inline-item">'+
								'<a href="#">'+
								'<span>'+data[i].TimeVal+'</span>'+
								'<br>'+
								'<span>'+data[i].seatAvail+'&nbsp;ghế trống</span>'+
								'</a>'+
								'</li>';
					} else {
						output4 += '<li class="time-cell list-inline-item">'+
									'<a href="#">'+
									'<span>'+data[i].TimeVal+'</span>'+
									'<br>'+
									'<span>'+data[i].seatAvail+'&nbsp;ghế trống</span>'+
									'</a>'+
									'</li>';
					}
		      	}
				output1 += "</ul>";
				output2 += "</ul>";
				output3 += "</ul>";
				output4 += "</ul>";
				output += output1+output2+output3+output4+'</div></div>';
			}else {
				var output = '<h3 class="text-center">Xin lỗi, không có xuất chiếu vào ngày này, hãy chọn một ngày khác.</h3>';
			}
			$('.selectDayField').html(output);
    	}
  	})
}

							            
							            	