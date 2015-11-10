$(document).ready(function() {
    $('#fullpage').fullpage({
        //Navigation
        menu: false,
        lockAnchors: false,
        anchors:['main', 'poll', 'look', 'explore', 'choose-wisely'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['main', 'poll', 'look', 'explore', 'choose-wisely'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'left',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        //sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
            console.log('leave' + index);

            if (index == 2) {
                $('#photo1').animate({
                    left: "-=10%",
                    top: "-=10%"

                }, 1200 );
                $('#photo2').animate({
                    left: "-=10%",
                    top: "-=-10%"

                }, 1200 );
            }

            if (index == 3) {
                $("#coat").animate({
                    left: "-=7%"
                }, 1200 );

                $("#shoes").animate({
                    bottom: "-=8%"
                }, 1200 );

                $("#shirt").animate({
                    right: "-=7%",
                    top: "-=-5%"
                }, 1200 );

                $("#pants").animate({
                    right: "-=10%",
                    bottom: "-=8%"
                }, 1200 );
            }

            if (index == 4) {
                $('.question').animate({
                    left: "-=10%",
                    top: "-=-8%"
                }, 1200 );
            }
        },
        afterLoad: function(anchorLink, index){
            if (anchorLink == 'look') {
                $("#coat").animate({
                    left: "-=-7%"
                }, 1200 );

                $("#shoes").animate({
                    bottom: "-=-8%"
                }, 1200 );

                $("#shirt").animate({
                    right: "-=-7%",
                    top: "-=5%"
                }, 1200 );

                $("#pants").animate({
                    right: "-=-10%",
                    bottom: "-=-8%"
                }, 1200 );
            }

            if (anchorLink == 'explore') {
                $('.question').animate({
                    left: "-=-10%",
                    top: "-=8%"
                }, 1200 );
            }

            if (anchorLink == 'poll') {
                $('#photo1').animate({
                    left: "-=-10%",
                    top: "-=-10%"

                }, 1200 );
                $('#photo2').animate({
                    left: "-=-10%",
                    top: "-=10%"

                }, 1200 );
            }

        },
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){

        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });

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

            // Any vanilla JavaScript event is a valid key
            click: function(e) {
                //alert('You clicked a button');

                this; // the DOM Node
                e;    // the Event
            },


            // For convenience, you can use strings to
            // show, hide and toggle the popups
            mouseenter: 'show',
            mouseleave: 'hide'
        }

    };

    var data = [
        // x and y values can be decimals (0-1)
        {
            x: 245,
            y: 255,

            // (Optional) Set the text of the popup.
            // If omitted, no popup window will appear.
            text: 'Charles Tyrwhitt',

            // (Optional) Set the element�s attributes.
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
            x: 232,
            y: 460,

            text: 'New & Lingwood'
        },

        {
            x: 192,
            y: 540,

            text: 'Barker'
        },

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
});