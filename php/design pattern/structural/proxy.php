<?php
interface Image {
    public function display(): void;
}

class RealImage implements Image {
    private string $filename;

    public function __construct(string $filename) {
        $this->filename = $filename;
        $this->loadFromDisk();
    }

    private function loadFromDisk() {
        echo "Loading {$this->filename} from disk...\n";
    }

    public function display(): void {
        echo "Displaying {$this->filename}\n";
    }
}

class ProxyImage implements Image {
    private string $filename;
    private ?RealImage $realImage = null;

    public function __construct(string $filename) {
        $this->filename = $filename;
    }

    public function display(): void {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename); // Lazy load
        }
        $this->realImage->display();
    }
}


$image1 = new ProxyImage("photo1.jpg"); // Does NOT load yet
$image2 = new ProxyImage("photo2.jpg"); // Does NOT load yet

$image1->display(); // Loads now
$image1->display(); // Uses cached object, no reloading

$image2->display(); // Loads now

// Output:
/*
Loading photo1.jpg from disk...
Displaying photo1.jpg
Displaying photo1.jpg
Loading photo2.jpg from disk...
Displaying photo2.jpg
*/
