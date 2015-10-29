$(document).ready(function() {

    var state = "PHONE-PORTRAIT"
    var orientation = "PORTRAIT"

    $("#p-portrait").click(function() {
        resetDevice()
        orientation = "PORTRAIT"
        $("#device").addClass("phone");
        if(state !== "PHONE-PORTRAIT" && orientation !== "PORTRAIT")
        {
            $("#device").addClass("flip-left");
        }
        else
        {
            state = "PHONE-PORTRAIT"
        }
    })

    $("#p-landscape").click(function() {
        resetDevice()
        orientation = "LANDSCAPE"
        $("#device").addClass("phone");
        if(state !== "PHONE-LANDSCAPE")
        {
            if(orientation === "LANDSCAPE")
                $("#device").addClass("flip-right");
            else
                $("#device").addClass("flip-left");
        }
        else
        {
            state = "PHONE-LANDSCAPE"
        }
    })

    $("#t-portrait").click(function() {
        resetDevice()
        orientation = "PORTRAIT"
        $("#device").addClass("tablet");
        if(state !== "TABLET-PORTRAIT" && orientation !== "PORTRAIT")
        {
            $("#device").addClass("flip-left");
        }
        else
        {
            state = "TABLET-PORTRAIT"
        }
    })
    $("#t-landscape").click(function() {
        resetDevice()
        orientation = "LANDSCAPE"
        $("#device").addClass("tablet")
        if(state !== "TABLET-LANDSCAPE")
        {
            if(orientation === "LANDSCAPE")
                $("#device").addClass("flip-left");
            else
                $("#device").addClass("flip-right");
        }
        else
        {
            state = "TABLET-LANDSCAPE"
        }
    })

    $("#desktop").click(function() {
        resetDevice()
        $("#device").addClass("desktop")
        state = "DESKTOP-PORTRAIT"
        orientation = "PORTRAIT"
    })

    function resetDevice() {
        $("#device").removeClass();
    }
});