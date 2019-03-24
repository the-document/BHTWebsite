$( document ).ready(function() {
    console.log( "document loaded" );
    

    $('#post-editor').trumbowyg({
        btnsDef: {
            // Customizables dropdowns
            image: {
                dropdown: ['insertImage', 'upload', 'base64', 'noEmbed'],
                ico: 'insertImage'
            }
        },
        btns: [
            ['viewHTML'],
            ['undo', 'redo'],
            ['formatting'],
            ['strong', 'em', 'del'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['link'],
            ['image'],
            ['btnGrp-lists'],
            ['foreColor', 'backColor'],
            ['preformatted'],
            ['highlight'],
            ['horizontalRule'],
            ['preview'],
            ['fullscreen']
        ],
    });

});

// function sendPost () {

// }
