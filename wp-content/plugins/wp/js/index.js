;(function ($, ajaxUrl, undefined) {


    $(document).ready(function () {
        var frame,
            media = window.wp.media,
            $container = $('#team_metabox'),
            $uploadButton = $('#aboutpage_upload_btn'),
            $containerBody = $('.team_metabox_body'),
            $initialPhotos = $('.photo'),
            postId = $container.data('post-id');

        frame = media({
            title: 'Select images to use',
            multiple: true,
            button: {
                text: 'Select'
            }
        });

        frame.on('select', onAttachmentsSelected);

        $uploadButton.on('click', onUploadButtonClick);
        $initialPhotos.find('.remove-photo').on('click', removePhoto);


        function onUploadButtonClick(e) {
            e.preventDefault();

            frame.open();
        }

        function onAttachmentsSelected() {
            var attachments = frame.state().get('selection').toJSON();

            $(attachments).each(drawAttachmentPreview);

            $.post(ajaxUrl, {
                action: 'aboutUs.attach',
                attachments: attachments,
                post_id: postId
            }).done(function (response) {
                if (!response.success) {
                    alert(response.data.message);

                    return;
                }
            });
        }

        function removePhoto() {
            var $photo = $(this).parents('.photo');

            if (confirm('Are you sure?')) {

                $.post(ajaxUrl, {
                    action: 'aboutUs.remove',
                    post_id: postId,
                    attachment_id: $photo.data('attachment-id')
                }).done(function (response) {
                    if (!response.success) {
                        alert(response.data.message);

                        return;
                    }

                    $photo.remove();
                });
            }

            return false;
        }

        function drawAttachmentPreview(index, attachment) {
            var $photo = $('<div/>', { class: 'photo' }).attr('data-attachment-id', attachment.id),
                $edit  = $('<a/>', { href: attachment.editLink }),
                $image = $('<img/>', { src: attachment.sizes.full.url }),
                $cross = $('<a/>', { href: '#', class: 'remove-photo' }).html('&times;').on('click', removePhoto);

            $image.appendTo($edit);

            $photo.append($cross).append($edit).appendTo($containerBody);
        }
    });

}(window.jQuery, window.ajaxurl));
