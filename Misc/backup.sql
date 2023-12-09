ALTER DATABASE vadata CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE link MODIFY COLUMN link_description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE link MODIFY COLUMN link_embed TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO link (link_date, link_embed, link_description) VALUES (
    '2023-12-05',
    '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@the_relationship_memes/video/7306247627371285792" data-video-id="7306247627371285792" style="max-width: 605px;min-width: 325px;" > \
    <section> \
    <a target="_blank" title="@the_relationship_memes" href="https://www.tiktok.com/@the_relationship_memes?refer=embed">@the_relationship_memes</a> relatable! 🥹 ( email for video credit&#47;removal ) \
    <a title="relationship" target="_blank" href="https://www.tiktok.com/tag/relationship?refer=embed">#relationship</a> \
    <a title="relationshipmemes" target="_blank" href="https://www.tiktok.com/tag/relationshipmemes?refer=embed">#relationshipmemes</a> \
    <a title="boyfriend" target="_blank" href="https://www.tiktok.com/tag/boyfriend?refer=embed">#boyfriend</a> \
    <a title="girlfriend" target="_blank" href="https://www.tiktok.com/tag/girlfriend?refer=embed">#girlfriend</a> \
    <a title="memes" target="_blank" href="https://www.tiktok.com/tag/memes?refer=embed">#memes</a> \
    <a target="_blank" title="♬ original sound - the relationship memes" href="https://www.tiktok.com/music/original-sound-7306247641762319137?refer=embed">♬ original sound - the relationship memes</a> \
    </section> \
    </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    'Съем тебя когда-нибудь 😋'
);


