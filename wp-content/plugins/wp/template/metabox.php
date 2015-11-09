<div id="team_metabox" data-post-id="<?php echo $post->ID; ?>">
    <div class="team_metabox_body">
        <?php if (is_array($attachments) && count($attachments) > 0): ?>
            <?php foreach ($attachments as $id): ?>
                <div class="photo" data-attachment-id="<?php echo $id; ?>">
                    <a href="#" class="remove-photo">&times;</a>
                    <img src="<?php $attachment = wp_get_attachment_image_src($id, 'thumbnail'); echo $attachment[0] ?>" alt="" />
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
