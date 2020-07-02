<?php

class DevelompmentTools
{
    private $editor;

    public function __construct(CodeEditor $editor)
    {
        $this->editor = $editor;
    }
}

interface CodeEditor
{
    public function version();
}


class VisualStudioCode implements CodeEditor
{
    public function version()
    {
        return "1.46.1";
    }
}

class Sublime implements CodeEditor
{
    public function extension()
    {
        return "3.2.2";
    }
}

new Developer(new VisualStudioCode());
