<?php

declare(strict_types=1);

use SmartpingApi\Model\Common\News;

uses()->group('common');

it('should return true when authenticate', function () {
    expect($this->smartping->authenticate())->toBeTrue();
});

it('should return a list of all articles from federation', function() {
    $news = $this->smartping->getFederationNewsFeed();
    expect($news)
        ->toBeArray()
        ->and($news)->not()->toHaveCount(0)
        ->and($news[0])->toBeInstanceOf(News::class);
});
