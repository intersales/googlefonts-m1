/**
 * @category    Intersales
 * @package     js
 * @author     Daniel Rose <dr@intersales>
 */

var GoogleFontPreview = Class.create();
GoogleFontPreview.prototype = {
    initialize : function(fontChooser, preview) {
        this.fontChooser = $(fontChooser);
        this.preview = $(preview);
        this.loadedFonts = new Array();

        this.registerObservers();
        this.refresh();
    }, registerObservers: function() {
        $(this.fontChooser).observe('change', this.refresh.bind(this));
        $(this.fontChooser).observe('keyup', this.refresh.bind(this));
        $(this.fontChooser).observe('keydown', this.refresh.bind(this));
    }, refresh: function() {
        var currentFont = this.fontChooser.value;

        if(this.loadedFonts.indexOf(currentFont) == -1) {
            var head = $$('head')[0];
            var linkTag = new Element('link', {
                'type': 'text/css',
                'rel':  'stylesheet',
                'href': 'http://fonts.googleapis.com/css?family=' + currentFont
            });

            head.appendChild(linkTag);

            this.loadedFonts.push(currentFont);
        }

        this.preview.setStyle({fontFamily: currentFont});
    }
}
