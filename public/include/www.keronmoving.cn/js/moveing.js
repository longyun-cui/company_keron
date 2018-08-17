
	$('.message_wrap').click(function(){
		$(".shade_box").show(),
		$(".message_wrap,.move_fixed,.wechat_wrap").hide(),
		$('.shade_wrap').animate({
			minHeight:'100%'
		});
		$(".tips").text("");
		$(".message_input").css({"border-color":'#ddd'});
	});
	$('.close').click(function(){
		$(".shade_box").hide(),
		$(".message_wrap,.move_fixed").show(),
		$('.shade_wrap').animate({
			height:'0'
		});
	});
	$('.name').click(function(){
		$(".e-mail").show(),
		$('.name').attr("placeholder","名称")
	});
	$('.wechat_close').click(function(){
		$(".wechat_wrap").hide()
	});
	$('.wechat_a').click(function(){
		$(".wechat_wrap").show()
	});


	$('.moving-option').click(function(){
		$(".moving-box").show();
        $(".from-to-time-box").show();
        $(".storage-box").hide();

        var movingType = $('input[name=moving_type]:checked').val();
        if (movingType == "pet_move") {
            $('.pet-option').click();
        } else if (movingType == "office_move") {
            $('.office-option').click();
		}
		
	});
	$('.special-option').click(function(){
        $(".moving-box").hide();
        $(".moving-type-box").hide();
        $(".from-to-time-box").show();
        $(".storage-box").hide();
	});
    $('.shipping-option').click(function(){
        $(".moving-box").hide();
        $(".moving-type-box").hide();
        $(".from-to-time-box").show();
        $(".storage-box").hide();
    });
	$('.storage-option').click(function(){
        $(".moving-box").hide();
        $(".moving-type-box").hide();
		$(".from-to-time-box").hide();
		$(".storage-box").show();
	});


    $('.house-option').click(function(){
        $(".pet-box").hide();
        $(".office-box").hide();
    });
    $('.mini-option').click(function(){
        $(".pet-box").hide();
        $(".office-box").hide();
    });
    $('.pet-option').click(function(){
        $(".pet-box").show();
        $(".office-box").hide();
    });
    $('.office-option').click(function(){
        $(".office-box").show();
        $(".pet-box").hide();

    });
	

	$(function(){
		$('.name').blur(function(){
			var nameval=$(".name").val();
			if(nameval == ""){
					$(".tips1").text("请提供名称").css({"color":'red',"margin-top":"5px"});
					$(".name").css({"border-color":'red'});
			}else{
					$(".tips1").text("")
					$(".name").css({"border-color":'#ddd'});
				}
			});
		$('.e-mail').blur(function(){
			var emailval=$(".e-mail").val();
			var emailmyreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(emailval == ""||!emailmyreg.test(emailval)){
					$(".tips2").text("请提供一个有效的电邮").css({"color":'red',"margin-top":"5px"});
					$(".e-mail").css({"border-color":'red'});
			}else{
					$(".tips2").text("")
					$(".e-mail").css({"border-color":'#ddd'});
				}
			});			
		$('.phone').blur(function(){
			var phoneval=$(".phone").val();
			var phonemyreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
			if(phoneval == ""||!phonemyreg.test(phoneval)){
					$(".tips3").text("请提供一个有效的电话").css({"color":'red',"margin-top":"5px"});
					$(".phone").css({"border-color":'red'});
			}else{
					$(".tips3").text("")
					$(".phone").css({"border-color":'#ddd'});
				}
			});
		$('.textarea').blur(function(){
			var textareaval=$(".textarea").val();
			if(textareaval == ""){
					$(".tips4").text("将此字段填写完整").css({"color":'red',"margin-top":"5px"});
					$(".textarea").css({"border-color":'red'});
			}else{
					$(".tips4").text("")
					$(".textarea").css({"border-color":'#ddd'});
				}
			});
		$('.login_txtbx').blur(function(){
			var login_txtbx=$(".login_txtbx").val();
			if(login_txtbx == ""||login_txtbx.toUpperCase()!=$("#code").text().toUpperCase()){
					$(".tips5").text("验证码不正确").css({"color":'red',"margin-top":"5px"});
					$(".login_txtbx").css({"border-color":'red'});
			}else{
					$(".tips5").text("")
					$(".login_txtbx").css({"border-color":'#ddd'});
				}
			})								
	
	})
	
	//	 验证码刷新
	function code(){
		var str="qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPLKJHGFDSAZXCVBNM";
		var str1=0;
		for(var i=0; i<4;i++){
			str1+=str.charAt(Math.floor(Math.random()*62)) 
		}
		str1=str1.substring(1);
		$("#code").text(str1);
	}
	code();
	$("#code").click(code);
	
	$(document).ready(function(){
		$("select,input").removeAttr("disabled");
	});
	
	
	var d = new Date();
	$(".getMonth").val(d.getMonth()+1);
	$(".getDate").val(d.getDate());
	$(".getFullYear").val(d.getFullYear());
	
	$("#priceForm").submit(function(e){

        var $language = $('#form-language').val();

		var $captcha = $(".captcha-txt");
		var captcha_txt = $(".captcha-txt").val();
		if(captcha_txt == "" || captcha_txt.toUpperCase() != $("#code").text().toUpperCase())
		{
            if($language == 'en')
			{
				layer.msg('Please select service type.');
                $(".tips5").text("Verification Code is incorrect").css({"color":'red',"margin-top":"5px"});
                $(".captcha-txt").css({"border-color":'red'});
            }
            else
			{
                $(".tips5").text("验证码不正确").css({"color":'red',"margin-top":"5px"});
                $(".captcha-txt").css({"border-color":'red'});
            }
			return;
		}

        var $name = $('input[name=submitted-name]');
        var $first_name = $('input[name=submitted-first-name]');
        var $last_name = $('input[name=submitted-last-name]');
        var $phone = $('input[name=submitted-phone]');
        var $email = $('input[name=submitted-email]');

		var $service = $('input[name=submitted-service]:checked');
		if ($service.length == 0) {
			if($language == 'en') layer.msg('Please select service type.');
			else layer.msg('请选择服务类型');
			return;
		}

		//
		switch($service) {
			case 'moving':
                var submitted_destination_type = $('input[name=moving_destination_type]:checked').next('label').text();
                if (!!submitted_destination_type == false) {
                    if($language == 'en') layer.msg('Please select destination district.');
                    else layer.msg('请选择服务区域');
                    // alert('请选择服务区域');
                    return;
                }

                var movingType = $('input[name=moving_type]:checked').next('label').text();
                layer.msg(movingType);
				if (!!movingType == false) {
                    if($language == 'en') layer.msg('Please select service type.');
                    else layer.msg('请选择服务类型');
					// alert('请选择服务类型');
					return;
				}

				var moving_from_country = $('select[name=moving-from-country]').val();
				if (!!moving_from_country == false) {
                    if($language == 'en') layer.msg('Please select departure country.');
                    else layer.msg('请选择出发地');
					// alert('请选择出发地');
					return;
				}

				var moving_to_country = $('select[name=moving-to-country]').val();
				if (!!moving_to_country == false) {
                    if($language == 'en') layer.msg('Please select destination country.');
                    else layer.msg('请选择目的地');
					// alert('请选择目的地');
					return;
				}
				
			break;
			case 'special-goods':
			case 'shipping':

                var moving_from_country = $('select[name=moving-from-country]').val();
                if (!!moving_from_country == false) {
                    if($language == 'en') layer.msg('Please select departure country.');
                    else layer.msg('请选择出发地');
                    // alert('请选择出发地');
                    return;
                }

                var moving_to_country = $('select[name=moving-to-country]').val();
                if (!!moving_to_country == false) {
                    if($language == 'en') layer.msg('Please select destination country.');
                    else layer.msg('请选择目的地');
                    // alert('请选择目的地');
                    return;
                }

			break;
			case 'storage':
				var storageType = $('#edit-submitted-storage-fields-storage-type-1').next('label').text();
				mailContent.push('存储类型：' + storageType + '<br/>');
				var storageval = $('#storage-location').val();
				if (!!storageval == false) {
                    if($language == 'en') layer.msg('Please select storage city.');
                    else layer.msg('请选择存储地');
					// alert('请选择存储地');
					return;
				}
				var storagename = $('#edit-submitted-storage-name option:selected').text();
			break;
		}

		$.post(
			"message/quote",
			// {subject:'搬家'+email,mailContent:mailContent.join(''),mailTo:'chan.rui@keronmoving.com'},
            $("#priceForm").serialize(),
			function(data){
                if(!data.success) layer.msg(data.msg);
                else
                {
                    layer.msg(data.msg);
                    $("#code").click();
                    $captcha.val('');
                    $name.val('');
                    $first_name.val('');
                    $last_name.val('');
                    $phone.val('');
                    $email.val('');
                    return true;
                }
		},'json');
	});

	$("#contactUsForm").submit(function(e){
		var login_txtbx=$(".login_txtbx").val();
		if(login_txtbx == ""||login_txtbx.toUpperCase()!=$("#code").text().toUpperCase()){
				$(".tips5").text("验证码不正确").css({"color":'red',"margin-top":"5px"});
				$(".login_txtbx").css({"border-color":'red'});
				return;
		}
		var firstname = $('#edit-submitted-first-name').val();
		var lastname = $('#edit-submitted-last-name').val();
		var email = $('#edit-submitted-email').val();
		var phone = $('#edit-submitted-phone-number').val();
		var findWay = $('#edit-submitted-how-did-you-find-us option:selected').text();
		var content = $('#content').val();
		var mailContent = [];
		mailContent.push('名：' + firstname + '<br/>');
		mailContent.push('姓：' + lastname + '<br/>');
		mailContent.push('email：' + email + '<br/>');
		mailContent.push('电话：' + phone + '<br/>');
		mailContent.push('渠道：' + findWay + '<br/>');
		mailContent.push('详细信息：' + content + '<br/>');
		$.post(
			"message/quote",
			{subject:'联系我们'+email,mailContent:mailContent.join(''),mailTo:'chan.rui@keronmoving.com'},
			function(result){
				console.log(result);
				},'json');
		alert('发送成功');
	});
	
	$('#liuyanForm').submit(function(e){
		var name = $('.name.message_input').val();
		var email = $('.e-mail.message_input').val();
		var phone = $('.phone.message_input').val();
		var content = $('.textarea.message_input').val();
		var mailContent = [];
		mailContent.push('姓名：' + name + '<br/>');
		mailContent.push('邮箱：' + email + '<br/>');
		mailContent.push('电话：' + phone + '<br/>');
		mailContent.push('内容：' + content + '<br/>');
		$.post(
			"message/quote",
			{subject:'留言'+email,mailContent:mailContent.join(''),mailTo:'chan.rui@keronmoving.com'},
			function(result){
				console.log(result);
			},'json');
		 	alert('发送成功');
		/*$.ajax('http://localhost:8200/sendEmail', {
		data: {subject:'留言'+email,mailContent:mailContent.join(''),mailTo:'huohuosh1006@gmail.com'},
		dataType: 'jsonp',
		crossDomain: true,
		success: function(result) {
		  console.log(result);
		}	
		});*/
	});
	

	