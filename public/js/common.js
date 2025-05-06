$("form.formsubmit").submit(function(e) {

    e.preventDefault();

    var formId = $(this).attr('id');
    var formAction = $(this).attr('action');

    var form_data = new FormData(this);

    $.ajax({
        url: formAction,
        data: new FormData(this),
        async: false,
        dataType: 'json',
        type: 'post',
        beforeSend: function() {
            $('#' + formId + 'Loader').css('display', 'inline-block');
            $('#' + formId + 'Submit').prop('disabled', true);
        },
        error: function(xhr, textStatus) {

            if (xhr && xhr.responseJSON.message) {
                showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
            } else {
                showMsg('error', xhr.status + ': ' + xhr.statusText);
            }

            $('#' + formId + 'Loader').css('display', 'none');
            $('#' + formId + 'Submit').prop('disabled', false);

        },
        success: function(data) {
            showMsg('success', data.message);
            $('form#newsletterSubscribe')[0].reset();
            $('#' + formId + 'Loader').css('display', 'none');
            $('#' + formId + 'Submit').prop('disabled', false);
        },
        cache: false,
        contentType: false,
        processData: false,
        timeout: 5000
    });

});

function sweetAlertMsg(type, msg) {
    if (type == 'success') {
        swal({
            title: 'Success !',
            text: msg,
            icon: "success",
            button: "OK",
            confirmButtonColor: 'red',
            closeOnClickOutside: false
        });
    } else {
        swal({
            title: "Error!",
            text: msg,
            icon: "error",
            button: "Ok",
            dangerMode: true,
            closeOnClickOutside: false
        });
    }
}

function showMsg(type, msg) {
    if (type == 'error') {
        $('.toast-body').html('<i class="fa fa-times-circle red"></i> ' + msg);
    } else if (type == 'success') {
        $('.toast-body').html('<i class="fa fa-check-circle green"></i> ' + msg);
    } else {
        $('.toast-body').html('<i class="fa fa-exclamation-circle warning"></i> ' + msg);
    }

    $(".toast").toast({ delay: 3000 });
    $('.toast').toast('show');
}

$(document).ready(function() {

    $('.toast').mouseleave(function() {
        $('.toast').toast('hide');
    });

});


$(function() {   
    $("input[type='file']").change(function() {      
        var uploadType = $(this).data('type');        
        var dvPreview = $("#" + $(this).data('image-preview'));        
        var isUpdate = $(this).data('isupdate');

                 
        if (typeof(FileReader) != "undefined") {            
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp|.xlsx)$/;             
            $($(this)[0].files).each(function() {               
                var file = $(this);               
                if (regex.test(file[0].name.toLowerCase())) {                  
                    var reader = new FileReader();                  
                    reader.onload = function(e) {                     
                        var img = $("<img />");                     
                        img.attr("style", "width: 100px;border:1px solid #222;margin-right: 13px");                     
                        img.attr("src", e.target.result);                                          
                        if (uploadType == 'multiple') {                         dvPreview.append(img);                      } else {                         dvPreview.html(img);                      }                  
                    }                  
                    reader.readAsDataURL(file[0]);               
                } else {                   alert(file[0].name + " is not a valid image file.");                   return false;                }            
            });         
        } else {             alert("This browser does not support HTML5 FileReader.");          }      
    });   
});

function addToCart() {

    $(".addtocart").click(function(e) {

        e.preventDefault();

        var button = $(this);
        var qty = $('.qty :selected').val();

        if (qty == undefined) {

            qty = $('.qty').val();
        }

        var customRemark = $("#custom_remark").val();

        var remark = "";

        if (customRemark != undefined) {

            remark = customRemark

        }

        $.ajax({
            url: baseUrl + '/add-to-cart',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'product_id': $(this).data('product_id'),
                'qty': qty,
                'remark': remark
            },
            dataType: 'json',
            type: 'post',
            beforeSend: function() {

                button.find('.loader').css('display', 'inline-block');
                button.prop('disabled', true);

            },
            error: function(xhr, textStatus) {

                if (xhr && xhr.responseJSON.message) {
                    showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                } else {
                    showMsg('error', xhr.status + ': ' + xhr.statusText);
                }

                button.find('.loader').css('display', 'none');
                button.prop('disabled', false);
            },
            success: function(data) {

                showMsg('success', data.message);

                button.find('.loader').css('display', 'none');
                button.prop('disabled', false);

                getTotalCartProduct();

                if (button.data('type') == 'buynow') {

                    location.href = baseUrl + "/cart";
                }
            },
            cache: false,
            timeout: 5000
        });

    });

}

