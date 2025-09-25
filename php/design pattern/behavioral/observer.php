<?php
// Behavioral Design Pattern

/*
The Observer Pattern defines a one-to-many dependency between objects.
When one object (subject) changes its state, all dependent objects (observers) are notified automatically.
*/

/* Step 1: Observer Interface */
interface Subscriber {
    public function update($content);
}

/* Step 2: Concrete Observers */
class EmailSubscriber implements Subscriber {
    public function update($content) {
        echo "Email: New content - $content\n";
    }
}

class SmsSubscriber implements Subscriber {
    public function update($content) {
        echo "SMS: New content - $content\n";
    }
}

/* Step 3: Subject (Publisher) */
class Newsletter {
    private $subscribers = [];

    public function subscribe(Subscriber $subscriber) {
        $this->subscribers[] = $subscriber;
    }

    public function notify($content) {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($content);
        }
    }

    public function publish($content) {
        echo "Publishing: $content\n";
        $this->notify($content);
    }
}

/* Step 4: Client Code */
$newsletter = new Newsletter();
$newsletter->subscribe(new EmailSubscriber());
$newsletter->subscribe(new SmsSubscriber());

$newsletter->publish("Observer Pattern Tutorial");


