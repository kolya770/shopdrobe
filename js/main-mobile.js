$(document).ready(function() {
    // TAGS
    var options = {


        // Aligning the text popups
        align: {
            x: 'center', // left, center or right
            y: 'center'  // top,  center or bottom
        },


        // The (relative) offset of the popups in pixels
        offset: {
            left: 0, // horizontal offset
            top: 22  // vertical offset
        },


        // event handlers of the tags
        handlers: {

            //click: 'toggle',

            // For convenience, you can use strings to
            // show, hide and toggle the popups
            mouseenter: 'show',
            mouseleave: 'hide'
        }

    };

    var data = [
        // x and y values can be decimals (0-1)
        {
            x: 239,
            y: 255,

            // (Optional) Set the text of the popup.
            // If omitted, no popup window will appear.
            text: 'Charles Tyrwhitt',

            // (Optional) Set the element?s attributes.
            attributes: {
                //id:    'my-id',
                //class: 'my-class'
            }
        },

        {
            x: 217,
            y: 312,

            text: 'House of Cashmere'
        },

        {
            x: 231,
            y: 459,

            text: 'New & Lingwood'
        },

        {
            x: 192,
            y: 540,

            text: 'Barker'
        }

    ];

    // The magic comes together here
    var tagAncor = $('.taggd');
    var tag = tagAncor.taggd( options, data);


    var isShowed = false;
    tagAncor.click(function(e) {
        if ( ! isShowed) {
            tag.show();
            isShowed = true;
        } else {
            tag.hide();
            isShowed = false;
        }

    });

    var $black_white = $('.black_white'),
        img_width = $('.black_white img').width(),
        init_split = Math.round(img_width/2);

    $black_white.width(init_split);

    $('.before_after_slider').mousemove(function(e){
        var offX  = (e.offsetX || e.clientX - $black_white.offset().left);
        $black_white.width(offX);
    });

    $('.before_after_slider').mouseleave(function(e){
        $black_white.stop().animate({
            width: init_split
        }, 100)
    });
    
    $(".taggd-wrapper").addClass("center-block");
});
