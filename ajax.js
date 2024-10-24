// get all the internal anchors inside #article
$('#article').each(
    function(){
        //get the href attribute
        href = $(this).attr('href');
        //does it have a href?
        if (href) {
            // does it have an internal anchor?
            if (href.match(/#/i)){
                // append window. location and write back to the href Attribute
                new_href = window.location + href;
                $(this). attr('href', new_href);
            }
        }
    }
);

