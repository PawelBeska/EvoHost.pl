<section class="vc_rows wpb_rows vc_rows-fluid vc-row-full-width">
    <div class="row">
        <div class="wpb_column col-sm-12">
            <div class="wpb_wrapper">
                <div class="page-top page-880">
                    <div class="message container">
                        <div class="message-intro">
                            <span class="message-line"></span>
                            <p>Witamy w serwisie!</p>
                            <span class="message-line"></span>
                        </div>
                        <form method="post" action="https://css-tricks.com/examples/DragAndDropFileUploading//?" enctype="multipart/form-data" novalidate="" class="box has-advanced-upload">
							<br><br><br><Br><br><Br>
                            <div class="box__input">
                                <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="200" height="40" viewBox="0 0 50 50"><path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z"></path></svg>
                                <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple="">
                                <label for="file" style="color: white;"><strong>Wybierz plik</strong></label><span class="box__dragndrop" style="color: white;"> lub wrzuć go <a style="text-decoration: none;color: #ffffff" href="{{route('remote')}}"><b>zdalnie</b></a></span>.
                                <button type="submit" class="box__button">Upload</button>
                            </div>


                            <div class="box__uploading">Uploading…</div>
                            <div class="box__success">Done! <a href="https://css-tricks.com/examples/DragAndDropFileUploading//?" class="box__restart" role="button">Upload more?</a></div>
                            <div class="box__error">Error! <span></span>. <a href="https://css-tricks.com/examples/DragAndDropFileUploading//?" class="box__restart" role="button">Try again!</a></div>
                            <input type="hidden" name="ajax" value="1"></form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<style>
    .box__dragndrop,
    .box__uploading,
    .box__success,
    .box__error {
        display: none;
    }
    .box.has-advanced-upload {
        max-height: 500px;
        min-height: 500px;
        background-color: #35415242;
        outline: 2px dashed black;
        outline-offset: -10px;
    }
    .box.has-advanced-upload .box__dragndrop {
        display: inline;
    }
    .box.is-uploading .box__input {
        visibility: none;
    }
    .box.is-uploading .box__uploading {
        display: block;
    }
    .box.is-dragover {
        background-color: grey;
    }
    box
    {
        font-size: 1.25rem; /* 20 */
        background-color: #c8dadf;
        position: relative;
        padding: 100px 20px;
    }
    .box.has-advanced-upload
    {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;

        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
    }
    .box.is-dragover
    {
        outline-offset: -20px;
        outline-color: #c8dadf;
        background-color: #fff;
    }
    .box__dragndrop,
    .box__icon
    {
        display: none;
    }
    .box.has-advanced-upload .box__dragndrop
    {
        display: inline;
    }
    .box.has-advanced-upload .box__icon
    {
        width: 100%;
        height: 80px;
        fill: #92b0b3;
        display: block;
        margin-bottom: 40px;
    }
    .box.is-uploading .box__input,
    .box.is-success .box__input,
    .box.is-error .box__input
    {
        visibility: hidden;
    }

    .box__uploading,
    .box__success,
    .box__error
    {
        display: none;
    }
    .box.is-uploading .box__uploading,
    .box.is-success .box__success,
    .box.is-error .box__error
    {
        display: block;
        position: absolute;
        top: 50%;
        right: 0;
        left: 0;

        -webkit-transform: translateY( -50% );
        transform: translateY( -50% );
    }
    .box__uploading
    {
        font-style: italic;
    }
    .box__success
    {
        -webkit-animation: appear-from-inside .25s ease-in-out;
        animation: appear-from-inside .25s ease-in-out;
    }
    @-webkit-keyframes appear-from-inside
    {
        from	{ -webkit-transform: translateY( -50% ) scale( 0 ); }
        75%		{ -webkit-transform: translateY( -50% ) scale( 1.1 ); }
        to		{ -webkit-transform: translateY( -50% ) scale( 1 ); }
    }
    @keyframes appear-from-inside
    {
        from	{ transform: translateY( -50% ) scale( 0 ); }
        75%		{ transform: translateY( -50% ) scale( 1.1 ); }
        to		{ transform: translateY( -50% ) scale( 1 ); }
    }

    .box__restart
    {
        font-weight: 700;
    }
    .box__restart:focus,
    .box__restart:hover
    {
        color: #39bfd3;
    }

    .js .box__file
    {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .js .box__file + label
    {
        max-width: 80%;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        display: inline-block;
    }
    .js .box__file + label:hover strong,
    .box__file:focus + label strong,
    .box__file.has-focus + label strong
    {
        color: grey;
    }
    .js .box__file:focus + label,
    .js .box__file.has-focus + label
    {
        outline: 1px dotted #000;
        outline: -webkit-focus-ring-color auto 5px;
    }
    .js .box__file + label *
    {
        /* pointer-events: none; */ /* in case of FastClick lib use */
    }

    .no-js .box__file + label
    {
        display: none;
    }

    .no-js .box__button
    {
        display: block;
    }
    .box__button
    {
        font-weight: 700;
        color: #e5edf1;
        background-color: #39bfd3;
        display: none;
        padding: 8px 16px;
        margin: 40px auto 0;
    }
    .box__button:hover,
    .box__button:focus
    {
        background-color: #0f3c4b;
    }
</style>
<script>
    $('input.box__file').hide();
    var isAdvancedUpload = function() {
        var div = document.createElement('div');
        return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
    }();
    if (isAdvancedUpload) {

        var droppedFiles = false;

        $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
        })
            .on('dragover dragenter', function() {
                $form.addClass('is-dragover');
            })
            .on('dragleave dragend drop', function() {
                $form.removeClass('is-dragover');
            })
            .on('drop', function(e) {
                droppedFiles = e.originalEvent.dataTransfer.files;
            });

    }
