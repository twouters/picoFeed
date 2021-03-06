<?php

return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.jsonline.com/news/usandworld/as-many-as-a-million-expected-for-popes-last-mass-in-us-b99585180z1-329688131.html',
            'body' => array(
                '//div[@itemprop="articleBody"]',
            ),
            'strip' => array(
                '//h1',
                '//iframe',
                '//span[@class="mycapture-small-btn mycapture-btn-with-text mycapture-expandable-photo-btn-small js-mycapture-btn-small"]',
                '//div[@class="close-wrap"]',
                '//div[contains(@class,"ui-video-wrapper")]',
                '//div[contains(@class,"media-mob")]',
                '//div[contains(@class,"left-mob")]',
                '//p/strong',
                '//div[contains(@class,"nerdbox")]',
                '//div[contains(@class,"oembed-asset")]',
                '//*[contains(@class,"share")]',
                '//div[contains(@class,"gallery-asset")]',
                '//div[contains(@class,"oembed-asset")]',
                '//div[@class="article-print-url"]',
            ),
        ),
    ),
);
