$(document).ready(function(){
    /*with localhost*/
    //var base_url = 'http://batdongsanvungtau.com.vn/';
    var base_url = 'http://localhost/batdongsan/';
    /*with host*/
    //var base_url = getBase_url();

    var heightScreen = $(document).height();
    var screenCenter = heightScreen - 270;
    $('.home-service-item h1').css({
        height: screenCenter/7,
        lineHeight: screenCenter/7 + 'px'
    });

    /**
     * Email sign up footer
     * Input: email
     */
    $("#email-signup").validate({
        rules:{
            email:{
                required: true,
                email: true,
                remote:{
                    url: base_url + 'kiem-tra-email-sign-up',
                    type:'post',
                    data:{email :function(){return $(':input[name="email"]').val();}}
                }
            }
        } ,
        messages:{
            email:{
                required: 'Vui lòng nhập email',
                email: "Nhập đúng địa chỉ email",
                remote:"Email đã được sử dụng."
            }
        }
    });

    $('.submit-email-signup').click(function(){
        if( !$('.main-form-email-signup label.error').is(':visible') ){
            if( $(':input[name="email"]').val() != '' ){
                $.ajax({
                    type: "POST",
                    url: base_url + 'email-sign-up',
                    data: 'email='+$(':input[name="email"]').val(),
                    success: function(data){
                        $(':input[name="email"]').val('');
                        $('p.notice-msg').html(data);
                    }
                });
            }
        }
    });

    $(':input[name="email"]').keypress(function(){
        $('p.notice-msg').html('');
    });


    $('#search-simple').submit(function(){
        if( $(this).find('input[name="value"]').val() == "" ){return false;}
    });
    
    $(".back-to-top").click(function(){
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
    });

    $(".home-service-item").each(function(){
        var heightItem = $(this).find('h1').height();
        $(this).find('.home-descripton-service').css('height', (heightItem - 10));
    });

    $('.provinces').change(function(){
        var provincesId = $(this).val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getDistrict",
            data: 'provincesId='+provincesId,
            success: function(data){
                $('.district').html('');
                $('.district').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });


    /**
    * Décription: function to load district when select city.
    * Js to load district by estatecity_id
    */
    if( $('#estatecity_id').val() > 0 ){
        var Id = $('#estatecity_id').val();
        var districtSelected = $(':input[name="estatedistrict_selected"]').val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getDistrict",
            data: 'provincesId='+Id+'&districtSelected='+districtSelected,
            success: function(data){
                $('#estatedistrict_id').html('');
                $('#estatedistrict_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    }
    $('#estatecity_id').change(function(){
        var provincesId = $(this).val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getDistrict",
            data: 'provincesId='+provincesId,
            success: function(data){
                $('#estatedistrict_id').html('');
                $('#estatedistrict_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
        $.ajax({
            type: "post",
            url: base_url+"/home/getProject",
            data: 'provincesId='+provincesId,
            success: function(data){
                $('#article_id').html('');
                $('#article_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });

    if( $('#estatecity_id').val() > 0 ){
        var Id = $(':input[name="estatedistrict_selected"]').val();
        var wardSelected = $(':input[name="estateward_selected"]').val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getWard",
            data: 'districtId='+Id+'&wardSelected='+wardSelected,
            success: function(data){
                $('#estateward_id').html('');
                $('#estateward_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    }

    $('#estatedistrict_id').change(function(){
        var districtId = $(this).val();
        var cityId = $('#estatecity_id').val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getWard",
            data: 'districtId='+districtId,
            success: function(data){
                $('#estateward_id').html('');
                $('#estateward_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
        /*jQuery to get project by district*/
        $.ajax({
            type: "post",
            url: base_url+"/home/getProject",
            data: 'provincesId='+cityId+'&districtId='+districtId,
            success: function(data){
                $('#article_id').html('');
                $('#article_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });

    /*Js to load district by estatecity_id*/


    /*Js to load type by estatecatalogue_id*/
    if( $('#estatecatalogue_id').val() > 0 ){
        var Id = $('#estatecatalogue_id').val();
        var typeSelected = $(':input[name="estatetype_selected"]').val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getType",
            data: 'id='+Id+'&typeSelected='+typeSelected,
            success: function(data){
                $('#estatetype_id').html('');
                $('#estatetype_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    }

    $('#estatecatalogue_id').change(function(){
        var Id = $(this).val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getType",
            data: 'id='+Id,
            success: function(data){
                $('#estatetype_id').html('');
                $('#estatetype_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });
    /*Js to load type by estatecatalogue_id*/


    /*Js to load estateprices by estatecatalogue_id*/
    if( $('#estatecatalogue_id').val() > 0 ){
        var Id = $('#estatecatalogue_id').val();
        var priceSelected = $(':input[name="price_selected"]').val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getPrice",
            data: 'id='+Id+'&priceSelected='+priceSelected,
            success: function(data){
                $('#estateprice_id').html('');
                $('#estateprice_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    }

    $('#estatecatalogue_id').change(function(){
        var Id = $(this).val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getPrice",
            data: 'id='+Id,
            success: function(data){
                $('#estateprice_id').html('');
                $('#estateprice_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });
    /*Js to load estateprices by estatecatalogue_id*/


    /*Js to load price by type*/
    $('#estatetype_id').change(function(){
        var typeId = $(this).val();
        $.ajax({
            type: "post",
            url: base_url+"/home/getPriceByType",
            data: 'typeId='+typeId,
            success: function(data){
                $('#estateprice_id').html('');
                $('#estateprice_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    })
    /*Js to load price by type*/


    /*Js to show or hide Area*/
    if($(':radio[name="IsArea"]:checked').val() == 1){
        $('#area_text').attr('disabled', 'disabled');
    }
    else{
        $('#area_text').removeAttr('disabled');
    }
    $(':radio[name="IsArea"]').change(function(){
        if($(this).val() == 1){
            $('#area_text').attr('disabled', 'disabled');
        }
        else{
            $('#area_text').removeAttr('disabled');
        }
    })
    /*Js to show or hide Area*/


    /*Js to show or hide Area*/
    if($(':radio[name="IsPrice"]:checked').val() == 1){
        $('.show-price').hide();
    }
    $(':radio[name="IsPrice"]').change(function(){
        if($(this).val() == 1){
            $('.show-price').hide();
        }
        else{
            $('.show-price').show();
        }
    })
    /*Js to show or hide Area*/


    $('.boxseach input[name="estatecatalogue_id"]').click(function(){
        var id = $(this).val();

        $.ajax({
            type: "post",
            url: base_url+"/home/getTypeByCatagory",
            data: 'cateId='+id,
            success: function(data){
                $('#estatetype_id').html('');
                $('#estatetype_id').append(data);
            },
            error:function(){
                alert("Có lỗi trong quá trình thực hiện. Vui lòng kiểm tra lại");
            }
        });
    });

    $('#area_text').bind("cut copy paste",function(e) {
        e.preventDefault();
    });

    /*Js to validate form when post*/
});

function getBase_url(){
    var pathArray = $(location).attr('href').split( '/' );
    var protocol = pathArray[0];
    var host = pathArray[2];
    var base_url = protocol + '//' + host;
    return base_url;
}
