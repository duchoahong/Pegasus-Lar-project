$(document).ready(function () {

    // add SHOWTIME PAGE
    // fix bug show wrong minute

    // $('#timeVal').timepicker({
    //     format : 'HH:mm:ss',
    //     uiLibrary: 'bootstrap4'
    // });
    
    // fix bug show wrong minute
    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#startDate').datepicker({
        format : 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: today,
        maxDate: function () {
            return $('#endDate').val();
        }
    });
    $('#endDate').datepicker({
        format : 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: function () {
            return $('#startDate').val();
        },
        maxDate: new Date(today.getFullYear(), today.getMonth(), today.getDate() + 10)
    });
// button CANCEL ko submit form
    $('#cancel').on('click', function(e) {
        e.preventDefault();
    });

//  add MOVIE PAGE
// ------- search Producer in Add Movie Page ----------
    
    var timeout2 = null;
    var _data2 = [];
    $('#producer_name').unbind('keyup').bind('keyup', function () {
        clearTimeout(timeout2);

        timeout2 = setTimeout(function() {
            var query = $('#producer_name').val();
            if(query != '') {
                var _token = $('input[name = "_token"]').val();

                $.ajax({
                    url: "/admin/movie/fetch-producer",
                    method: "POST",
                    data: { query: query, _token: _token},
                    success: function(data) {

                        var output = '<ul class="dropdown-menu" style="display: block; position: relative">';
                        if (data.length > 0) {
                            _data2 = data;
                            for (var i = 0; i < data.length; i++) {
                       
                                output += '<li class="fetch-producer">'+data[i].name+'</li>';

                            }
                        } else {
                            output += '<li">not found producer name</li>';
                        }
                        output += '</ul>';
                        $('#producerList').fadeIn();
                        $('#producerList').html(output);
                    }
                })
            }else {
                $('#producerList ul').remove();
            }
        }, 200);
    });

    $(document).on('click', '.fetch-producer', function() {
        $('#producer_name').val($(this).text());
        $('#producerList ul').remove();
    })

// ------------- add Director Tag with validate in Add movie page -------------

    function addProducerField( name, dataId) {
        var field = 
        '<div class="form-group col-sm-3 producerBlock">'+
        '<div class="text-center" style="width: 100%; height: 40px; border: dashed">'+name+'</div>'+
        "<input type='hidden' name='producerTag[]' class='producerTag tag"+dataId+"'>"+
        '<span class="closeProducer">'+
        '<i class="fa fa-times-circle"></i>'+
        '</span>'+
        '</div>';
        $('.producerField').append(field);
        $('.tag'+dataId).val(dataId);
    }

    var exsistId2 = [];

    $(document).on('click', '#addProducer', function(e) {
         e.preventDefault();
         if ($('div.producerBlock').length < 4) {
            for (var i = 0; i < _data2.length; i++) {
                if ( _data2[i].name == $('#producer_name').val()) {
                    for(j = 0; j < exsistId2.length; j++) {
                        if ( _data2[i].id == exsistId2[j].id) {
                            var message = _data2[i].name+' Already exsist!';
                        }  
                    }
                    if (typeof message == 'undefined') {
                        addProducerField( _data2[i].name, _data2[i].id);

                        $('#producer_name').val(null);
                        exsistId2.push({ name: _data2[i].name, id : _data2[i].id});
                        console.log(exsistId2);
                    } else {
                        console.log(message);
                        $('#producer_name').val(null);
                        break;
                    }
                break;
                }
            }
         } else {
            alert('Maximum of Producer is 4!');
         }
    })

// ----------- Close button ---> delete a div && directorId stored in exsistId2 storage -----------
    $(document).on('click', '.closeProducer',  function() {
        var preId = $(this).closest('div').children('input.producerTag').val(); // lay gia tri o input de dua ra so sah
        for (var i = 0; i < exsistId2.length; i++) {
            if (exsistId2[i].id == preId) {

                exsistId2.splice(i, 1); // xoa phan tu duoc chon

                $(this).closest('div').remove();
                console.log(exsistId2);
                console.log('done');
                break;
            }
        }
    })


// ------- search Director in Add Movie Page ----------
    var timeout = null;
    var _data = [];
    $('#director_name').unbind('keyup').bind('keyup', function () {

    clearTimeout(timeout);

    timeout = setTimeout(function() {
        var query = $('#director_name').val();
        console.log(query);
        if (query.length > 0) {
            var _token = $('input[name = "_token"]').val();

            $.ajax({
                url: 'admin/movie/fetch-director',
                method: 'POST',
                data: {query: query, _token:_token},
                success: function(data) {
                    var output = '<ul class="dropdown-menu" style="display: block; position: relative">';

                    if (data.length > 0) {
                        _data = data;
                        for (var i = 0; i < data.length; i++) {
                            output += '<li class="fetch-director">'+data[i].name+'</li>'
                        }
                    } else {
                        output += '<li>not found director name</li>'
                    }
                    output += '</ul>';
                    $('#directorList').fadeIn();
                    $('#directorList').html(output);
                }
            })
        } else {
             $('#directorList ul').remove();
        };
    }, 200);
    });
    $(document).on('click', '.fetch-director', function() {
        $('#director_name').val($(this).text());
        $('#directorList ul').remove();
    });


    // function addDirectorField() {
    //     var field = 
    //     '<div class="form-group col-sm-3 directorBlock">'+
    //     '<input name="MovieName" type="text" class="form-control" placeholder="enter the Name of the new Movie">'+
    //     '<span id="closeDirector">'+
    //     '<i class="fa fa-times-circle"></i>'+
    //     '</span>'+
    //     '</div>';
    //     $('.directorField').append(field);
    // }

