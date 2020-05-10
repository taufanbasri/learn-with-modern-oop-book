<?php

require __DIR__.'/Post.php';
require __DIR__.'/Mutator/PostMutator.php';
require __DIR__.'/Mutator/StringMutator.php';

use Mutator\PostMutator;

$post = new Post('Belajar OOP', 'Saya sedang belajar OOP PHP');

$mutator = new PostMutator($post);

echo $mutator->getBoldTitle();
echo '<br>';
echo $mutator->getItalicContent();