function getTotalCartProduct() {

    $.ajax({
        url: baseUrl + '/get-total-cart',
        dataType: 'json',
        type: 'get',
        error: function(xhr, textStatus) {

            if (xhr && xhr.responseJSON.message) {
                showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
            } else {
                showMsg('error', xhr.status + ': ' + xhr.statusText);
            }
        },
        success: function(data) {

            $('#total_cart_product').html(data.total_count);
            $('#total_wishlist').html(data.total_wishlist);

        },
        cache: false,
        timeout: 5000
    });

}


$(".cartqty").change(function(e) {

    e.preventDefault();

    var qty = $(this).val();
    
    var cartId = $(this).parent().parent().find("input[name=cart_id]").val();
    var productId = $(this).parent().parent().find("input[name=product_id]").val();

    $.ajax({
        url: baseUrl + '/update-cart',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'id': cartId,
            'product_id': productId,
            'qty': qty
        },
        dataType: 'json',
        type: 'post',
        error: function(xhr, textStatus) {

            if (xhr && xhr.responseJSON.message) {
                showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
            } else {
                showMsg('error', xhr.status + ': ' + xhr.statusText);
            }
        },
        success: function(data) {

            showMsg('success', data.message);

            location.reload();
        },
        cache: false,
        timeout: 5000
    });

});

$(document).ready(getState);

var stateId = 0;
var cityId = 0;

function getState() {

    $('.country').change(function() {

        stateId = parseInt($(this).data('state_id'));
        cityId = parseInt($(this).data('city_id'));

        $.ajax({
            url: baseUrl + '/get-state?country_id=' + $(this).val(),
            dataType: 'json',
            type: 'get',
            error: function(xhr, textStatus) {

                if (xhr && xhr.responseJSON.message) {
                    showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                } else {
                    showMsg('error', xhr.status + ': ' + xhr.statusText);
                }
            },
            success: function(data) {
                $('.statehtml').fSelect('destroy')
                $('.statehtml').html(data.html);

                $('.statehtml option').each(function() {
                    if (this.value == stateId)
                        $('.statehtml').val(stateId);
                });

                $('.statehtml').fSelect('create');
            },
            cache: false,
            timeout: 5000
        });

    });

}


$(document).ready(getCity);


function getCity() {

    $('.statehtml').change(function() {

        $.ajax({
            url: baseUrl + '/get-city?state_id=' + $(this).val(),
            dataType: 'json',
            type: 'get',
            error: function(xhr, textStatus) {

                if (xhr && xhr.responseJSON.message) {
                    showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                } else {
                    showMsg('error', xhr.status + ': ' + xhr.statusText);
                }
            },
            
            success: function(data) {

                $('.cityHtml').fSelect('destroy');

                $('.cityHtml').html(data.html);

                $('.cityHtml option').each(function() {
                    if (this.value == cityId)
                        $('.cityHtml').val(cityId);
                });

                $('.cityHtml').fSelect('create');
                $('.cityHtml ').parent().find('.fs-label').html('--Select City--');
            },
            cache: false,
            timeout: 5000
        });
    });

}


$(document).ready(productWishlist);

