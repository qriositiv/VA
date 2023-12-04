ALTER DATABASE vadata CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE link MODIFY COLUMN link_embed LONGTEXT;

INSERT INTO link (link_date, link_embed, link_description)
VALUES (
    '2023-12-04',
    '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@yummy_maki/video/7301274805423082757" data-video-id="7301274805423082757" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@yummy_maki" href="https://www.tiktok.com/@yummy_maki?refer=embed">@yummy_maki</a> <!-- ... rest of the HTML ... --> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    'Угощу тебя суши на этой неделе ❤️'
);
INSERT INTO link (link_date, link_embed, link_description)
VALUES (
    '2023-12-05',
    '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@f.o.t.g.m/video/7302688343257615647" data-video-id="7302688343257615647" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@f.o.t.g.m" href="https://www.tiktok.com/@f.o.t.g.m?refer=embed">@f.o.t.g.m</a> <p></p> <a target="_blank" title="♬ original sound - F.O.T.G.M." href="https://www.tiktok.com/music/original-sound-7302688439558867742?refer=embed">♬ original sound - F.O.T.G.M.</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    'Хочешь, буду так же за тобой бегать 😂?'
);

