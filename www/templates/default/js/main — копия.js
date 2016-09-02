jQuery(function(){ 
    $(document).on("mouseover", "div.left_side", function () {
        var first = $('.overlay').data('first');
        if ($(this).attr('id') != first) {
            $('img.left_side').addClass('hover');
            $(this).css('cursor', 'pointer');
            $("img.left_side.hover").css('background', 'url("/images/elements/left-hover.png") no-repeat scroll center center rgba(0, 0, 0, 0)');
            $("img.left_side").attr('src', '/images/elements/side.png');
        } else {
            $(this).removeClass('hover');
            $(this).css('cursor', 'default');
        } 
    });
    $(document).on("mouseout", "div.left_side", function () {
        $('img.left_side').removeClass('hover');
        $("img.left_side").attr('src', '/images/elements/side.png');
        $("img.left_side").css('background', 'url("/images/elements/left.png") no-repeat scroll center center rgba(0, 0, 0, 0)');
        
    });

    $(document).on("mouseover", "div.right_side", function () {
        var last = $('.overlay').data('last');
        if ($(this).attr('id') != last) {
            $('img.right_side').addClass('hover');
            $(this).css('cursor', 'pointer');
            $("img.right_side.hover").css('background', 'url("/images/elements/right-hover.png") no-repeat scroll center center rgba(0, 0, 0, 0)');
        } else {
            $(this).removeClass('hover');
            $(this).css('cursor', 'default');
        } 
    });
    $(document).on("mouseout", "div.right_side", function () {
       $('img.right_side').removeClass('hover');
       $("img.right_side").css('background', 'url("/images/elements/right.png")');
    });

    $(document).on("click", "img.toFull", function () {
        var id = $(this).attr('id');
        
        $('.full').fadeIn(100);
        $('.overlay').fadeIn();
        $('#imgfull_'+id).fadeIn();
        $('body').css('overflow', 'hidden');
        $('img.closeBtn').attr('id', id);
        $('div.left_side').attr('id', id);
        $('div.right_side').attr('id', id);
    });

    $(document).on("click", "img.closeBtn", function () {
        var id = $(this).attr('id');
        $('.fullscreen').fadeOut(150);
        $('.full').fadeOut(200);
        $('.overlay').fadeOut();
        $('body').css('overflow', 'auto');
        
        $('img.right_side').removeClass('hover');
        $('img.left_side').removeClass('hover');
    });

    $(document).on("click", "div.right_side", function () {
        var last = $('.overlay').data('last');
        var id = $(this).attr('id');
        if (id != last) {
            var num = $('#imgfull_'+id).data('num');
            $('.imgNum_'+num).fadeOut(100);
            $('.imgNum_'+(num+1)).fadeIn(100);

            var idNext = $('.imgNum_'+(num+1)).data('id');
            $(this).attr('id', idNext);
            var idPrevious = $('.imgNum_'+(num+1)).data('id');
            $('div.left_side').attr('id', idPrevious);
        }
        if (id == (last-1)) {
            $(this).removeClass('hover');
            $(this).css('cursor', 'default');
            $("img.right_side.hover").css('background', 'url("/images/elements/right.png") no-repeat scroll center center rgba(0, 0, 0, 0)');
        }
    });
    
    $(document).on("click", "div.left_side", function () {
        var first = $('.overlay').data('first');
        var id = $(this).attr('id');
        if (id != first) {
            var num = $('#imgfull_'+id).data('num');
            $('.imgNum_'+num).fadeOut(100);
            $('.imgNum_'+(num-1)).fadeIn(100);
            var idPrevious = $('.imgNum_'+(num-1)).data('id');
            $(this).attr('id', idPrevious);

            var idNext = $('.imgNum_'+(num-1)).data('id');
            $('div.right_side').attr('id', idNext);
        } 
        if (id == (first+1)) {
            $(this).removeClass('hover');
            $(this).css('cursor', 'default');
            $("img.left_side.hover").css('background', 'url("/images/elements/left.png") no-repeat scroll center center rgba(0, 0, 0, 0)');
        }
    });
   
});