// ------------- add Director Tag with validate in Add movie page -------------

    function addDirectorField( name, dataId) {
        var field = 
        '<div class="form-group col-sm-3 directorBlock">'+
        '<div class="text-center" style="width: 100%; height: 40px; border: dashed">'+name+'</div>'+
        "<input type='hidden' name='directorTag[]' class='directorTag tag"+dataId+"'>"+
        '<span class="closeDirector">'+
        '<i class="fa fa-times-circle"></i>'+
        '</span>'+
        '</div>';
        $('.directorField').append(field);
        $('.tag'+dataId).val(dataId);
    }

    var exsistId = [];

    $(document).on('click', '#addDirector', function(e) {
         e.preventDefault();
         if ($('div.directorBlock').length < 4) {
            for (var i = 0; i < _data.length; i++) {
                if ( _data[i].name == $('#director_name').val()) {
                    for(j = 0; j < exsistId.length; j++) {
                        if ( _data[i].id == exsistId[j].id) {
                            var message = _data[i].name+' Already exsist!';
                        }  
                    }
                    if (typeof message == 'undefined') {
                        addDirectorField( _data[i].name, _data[i].id);

                        $('#director_name').val(null);
                        exsistId.push({ name: _data[i].name, id : _data[i].id});
                        console.log(exsistId);
                    } else {
                        console.log(message);
                        $('#director_name').val(null);
                        break;
                    }
                break;
                }
            }
         } else {
            alert('Maximum of director is 4!');
         }
    })

// ----------- Close button ---> delete a div && directorId stored in exsistId storage -----------
    $(document).on('click', '.closeDirector',  function() {
        var preId = $(this).closest('div').children('input.directorTag').val(); // lay gia tri o input de dua ra so sah
        for (var i = 0; i < exsistId.length; i++) {
            if (exsistId[i].id == preId) {

                exsistId.splice(i, 1); // xoa phan tu duoc chon

                $(this).closest('div').remove();
                console.log(exsistId);
                console.log('done');
                break;
            }
        }
    })


// ------- search Cast in Add Movie Page ----------
    var timeout1 = null;
    var _data1 = [];
    $('#cast_name').unbind('keyup').bind('keyup', function () {

    clearTimeout(timeout1);

    timeout1 = setTimeout(function() {
        var query = $('#cast_name').val();
        console.log(query);
        if (query.length > 0) {
            var _token = $('input[name = "_token"]').val();

            $.ajax({
                url: 'admin/movie/fetch-cast',
                method: 'POST',
                data: {query: query, _token:_token},
                success: function(data) {
                    var output = '<ul class="dropdown-menu" style="display: block; position: relative">';

                    if (data.length > 0) {
                        _data1 = data;
                        for (var i = 0; i < data.length; i++) {
                            output += '<li class="fetch-cast">'+data[i].name+'</li>'
                        }
                    } else {
                        output += '<li>not found cast name</li>'
                    }
                    output += '</ul>';
                    $('#castList').fadeIn();
                    $('#castList').html(output);
                }
            })
        } else {
             $('#castList ul').remove();
        };
    }, 200);
    });
    $(document).on('click', '.fetch-cast', function() {
        $('#cast_name').val($(this).text());
        $('#castList ul').remove();
    });

// ------------- add Cast Tag with validate in Add movie page -------------

    function addCastField( name, dataId) {
        var field = 
        '<div class="form-group col-sm-3 castBlock">'+
        '<div class="text-center" style="width: 100%; height: 40px; border: dashed">'+name+'</div>'+
        "<input type='hidden' name='castTag[]' class='castTag tag"+dataId+"'>"+
        '<span class="closeCast">'+
        '<i class="fa fa-times-circle"></i>'+
        '</span>'+
        '</div>';
        $('.castField').append(field);
        $('.tag'+dataId).val(dataId);
    }

    var exsistId1 = [];

    $(document).on('click', '#addCast', function(e) {
         e.preventDefault();
         if ($('div.castBlock').length < 10) {
            for (var i = 0; i < _data1.length; i++) {
                if ( _data1[i].name == $('#cast_name').val()) {
                    for(j = 0; j < exsistId1.length; j++) {
                        if ( _data1[i].id == exsistId1[j].id) {
                            var message = _data1[i].name+' Already exsist!';
                        }  
                    }
                    if (typeof message == 'undefined') {
                        addCastField( _data1[i].name, _data1[i].id);

                        $('#cast_name').val(null);
                        exsistId1.push({ name: _data1[i].name, id : _data1[i].id});
                        console.log(exsistId1);
                    } else {
                        console.log(message);
                        $('#cast_name').val(null);
                        break;
                    }
                break;
                }
            }
         } else {
            alert('Maximum of cast is 10!');
         }
    })


// ----------- Close button ---> delete a div && castID stored in exsistId1 storage -----------
    $(document).on('click', '.closeCast',  function() {
        var preId = $(this).closest('div').children('input.castTag').val(); // lay gia tri o input de dua ra so sah
        for (var i = 0; i < exsistId1.length; i++) {
            if (exsistId1[i].id == preId) {

                exsistId1.splice(i, 1); // xoa phan tu duoc chon

                $(this).closest('div').remove();
                console.log(exsistId1);
                console.log('done');
                break;
            }
        }
    })
})