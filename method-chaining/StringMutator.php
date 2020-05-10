<?php

class StringMutator
{
    private $word;

    public function __construct($word)
    {
        $this->word = $word;
    }

    public function bold()
    {
        $this->word = sprintf('<b>%s</b>', $this->word);

        return $this;
    }

    public function underline()
    {
        $this->word = sprintf('<u>%s</u>', $this->word);

        return $this;
    }

    public function italic()
    {
        $this->word = sprintf('<i>%s</i>', $this->word);
        
        return $this;
    }

    public function strike()
    {
        $this->word = sprintf('<strike>%s</strike>', $this->word);
        
        return $this;
    }
    
    public function __toString()
    {
        return $this->word;
    }
}

echo (new StringMutator('Tebal'))->bold();
echo '<br/>';
echo (new StringMutator('Tebal dan Miring'))->bold()->italic();
echo '<br/>';
echo (new StringMutator('Tebal, Miring, dan Garis Bawah'))->bold()->italic()->underline();
echo '<br/>';
echo (new StringMutator('Dicoret'))->strike();
echo '<br/>';