<?php namespace coderepublic\coderepublic\Tests\Models;

use coderepublic\coderepublic\Models\Post;
use PluginTestCase;

class PostTest extends PluginTestCase
{
    public function testCreateFirstPost()
    {
        $post = Post::create(['title' => 'Hi!']);
        $this->assertEquals(1, $post->id);
    }
}