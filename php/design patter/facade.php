<?php

// Structural Design Pattern

/* Step 1: Subsystems (complex parts) */

class DVDPlayer {
    public function on() { echo "DVD Player ON\n"; }
    public function play() { echo "Playing movie...\n"; }
}

class Projector {
    public function on() { echo "Projector ON\n"; }
}

class SoundSystem {
    public function on() { echo "Sound System ON\n"; }
}

/*  Step 2: Facade class */
class HomeTheaterFacade {
    private $dvd;
    private $projector;
    private $sound;

    public function __construct() {
        $this->dvd = new DVDPlayer();
        $this->projector = new Projector();
        $this->sound = new SoundSystem();
    }

    public function watchMovie() {
        echo "Getting ready to watch a movie...\n";
        $this->dvd->on();
        $this->projector->on();
        $this->sound->on();
        $this->dvd->play();
    }
}

/* Step 3: Client uses Facade */
$theater = new HomeTheaterFacade();
$theater->watchMovie();

/*
Output:
Getting ready to watch a movie...
DVD Player ON
Projector ON
Sound System ON
Playing movie...
*/

