document.addEventListener("DOMContentLoaded",function()
{
	//--===OPEN_MENU===--//
	
	const all_class=$('.asse, .rent, .sell, .we');
	const all_class_fun=['showFullSpecOffert','showFullRent','showFullSell','showFullWe'];
	const asse=['jurgo_alu_001.jpg','jurgo_alu_002.jpg','jurgo_alu_003.jpg','jurgo_alu_004.jpg'];
	let back_timer=null;
	
	if($(window).width()<951)
	{
		showAllRes()
	}
	else
	{
		showAll();
	}
	
	function showAllRes()
	{
		$(all_class).stop().animate();
		$('.back-button').fadeOut(300);
		
		$(all_class).css('display','');
		
		$('.asse_desc').fadeOut(300);
		$('.rent_desc').fadeOut(300);
		$('.sell_desc').fadeOut(300);
		$('.we_desc').fadeOut(300);
		
		$(all_class).animate({
			width:'100%',
			height:'25%'
		},300);
		
		$(all_class).on('click',showFullRes);
	}
	
	function showFullRes()
	{		
		$(all_class).not(this).animate({
			width:'0'
		},200);

		$(this).animate({
			top:'0',
			height:'100%'
		},200);
		
		$(all_class).not(this).css('display','none');
		
		$('.back-button').fadeIn(300);
		
		back_timer=setTimeout(function(){
			$('.back-button').on('click',showAllRes);
		},400);
		
		if($(this).hasClass('rent'))
		{
			$('.rent_desc').stop().animate();
			$('.menu_cont').eq(0).css('display','block');
			$('.rent_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.rent_desc').css('display','block');
			});
		}
		
		if($(this).hasClass('asse'))
		{
			$('.asse_desc').stop().animate();
			$('.menu_cont').eq(1).css('display','block');
			$('.asse_desc').css('display','block');
		}		
		
		if($(this).hasClass('sell'))
		{
			$('.sell_desc').stop().animate();
			$('.menu_cont').eq(2).css('display','block');
			$('.sell_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.sell_desc').css('display','block');
			});
		}
		
		if($(this).hasClass('we'))
		{			
			$('.we_desc').stop().animate();
			$('.menu_cont').eq(3).css('display','block');
			$('.we_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.we_desc').css('display','block');
			});
		}
	}
	
	function showAll()
	{
		$(all_class).stop().animate();
		$('.see_more').eq(0).click(showFullRent);
		$('.see_more').eq(1).click(showFullSpecOffert);
		$('.see_more').eq(2).click(showFullSell);
		$('.see_more').eq(3).click(showFullWe);
		
		function showFullSpecOffert()
		{
			$('.menu_cont').not(this).css('display','none');
			$('.asse').trigger('click');
		}
		
		function showFullRent()
		{
			$('.menu_cont').not(this).css('display','none');
			$('.rent').trigger('click');
		}
		
		function showFullSell()
		{
			$('.menu_cont').not(this).css('display','none');
			$('.sell').trigger('click');
		}
		
		function showFullWe()
		{
			$('.menu_cont').not(this).css('display','none');
			$('.we').trigger('click');
		}
		
		$(all_class).animate({
			width:'25%'
		},300);
		
		$(all_class).fadeIn(500);
		$('.quick_desc').css('display','');
		$('.see_more').css('display','');
		$('.menu_cont').fadeIn(300);		
		$('.back-button').fadeOut(300);
		$('.asse_desc').fadeOut(300);
		$('.rent_desc').fadeOut(300);
		$('.sell_desc').fadeOut(300);
		$('.we_desc').fadeOut(300);
		
		for(let i=0;i<$('.menu_cont').length;i++)
		{	
			$(all_class).eq(i).mouseover(function(){
				$('.see_more').eq(i).animate({
					bottom:'5%',
					opacity:'1'
				},500);
			});

			$(all_class).eq(i).mouseleave(function(){
				$('.see_more').finish().animate();
				$('.see_more').eq(i).animate({
					bottom:'0',
					opacity:'0'
				});
			});
		}
		$(all_class).on('click',showFull);
	}
	
	function showFull()
	{
		clearTimeout(back_timer);
		$(all_class).off();
		$(all_class).stop().animate();
		$('.asse_tile').stop().animate();
		$('.see_more').finish().animate();
		$('.see_more').removeAttr('style');
		$('.see_more').css('display','none');
		$('.quick_desc').css('display','none');
		$('.menu_cont').css({'display':'none','transition':'display 1s'});		
		
		$(all_class).not(this).animate({
			width:'0'
		},300);
			
		$(this).animate({
			left:'0'
		},300);
		
		$(this).animate({
			width:'100%'
		},400);
		
		$('.back-button').fadeIn(300);
		
		back_timer=setTimeout(function(){
			$('.back-button').on('click',showAll);
		},400);
		
		if($(this).hasClass('rent'))
		{
			$('.rent_desc').stop().animate();
			$('.menu_cont').eq(0).css('display','block');
			$('.rent_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.rent_desc').css('display','block');
			});
		}

		if($(this).hasClass('asse'))
		{
			$('.asse_desc').stop().animate();
			$('.menu_cont').eq(1).css('display','block');
		
			$('.asse_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.asse_desc').css('display','block');
			});

			$('.asse_tile').animate({
				height:'33,3%',
				width:'98%'
			},200,function(){
				$('.asse_tile').css('display','flex');
			});
			
			//FLASHBOX ASSE INVESTMENT GALLERY
			
			const inv_pic=['img/asse_img/jurgo_alu_000.jpg','img/asse_img/jurgo_alu_001.jpg','img/asse_img/jurgo_alu_002.jpg','img/asse_img/jurgo_alu_003.jpg'];
			
			$('.flashbox').on('click',function(e){
				if(e.target!==this)
				{
					$('.flashbox').css('display','block');
				}
				else
				{
					$('.flashbox').css('display','none');
				}
			});
			
			for(let i=0;i<$('.pic_asse_tile').length;i++)
			{
				$('.pic_asse_tile').eq(i).css('background','url("'+inv_pic[i]+'") center/100% no-repeat');
				$('.pic_asse_tile').eq(i).on('click', function(){
					$('.flashbox').css('display','block');
					$('.flash_desc').css('background','url("img/asse_img/jurgo_alu_00'+i+'.jpg") center/50% no-repeat')
				});				
			}
			for(let q=0;q<$('.flash_pic').length;q++)
			{
				$('.flash_pic').eq(q).css('background','url("img/asse_img/jurgo_alu_00'+q+'.jpg") center/100% no-repeat');
				$('.flash_pic').eq(q).click(function(){
					$('.flash_desc').css('background','url("img/asse_img/jurgo_alu_00'+q+'.jpg") center/50% no-repeat');
				});					
			}			
		}
		
		if($(this).hasClass('sell'))
		{
			$('.sell_desc').stop().animate();
			$('.menu_cont').eq(2).css('display','block');
			$('.sell_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.sell_desc').css('display','block');
			});
		}
		
		if($(this).hasClass('we'))
		{			
			$('.we_desc').stop().animate();
			$('.menu_cont').eq(3).css('display','block');
			$('.we_desc').delay(300).animate({
				height:'70%',
				width:'90%'
			},200,function(){
				$('.we_desc').css('display','block');
			});
		}
	}

	//--===RESPONSIVE_MENU===--//
	
	$('.ham_menu_tile').on('click',responsiveMenu);
	
	function responsiveMenu()
	{
		$('.ham_menu').eq(0).toggleClass('bar_1');
		$('.ham_menu').eq(1).toggleClass('bar_2');
		$('.ham_menu').eq(2).toggleClass('bar_3');
		
		if($('#res_menu').css('display')=='block')
		{
			$('#res_menu').css('display','none');
		}
		else
		{
			$('#res_menu').css('display','block');
		}
	}

	//---==LIGHTBOX_GALLERY==---//

	const gall=['01','02','03','04','05','06','07','08'];

	for(let s=0;s<=$('.gallery').length;s++)
	{
		$('.gallery').eq(s).on('click',function(){
			$('#lightbox').css('display','block');
			$('.lightbox_content').on('click',closeBox);
			$('#img1').html('<img src="img/gallery/'+gall[s]+'/main/JURGO_rusztowania_'+gall[0]+'.jpg" alt="" />');
			mini(s);
		});
	}
		
	function mini(i)
	{
		const small_pic=['min1','min2','min3','min4'];
		$('.bottom_gallery').css('display','block');
		$('.bottom_gallery').html('<div class="slide"><img src="img/gallery/'+gall[i]+'/min/'+small_pic[0]+'.jpg"></div><div class="slide"><img src="img/gallery/'+gall[i]+'/min/'+small_pic[1]+'.jpg"></div><div class="slide"><img src="img/gallery/'+gall[i]+'/min/'+small_pic[2]+'.jpg"></div><div class="slide"><img src="img/gallery/'+gall[i]+'/min/'+small_pic[3]+'.jpg"></div>');
		
		for (let s=0;s<=$('.slide').length;s++)
		{
			$('.slide').eq(s).on('click',function(){
				$('#img1').html('<img src="img/gallery/'+gall[i]+'/main/JURGO_rusztowania_'+gall[s]+'.jpg" alt="" />');
			});
		}
	}

	function closeBox()
	{
		$('#lightbox').css('display','none');
	}
});