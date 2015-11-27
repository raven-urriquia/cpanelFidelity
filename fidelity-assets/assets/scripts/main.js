$(document).ready(function(){
	
	redeemPage.redeem();

	punchCard.redeem();

});
	
/*-------  
		redeem.html
		 ---------*/
	var redeemPage = {
		redeem: function(){
			$('.print-code').on('click',function(){
				$('#redeem2').modal({show:true});
			});
			$('.no').on('click',function(){
				$('.modal').modal('hide');
			});
			$('#redeem1').on('show.bs.modal',function(){
					$('body').css('overflow','hidden');
			});
			$('#redeem1').on('hidden.bs.modal',function(){
					$('body').css('overflow','auto');
			});
			$('#redeem2').on('show.bs.modal',function(){
					$('body').css('overflow','hidden');
					$('#redeem1').modal('hide');
			});
			$('#redeem2').on('hidden.bs.modal',function(){
					$('body').css('overflow','auto');
			});
		}
	}
	

	/*---------- punchcard.html ------------*/
	var punchCard = {
		redeem: function(){
			$('.redeemBtn').on('click',function(){
				$('#punchCard2').modal({show:true});
				$('#punchCard1').modal('hide');
			});
			$('.print-code').on('click',function(){
				$('#punchCard2').modal('hide');
				$('#punchCard3').modal('show');
			});


			$('#punchCard2').on('show.bs.modal',function(){
				$('body').css('overflow','hidden');
			});

			$('#punchCard2').on('hidden.bs.modal',function(){
				$('body').css('overflow','auto');
			});

			$('#punchCard3').on('show.bs.modal',function(){
				$('body').css('overflow','hidden');
			});	
			$('#punchCard3').on('hidden.bs.modal',function(){
				$('body').css('overflow','auto');
			});

		}
	}