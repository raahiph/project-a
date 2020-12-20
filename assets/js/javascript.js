// Smooth scrolling using jQuery easing
$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: (target.offset().top - 57)
            }, 1000, "easeInOutExpo");
            return false;
        }
    }
});

// Scroll to top button appear
$(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
    } else {
        $('.scroll-to-top').fadeOut();
    }
});

// Next and Previous Buttons

// Step 1

$("#nextStep1").click(function() {

    $('#alertBox-1 div').remove();

    var firstname = $("#firstName").val();
    var lastname = $("#lastName").val();
    var firstname = $("#firstName").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();

    var errorMsg = "<div class=\"col\">\n" +
        "\t<div class=\"alert red d-flex justify-content-between\">\n" +
        "\t\t<span class=\"\">Please fill all the fields</span>\n" +
        "\t\t<a href=\"\" class=\"close-btn\"><i class=\"fa fa-close\"></i></a>\n" +
        "\t</div>\n" +
        "</div>";


    if (firstname == "" || lastname == "" || mobile == "" || email == "") {
        $('#alertBox-1').append(errorMsg);
    } else {;
        $("#step-2").attr("style", "display:block");

        $('html, body').animate({
            scrollTop: $("#step-2").offset().top
        }, 1000);
    }

});

// Step 2

$("#nextStep2").click(function() {

    $('#alertBox-2 div').remove();

    var errorMsg = "<div class=\"col\">\n" +
        "\t<div class=\"alert red d-flex justify-content-between\">\n" +
        "\t\t<span class=\"\">No files Selected</span>\n" +
        "\t\t<a href=\"\" class=\"close-btn\"><i class=\"fa fa-close\"></i></a>\n" +
        "\t</div>\n" +
        "</div>";

    if ($('#uploadPhotos').get(0).files.length === 0) {
        $('#alertBox-2').append(errorMsg);
    } else {
        $("#step-3").attr("style", "display:block");

        $('html, body').animate({
            scrollTop: $("#step-3").offset().top
        }, 1000);
    }

});

$("#prevStep2").click(function() {
    $("#step-2").attr("style", "display:none");

    $('html, body').animate({
        scrollTop: $("#step-1").offset().top
    }, 1000, "easeInOutExpo");
});

// Step 3

$("#nextStep3").click(function() {

    $('#alertBox-3 div').remove();

    var size = $("input[name=size]").is(":checked");
    var paper = $("input[name=paper]").is(":checked");
    var style = $("input[name=style]").is(":checked");
    var border = $("input[name=border]").is(":checked");

    var errorMsg = "<div class=\"col\">\n" +
        "\t<div class=\"alert red d-flex justify-content-between\">\n" +
        "\t\t<span class=\"\">Please select all the options</span>\n" +
        "\t\t<a href=\"\" class=\"close-btn\"><i class=\"fa fa-close\"></i></a>\n" +
        "\t</div>\n" +
        "</div>";



    if (size == false || paper == false || style == false || border == false) {
        $('#alertBox-3').append(errorMsg);
    } else {
        $("#step-4").attr("style", "display:block");

        $('html, body').animate({
            scrollTop: $("#step-4").offset().top
        }, 1000, "easeInOutExpo");
    }

});

$("#prevStep3").click(function() {
    $("#step-3").attr("style", "display:none");

    $('html, body').animate({
        scrollTop: $("#step-2").offset().top
    }, 1000, "easeInOutExpo");
});

// Step 4

$("#nextStep4").click(function() {

    $('#alertBox-4 div').remove();

    var delivery = $("input[name=delivery]:checked").val();
    var address = $("#address").val();
    var location = $("input[name=location]").is(":checked");

    var errorMsg = "<div class=\"col\">\n" +
        "\t<div class=\"alert red d-flex justify-content-between\">\n" +
        "\t\t<span class=\"\">Please fill all the options</span>\n" +
        "\t\t<a href=\"\" class=\"close-btn\"><i class=\"fa fa-close\"></i></a>\n" +
        "\t</div>\n" +
        "</div>";


    if (delivery == "Pickup" && location == true) {
        $("#step-5").attr("style", "display:block");

        $('html, body').animate({
            scrollTop: $("#step-5").offset().top
        }, 1000, "easeInOutExpo")
    } else if (delivery == "DoorStep" && address !== "") {
        $("#step-5").attr("style", "display:block");

        $('html, body').animate({
            scrollTop: $("#step-5").offset().top
        }, 1000, "easeInOutExpo");
    } else {
        $('#alertBox-4').append(errorMsg);
    }

});

