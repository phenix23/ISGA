/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $(function(){
 	var pageNum = parseInt($('li.disabled').text());
 	$('li.disabled').html('<a href="/PhpProject1/admin/posts/index/page:'+ pageNum +'">'+pageNum+'</a>');

 	 //Déplacement avec le scroller du window
 	 $(this).scroll(function(){
 	 	$('#info').animate({'marginTop': ($(window).scrollTop()) + 'px' ,
 	 		'transition-property': 'marginTop',
 	 		'transition-duration': '2s'}, 50 );
 	 });

 	//Selectionner une ligne du table
 	$('div.tabbable td').on('click',function(){
 		$('div.tabbable td:last').find(':first').get(0).click();
 	});

 	//navigation entre les tabs du table
 	$('div.pageing a').on('click',function(){
 		var url = $('').attr('href');
 		$('div.tab-content').load(url);
 	})

 	$('div.pageing a').live('click', function(){
 		$('div.tab-content').load($(this).attr('href'));
 		return false;
 	});


 	//dropDwon des menu Principale
 	
 });