</script>
<section class="vc_rows wpb_rows vc_rows-fluid vc_custom_1445314919990 vc-row-full-width">
    <div class="container">
        <div class="row">
            <div class="wpb_column col-sm-12">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  vc_custom_1445314945384">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: center;"><strong>NAJWIĘCEJ MOŻLIWOŚCI</strong></h2>
                            <p style="text-align: center;">Jesteśmy otwarci na wszelkie propozycje współpracy, masz pytania? Skontaktuj się na wspolpraca@evohost.pl!</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column col-sm-4 vc_custom_1473736800511">
                <div class="wpb_wrapper wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-us-links">
                        <i class="fa fa-database"></i>    <h3>Przestrzenne dyski</h3>
                        <p>Dysponujemy dużą pojemnością na twoje filmy!</p>
                    </div>


                    <div class="about-us-links">
                        <i class="fas fa-server"></i>   <h3>Serwery</h3>
                        <p>Posiadamy szybkie niezawodne serwery.</p>
                    </div>

                </div></div>
            <div class="wpb_column col-sm-4 vc_custom_1473736805335">
                <div class="wpb_wrapper wow zoomIn" data-wow-delay="0.4s">
                    <div class="about-us-links">
                        <i class="fas fa-shield-alt"></i>   <h3>Zabezpieczenia</h3>
                        <p>Chronimy twoje pliki w jak najlepszy sposób, aby twoje dane były bezpieczne.</p>
                    </div>


                    <div class="about-us-links">
                        <i class="fas fa-users"></i>   <h3>Program partnerski</h3>
                        <p>Ciekawy i nowoczesny program partnerski dla firm jak i użytkowników.</p>
                    </div>

                </div></div><div class="last wpb_column col-sm-4 vc_custom_1473736814503"><div class="wpb_wrapper wow fadeInRight" data-wow-delay="0.6s">
                    <div class="about-us-links">
                        <i class="fa fa-code"></i>    <h3>Developer API</h3>
                        <p>Przyjazny system do zarządzania przez programistów.</p>
                    </div>


                    <div class="about-us-links">
                        <i class="fa fa-rocket"></i>    <h3>Kontakt 24/7</h3>
                        <p>Błyskawiczne biuro obsługi klienta.</p>
                    </div>

                </div></div></div></div></section>
<section class="vc_rows wpb_rows vc_rows-fluid vc_custom_1445327064253 vc-row-full-width"><div class="container"><div class="row"><div class="wpb_column col-sm-12"><div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <div class="circle"><i class="fa fa-heart"><b>a</b></i></div>

                        </div>
                    </div>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h2 class="white" style="text-align: center;"><strong>SPRAWDŹ NAS I TY! </strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>