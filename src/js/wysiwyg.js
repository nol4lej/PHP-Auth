DecoupledEditor
    .create( document.querySelector( '.document-editor__editable' ), {
        cloudServices: {
            // A configuration of CKEditor Cloud Services.
            // ...
        }
    } )
    .then( editor => {
        const toolbarContainer = document.querySelector( '.document-editor__toolbar' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );

        window.editor = editor;
    } )
    .catch( err => {
        console.error( err );
    } );