$("#prevStep4").click(function() {
    $("#step-4").attr("style", "display:none")

    $('html, body').animate({
        scrollTop: $("#step-3").offset().top
    }, 1000, "easeInOutExpo");
});

// Step 5

$("#prevStep5").click(function() {
    $("#step-5").attr("style", "display:none")

    $('html, body').animate({
        scrollTop: $("#step-4").offset().top
    }, 1000, "easeInOutExpo");
});


// Delivery Method (Step4)

$('input:radio[name="delivery"]').change(
    function(){
        if (this.checked && this.value == 'Pickup') {
            $("#store").attr("style", 'display:block')
            $("#door").attr("style", 'display:none')
        } else {
            $("#store").attr("style", 'display:none')
            $("#door").attr("style", 'display:block')
        }
    });


// Order Summary

$("#nextStep4").click(function () {
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();

    var photos = $("[name='uploadPhotos[]']");
    var photosCount = $(photos[0]).prop('files').length;

    var size = $("input[name=size]:checked").val();
    var paper = $("input[name=paper]:checked").val();
    var style = $("input[name=style]:checked").val();
    var border = $("input[name=border]:checked").val();

    var delivery = $("input[name=delivery]:checked").val();



    $("#cusName").text(firstName + " " + lastName);
    $("#sumMobile").text(mobile);
    $("#sumEmail").text(email);

    $("#sumPhoto").text(photosCount);
    $("#sumSize").text(size);
    $("#sumType").text(paper);
    $("#sumStyle").text(style);
    $("#sumBorder").text(border);

    if (delivery == "DoorStep") {
        var address = $("#address").val();
        $("#sumMethod").text("Address: " + address);
    } else if (delivery == "Pickup") {
        var location = $("input[name=location]:checked").val();
        $("#sumMethod").text("Pick up from " + location + " store");
    }

    // Total Amount

    var threeR = 7.85;
    var fourR = 10.90;
    var fiveR = 16.00;
    var sixR = 32.50;
    var sixRW = 38.00;
    var eightR = 54.00;
    var eightRW = 85.00;
    var total = 0;


    if (size == "3R") {
        total = photosCount * threeR;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "4R") {
        total = photosCount * fourR;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "5R") {
        total = photosCount * fiveR;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "6R") {
        total = photosCount * sixR;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "6RW") {
        total = photosCount * sixRW;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "8R") {
        total = photosCount * eightR;
        $("#sumTotal").text(total.toFixed(2));
    } else if (size == "8RW") {
        total = photosCount * eightRW;
        $("#sumTotal").text(total.toFixed(2));
    }

});

// Upload photos file input field

$(document).ready(function() {
    $('#uploadPhotos').change(function(){
        var photos = $("[name='uploadPhotos[]']");
        var photosCount = $(photos[0]).prop('files').length;

        if (photosCount > 1) {
            $("#numPhotos").text(photosCount + " photos selected");
        } else {
            $("#numPhotos").text(photosCount + " photo selected");
        }

    });
});

// Upload transfer slip  file input field

$(document).ready(function() {
    $('#transferSlip').change(function(e){
        var slipName = e.target.files[0].name;

        $("#slipName").text('" ' + slipName + ' "' + " attached");


    });
});

// Alert Boxes Close Functions

$('#alertBox-1').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$('#alertBox-2').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$('#alertBox-3').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$('#alertBox-4').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$('#alertBox-5').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

$('#alertBox-6').on('click', '.close-btn', function (e) {
    e.preventDefault();
    $(this).parent().remove();
});

// Form Submit

$('#printForm').submit(function (e) {

    $('#alertBox-6 div').remove();

    var slip = $("[name='transferSlip[]']");
    var slipCount = $(slip[0]).prop('files').length;

    var errorMsg = "<div class=\"col\">\n" +
        "\t<div class=\"alert red d-flex justify-content-between\">\n" +
        "\t\t<span class=\"\">Please attach transfer slip</span>\n" +
        "\t\t<a href=\"\" class=\"close-btn\"><i class=\"fa fa-close\"></i></a>\n" +
        "\t</div>\n" +
        "</div>";

    if (slipCount <= 0) {
        $('#alertBox-6').append(errorMsg);
        e.preventDefault();

    } else {
        e.preventDefault();
        // Show full page LoadingOverlay

        $.LoadingOverlay("show");

        var form = document.getElementById('printForm');
        var formData = new FormData(form);


        var xhr = new XMLHttpRequest();
        // Add any event handlers here...
        xhr.open('POST', 'submit.php', true);
        xhr.send(formData);


        // Hide it after 3 seconds
        setTimeout(function () {
            $.LoadingOverlay("hide");
        }, 3000);

    }
});


