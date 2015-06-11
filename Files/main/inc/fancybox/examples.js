 // JavaScript Document
$(document).ready(function() {
			/*
			*   Examples - images
			*/


			$("#viewbook10").fancybox({
				'width'				: '90%',
				'height'			: '90%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$(".magazineIssuu").fancybox({
				'width'				: '90%',
				'height'			: '90%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$("#video960").fancybox({
                		'width'                : 960,
                		'height'            : 451,
                		'autoScale'            : false,
                		'transitionIn'        : 'none',
                		'transitionOut'        : 'none',
                		'type'                : 'iframe',
              		  	'scrolling'           : 'no'
           		 });
           		 $(".map920").fancybox({
                        'width'                : 920,
                        'height'            : 760,
                        'autoScale'            : false,
                        'transitionIn'        : 'none',
                        'transitionOut'        : 'none',
                        'type'                : 'iframe',
                            'scrolling'           : 'no'
                    });
                    $("a.youtube-sd").fancybox({
	         	'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'		: 640,
			'height'		: 505,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			   	 'wmode'		: 'transparent',
				'allowfullscreen'	: 'true'
			}
	 
			 });
                    $(".askspike").fancybox({
                        'width'                : 600,
                        'height'            : 500,
                        'autoScale'            : false,
                        'transitionIn'        : 'none',
                        'transitionOut'        : 'none',
                        'type'                : 'iframe',
                            'scrolling'           : 'no'
                    });
           		 $("#fancyimage").fancybox({
                        	'titleshow'		:false
                    	});

		});