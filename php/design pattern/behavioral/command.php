<?php

interface Command {
    public function execute(): void;
    public function undo(): void;
}

class TextEditor {
    private string $text = "";

    public function addText(string $words) {
        $this->text .= " " . $words;
    }

    public function removeText(string $words) {
        $this->text = preg_replace('/' . preg_quote($words, '/') . '$/', '', $this->text);
    }

    public function getText(): string {
        return trim($this->text);
    }
}

class WriteCommand implements Command {
    private TextEditor $editor;
    private string $words;

    public function __construct(TextEditor $editor, string $words) {
        $this->editor = $editor;
        $this->words = $words;
    }

    public function execute(): void {
        $this->editor->addText($this->words);
    }

    public function undo(): void {
        $this->editor->removeText($this->words);
    }
}

class CommandInvoker {
    private array $history = [];

    public function execute(Command $command): void {
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void {
        $command = array_pop($this->history);
        if ($command) {
            $command->undo();
        }
    }
}

$editor = new TextEditor();
$invoker = new CommandInvoker();

$command1 = new WriteCommand($editor, "Hello");
$command2 = new WriteCommand($editor, "World");

$invoker->execute($command1);
$invoker->execute($command2);

echo $editor->getText() . "\n"; // Hello World

$invoker->undo();
echo $editor->getText() . "\n"; // Hello

// output:
/*
Hello World
Hello
*/
