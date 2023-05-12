ClassicEditor.create( document.querySelector( '#editor' ), {
    ckbox: {
        tokenUrl: 'https://97601.cke-cs.com/token/dev/x2gqxwqar6GLf7DfLzw1cRdlpxkcaIpJilyb?limit=10',
    },
    toolbar: [
        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
    ],
} )
.catch( error => {
    console.error( error );
} );