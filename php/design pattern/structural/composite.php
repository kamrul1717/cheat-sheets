<?php

interface FileSystemComponent {
    public function show(): void;
}

class File implements FileSystemComponent {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function show(): void {
        echo "📄 File: {$this->name}\n";
    }
}


class Folder implements FileSystemComponent {
    private string $name;
    private array $children = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function add(FileSystemComponent $component): void {
        $this->children[] = $component;
    }

    public function show(): void {
        echo "📁 Folder: {$this->name}\n";
        foreach ($this->children as $child) {
            $child->show();
        }
    }
}

// Create files
$file1 = new File("resume.pdf");
$file2 = new File("invoice.docx");
$file3 = new File("photo.jpg");

// Create folders
$root = new Folder("Root");
$documents = new Folder("Documents");
$images = new Folder("Images");

// Build tree
$documents->add($file1);
$documents->add($file2);
$images->add($file3);

$root->add($documents);
$root->add($images);

// Display entire structure
$root->show();


// Output:
/*

📁 Folder: Root
📁 Folder: Documents
📄 File: resume.pdf
📄 File: invoice.docx
📁 Folder: Images
📄 File: photo.jpg

*/


