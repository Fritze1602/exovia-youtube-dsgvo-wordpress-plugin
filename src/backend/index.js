import "./styles.scss"

const $ = window.jQuery;

(function ($) {
    function handleCheckboxChange() {
        if ($('#exovid_enable_info_box').is(':checked')) {
            $('.exovid-marker').css('display', 'none');
            $('.exovid-info-box-dependant').css('display', 'table-row');

        } else {
            $('.exovid-marker').css('display', 'block');
            $('.exovid-info-box-dependant').css('display', 'none');
        }
    }

    $(document).ready(function () {

        $('.color-picker-field').wpColorPicker();
        // $('#exovid_enable_info_box').change(function () {
        //   showNoteIfChecked();
        // })
        $('#exovid_enable_info_box').on("change", () => handleCheckboxChange())
        handleCheckboxChange();

        $('.exovid-hidden').css('display', 'none')

        // Generate an Index for array Length
        const embedLinkOptionsLength = 5
        if ($('#exovid_embed_link_id').val() == "") {
            $('#exovid_embed_link_id').val(Math.floor(Math.random() * embedLinkOptionsLength))
        }
        $('#exovid-language-switch').on('click', () => $(".exovid-lang").toggle(750, 'swing'))
    })

})(jQuery);