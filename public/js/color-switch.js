$(window).load(function(){

    $("#switch").attr("style","right:0px;")
    
    stylePath="css/style.css";
    componentsPath="css/components.css";
    
    $("#yellow").click(function(){
        $('head').append('<link rel="stylesheet" type="text/css" href="css/style.css">');
        $('head').append('<link rel="stylesheet" type="text/css" href="css/components.css">');
    });

    $("#blue").click(function(){
        $('head').append('<link rel="stylesheet" type="text/css" href="css/style-blue.css">');
        $('head').append('<link rel="stylesheet" type="text/css" href="css/components-blue.css">');
    });

    $("#red").click(function(){
        $('head').append('<link rel="stylesheet" type="text/css" href="css/style-red.css">');
        $('head').append('<link rel="stylesheet" type="text/css" href="css/components-red.css">');
    });

    $("#green").click(function(){
        $('head').append('<link rel="stylesheet" type="text/css" href="css/style-green.css">');
        $('head').append('<link rel="stylesheet" type="text/css" href="css/components-green.css">');
    });
    
});