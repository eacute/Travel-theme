$(function () {
  	
	/* APPLY TO STANDARD DROPDOWN ELEMENTS
	* =================================== */
	$('.dropdown-toggle').dropdown();
	/* APPLY TO STANDARD SELECT ELEMENTS
	* =================================== */     
	$('select').each(function(i, e){
		if (!($(e).data('convert') == 'no')) {
			$(e).hide().wrap('<div class="select-group btn-group" id="select-group-' + i + '"></div>');
			var select = $('#select-group-' + i);
			var current = ($(e).val()) ? $(e).val(): '&nbsp;';
			select.append('<input type="hidden" value="' + $(e).val() + '" name="' + $(e).attr('name') + '" id="' + $(e).attr('id') + '" class="' + $(e).attr('class') + '" /><a class="'+$(e).attr('class')+' btn" href="javascript:;" data-toggle="dropdown">' + current + '</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:;"><span class="caret"></span></a><ul class="dropdown-menu '+$(e).attr('class')+'"></ul>');
			$(e).find('option').each(function(o,q) {
				select.find('.dropdown-menu').append('<li class="'+$(q).attr('selected')+'"><a href="javascript:;" data-value="' + $(q).attr('value') + '">' + $(q).text() + '</a></li>');
				if ($(q).attr('selected')) select.find('.dropdown-menu li:eq(' + o + ')').click();
			});
			select.find('.dropdown-menu a').click(function() {
				select.find('input[type=hidden]').val($(this).data('value')).change();
				select.find('.btn:eq(0)').text($(this).text());
			});
			$(e).remove()
		}
	});

	/* APPLY PLACEHOLDER LACK FOR IE
	* =================================== */ 
    $('input, textarea').placeholder();
    
	/* CAROUSEL 
	* =================================== */ 
	$("#carousel-home").sliderkit({
					auto:1,
					circular:0,
					shownavitems:5,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeOutExpo" // "easeOutExpo", "easeInOutExpo", etc.
	});
	$("#carousel-detail").sliderkit({
					auto:1,
					circular:0,
					counter:0,
					shownavitems:5,
					panelfx:"sliding",
					panelfxspeed:1000,
					navscrollatend:false,
					navpanelautoswitch:false,
					panelbtnshover:false,
					panelfxeasing:"easeOutExpo" // "easeOutExpo", "easeInOutExpo", etc.
	});
	
	/* PRINT 
	* =================================== */
	$(".print_btn").click(function(){window.print(); });

	$('[data-toggle="modal"]').click(function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		if (href.indexOf('#') == 0) {
			$(href).modal('open');
		} else {
			$.get(href, function(data) {
				$('<div class="modal" >' + data + '</div>').modal();
			}).success(function() { $('input:text:visible:first').focus(); });
		}
	});


	/* Bind Click ON Menu VIDEO IMAGE 
	* =================================== */ 
      $(".images-video a").click(function () {
      	if ($(this).hasClass("active")) return false;
      	$(".images-video a.active").removeClass("active")
     	$(this).toggleClass("active");
     	return false;
    });

	/* Tabs 
	* =================================== */ 
 	$('#productTab h3').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	/* GMAP 
	* =================================== */ 
    if ($("#detail_gmap .gmap").is("*"))   $("#detail_gmap .gmap").gMap({ markers: [{latitude: 50.083,longitude: 19.917}], zoom:12 }); 


})


