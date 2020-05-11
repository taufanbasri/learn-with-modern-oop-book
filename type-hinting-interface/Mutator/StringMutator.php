<?php

namespace Mutator;

class StringMutator
{
    public static function bold(string $word): string
    {
        return sprintf('<b>%s</b>', $word);
    }

    public static function underline(string $word): string
    {
        return sprintf('<u>%s</u>', $word);
    }

    public static function italic(string $word): string
    {
        return sprintf('<i>%s</i>', $word);
    }

    public static function strike(string $word): string
    {
        return sprintf('<strike>%s</strike>', $word);
    }
}