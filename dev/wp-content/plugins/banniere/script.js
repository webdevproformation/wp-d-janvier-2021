(function($){
    $(document).ready(function(){
        // masquer toutes les images sauf la première 
        $("#banniere img")
            .css({ width : "100%" })
            .hide()
            .first()
            .show();
        const max = $("#banniere img").length ; // 2
        let i = 0 ;
        setInterval( function(){
            i++ ;
            if(i === max){
                i = 0 ;
            }
            $("#banniere img").hide().eq(i).show()
        } , 2000)
    })
})(jQuery)