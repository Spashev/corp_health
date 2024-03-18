<?php

it('returns response 400', function () {
    $response = $this->get('/');

    $response->assertStatus(400);
});
