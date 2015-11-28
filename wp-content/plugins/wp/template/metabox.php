<div id="team_metabox" data-post-id="<?php echo $post->ID; ?>">
    <div class="team_metabox_body">
        <?php if (is_array($attachments) && count($attachments) > 0): ?>
            <?php foreach ($attachments as $id): ?>
                <?php $data = wp_prepare_attachment_for_js($id); ?>
                <div class="photo" data-attachment-id="<?php echo $id; ?>">
                    <a href="#" class="remove-photo">&times;</a>
                    <a href="<?php echo $data['editLink']; ?>">
                        <img src="<?php $attachment = wp_get_attachment_image_src($id, 'thumbnail'); echo $attachment[0] ?>" alt="" style="width: 100%;height: auto"/>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="team_metabox_footer">
        <button class="button button-primary" id="aboutpage_upload_btn" type="button">
            Upload
        </button>
    </div>
</div>