function productWishlist() {

    $('.wishlist').click(function() {

        if (!userLogin) {

            location.href = baseUrl + '/login';
            return false;
        }

        if ($(this).hasClass('active')) {

            showMsg('success', 'Product successfully removed from wishlist.');
            $(this).removeClass('active');

        } else {

            showMsg('success', 'Product Wishlisted successfully.');
            $(this).addClass('active');
        }

        $.ajax({
            url: baseUrl + '/user/profile/wishlist-product',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { "product_id": $(this).data('productid') },
            dataType: 'json',
            type: 'post',
            error: function(xhr, textStatus) {

                if (xhr && xhr.responseJSON.message) {
                    showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
                } else {
                    showMsg('error', xhr.status + ': ' + xhr.statusText);
                }
            },
            success: function(data) {
                if (!data.login) {
                    location.href = baseUrl + '/login';
                }
               
                getTotalCartProduct();
            },
            cache: false,
            timeout: 5000
        });

    });
}


$('.notifyproduct').submit(function(e) {

    e.preventDefault();

    var formId = $(this).attr('id');
    var formAction = $(this).attr('action');
    var productId = $(this).data('productid');

    var form_data = new FormData(this);
    form_data.append("product_id", productId);

    var htmlDiv = $(this);

    $.ajax({
        url: formAction,
        data: form_data,
        async: false,
        dataType: 'json',
        type: 'post',
        beforeSend: function() {
            $('#' + formId + 'Loader').css('display', 'inline-block');
            $('#' + formId + 'Submit').prop('disabled', true);
        },
        error: function(xhr, textStatus) {

            if (xhr && xhr.responseJSON.message) {
                showMsg('error', xhr.status + ': ' + xhr.responseJSON.message);
            } else {
                showMsg('error', xhr.status + ': ' + xhr.statusText);
            }

            $('#' + formId + 'Loader').css('display', 'none');
            $('#' + formId + 'Submit').prop('disabled', false);

        },
        success: function(data) {

            htmlDiv.closest('.notify-form').removeClass('open').addClass('closed');
            htmlDiv.closest('.notify-form').find('p[id="incomplete-label"]').remove();
            htmlDiv.closest('.notify-form').prepend('<p id="complete-label">Thanks You!</p>');
            htmlDiv.closest('.notify-form').find('.notifybtn').addClass('opacity1');

            showMsg('success', data.message);
            $('#' + formId)[0].reset();
            $('#' + formId + 'Loader').css('display', 'none');
        },
        cache: false,
        contentType: false,
        processData: false,
        timeout: 5000
    });


});

// notify me form 
$('.notify-form p#incomplete-label').on('click', function(e) {

    if ($(this).closest('.notify-form').hasClass('closed')) {
        $(this).closest('.notify-form').removeClass('closed').addClass('open');


        setTimeout(() => {
            $(this).closest('.notify-form').find('input[type="email"]').focus()
        }, 1000);

        $(this).closest('.notify-form').find('.notifybtn').removeClass('opacity1');

    }
});


$(document).ready(function() {

    $('img').on("error", function() {
        $(this).attr('src', '../images/no_image.png');
    });

});

function sharePost(type,url){ 
    if(type=='facebook'){
      window.open( 
        "https://www.facebook.com/sharer/sharer.php?url="+url, 
          "_blank", "width=600, height=450"); 
    }else if(type=='twitter'){
      window.open( 
        "https://twitter.com/intent/tweet?url="+url, 
          "_blank", "width=600, height=450"); 
    }else if(type=='linkedin'){
      window.open( 
        "https://www.linkedin.com/shareArticle?mini=true&url="+url, 
          "_blank", "width=600, height=450"); 
    }else if(type=='pinterest'){
      window.open( 
        "https://pinterest.com/pin/create/button/?url="+url, 
          "_blank", "width=600, height=450"); 
    }
    else if(type=='instagram'){
      window.open( 
        "https://www.instagram.com/?url="+url, 
          "_blank", "width=600, height=450"); 
    }
    else if(type=='google'){
      window.open( 
        'https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=Propira&body='+url+'&ui=2&tf=1&pli=1?', 
          "_blank", "width=600, height=450"); 
    }else if(type=='whatsup'){
      var number = '+919694097243';
      var message = url.split(' ').join('%20');
      window.open( 
        "https://wa.me/{$number}?text={$message}" + 'https://propira.com/'+message, 
          "_blank", "width=600, height=450"); 
    }
  }