<?php
// 📘 What is Iterator Design Pattern?
// The Iterator Pattern is a behavioral pattern that:

// ✅ Provides a way to access the elements of a collection sequentially without exposing its underlying representation (like arrays, linked lists, trees).
// ✅ Think of it as a cursor that lets you loop through a data structure in a consistent way.

// 📦 Real-life analogy:

// A TV remote with "Next" and "Previous" buttons to iterate through channels. You don’t need to know how channels are stored inside the TV.

// 🏷️ Key Points
// Hides the internal structure of a collection.

// Allows multiple traversals at the same time.

// Supports iteration in different ways (forward, backward).

// 📝 UML Components
// Iterator – Interface for accessing elements. (next(), hasNext())

// ConcreteIterator – Implements the iterator interface for a specific collection.

// Aggregate – Interface to create an iterator. (getIterator())

// ConcreteAggregate – Implements Aggregate and returns a ConcreteIterator.

// Iterator interface
interface Iterator {
    public function hasNext(): bool;
    public function next();
}

// Aggregate interface
interface Collection {
    public function getIterator(): Iterator;
}

// Concrete Collection
class BookCollection implements Collection {
    private $books = [];

    public function addBook(string $book) {
        $this->books[] = $book;
    }

    public function getIterator(): Iterator {
        return new BookIterator($this);
    }

    public function getBooks(): array {
        return $this->books;
    }
}

// Concrete Iterator
class BookIterator implements Iterator {
    private $collection;
    private $position = 0;

    public function __construct(BookCollection $collection) {
        $this->collection = $collection;
    }

    public function hasNext(): bool {
        return $this->position < count($this->collection->getBooks());
    }

    public function next() {
        return $this->collection->getBooks()[$this->position++];
    }
}

// Usage
$books = new BookCollection();
$books->addBook("Clean Code");
$books->addBook("Design Patterns");
$books->addBook("Refactoring");

$iterator = $books->getIterator();
while ($iterator->hasNext()) {
    echo $iterator->next() . PHP_EOL;
}
