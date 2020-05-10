<?php

namespace Mutator;

use Post;

class PostMutator
{

    private $post;
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getBoldTitle()
    {
        return StringMutator::bold($this->post->getTitle());
    }
    
    public function getItalicContent()
    {
        return StringMutator::italic($this->post->getContent());
    }
}