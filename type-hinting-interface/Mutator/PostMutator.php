<?php

namespace Mutator;

use PostInterface;

class PostMutator
{

    private $post;
    
    public function __construct(?PostInterface $post)
    {
        $this->post = $post;
    }

    public function getBoldTitle(): string
    {
        return StringMutator::bold($this->post->getTitle());
    }
    
    public function getItalicContent(): string
    {
        return StringMutator::italic($this->post->getContent());
    }

    public function getOriginalPost(): ? PostInterface
    {
        return $this->post;
    }

    public function noReturnValue(): void
    {
    }
}