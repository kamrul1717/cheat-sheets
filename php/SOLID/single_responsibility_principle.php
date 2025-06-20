<?php 

/*
A class should have only one reason to change.
A class should have only one job

Just because you can doesn't mean you should

Cohesion: The extent to which elements in a given class/module are related and relevant to one another

Encapsulation: Attributes and behavior relevant to a given object should be bundled together and hide from outside access

Single Responsibility Principle: A given piece of responsibility should be bundled into a single class and hidden from other elements of the program

If a piece of software has several different kinds of users (aka, actors), then the disparate interests of each of those users defines a piece of that software's responsibilites.

Each of those actors should be able to dictate change in the software without affecting other actors.

Advantages: 
Testing, Lower coupling, Organization
*/

// ❌ Violating SRP
class Report {
    public function generate() {
        // Generate the report
    }

    public function printReport() {
        // Code to format and print report
    }

    public function saveToFile($filename) {
        // Save report to file
    }
}

// ✅ Following SRP
class Report {
    public function generate() {
        // Generate the report content
    }
}

class ReportPrinter {
    public function print(Report $report) {
        // Format and print the report
    }
}

class ReportSaver {
    public function saveToFile(Report $report, $filename) {
        // Save the report to a file
    }
}

