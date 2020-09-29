
// var api_path = "./class/apis.php";

$(document).ready(function() {
    setTimeout(function() {
        var incart = $("#incartCount").val();
        if(incart>0) {
            $("#incart").css({
                'border': '1px solid #fff',
                'padding': '2px'
            });
            $("#incart").html($("#incartCount").val());
        }
    }, 100);
    // $("#afterSuccess").hide();
});
function gotopage(page,id=false) {
    var qString = "";
    if(id) {
        qString = "?action=detail&pid="+id;
    }
    location.href='./'+page+'.php'+qString;
}  

function addtocart(product_id) {

    var url  = "./product.php";
    var data = "action=addtocart&pid="+product_id;
    $.ajax({
        type: "POST",
        url: url,
        data : data,
        // dataType: 'json',
        success: function(res, textStatus, jqXHR) {
            $("#incartCount").val(res);
            $("#incart").html(res);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("error!!!!!!!!!"+errorThrown);
        }
    });
}

function buyNow() {
    gotopage('cart');
}

function placeOrder() {
    var url  = "./product.php";
    var data = "action=placeorder";
    $.ajax({
        type: "POST",
        url: url,
        data : data,
        // dataType: 'json',
        success: function(res, textStatus, jqXHR) {
            // gotopage('cart');

            $("#afterSuccess").show();
            $("#cartText").html('Your Order Placed Successfully !!!');
            $("#cartpage").hide();
            $("#incart").html(''); 
            $("#incart").css('border', 'none');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $("#cartText").html('Something Went Wrong!');
        }
    });
}

function userLogin() {
    var username = $("#username").val();
    var password = $("#password").val();

    var url  = "./login.php";
    var data = "action=login&uname="+username+"&pwd="+password;
    $.ajax({
        type: "POST",
        url: url,
        data : data,
        dataType: 'json',
        success: function(res, textStatus, jqXHR) {
            console.log(res);
            if(res.status== true) {
                loggedIn_user
                gotopage('index');
            } else {
                $("#logintxt").html("** Wrong Credentials !!!");    
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $("#logintxt").html("** Something Went Wrong !!!");
        }
    });
}
