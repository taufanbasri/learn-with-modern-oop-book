<?php

namespace Mutator;

use PostInterface;

class PostMutator
{

    private $post;
    
    public function __construct(PostInterface $post)
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