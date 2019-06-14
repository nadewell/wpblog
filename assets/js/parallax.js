jQuery(document).ready(function(){
    var _elem    = jQuery('[data-image]');
    
    _elem.each(function(){
        var _attachment  = jQuery(this).data('attachment');
        var _image = jQuery(this).data('image');
        jQuery(this).css({ 
            'background-image':'url('+_image+')',
            'background-repeat':'no-repeat',
            'background-position':'center',
            'background-size':'cover',
            'background-attachment': _attachment 
        });
    })
});