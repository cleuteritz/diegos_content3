<?php

// Define a class for representing a person
class Person {
    // Define properties
    private $name;
    private $age;
    private $occupation;
    private $bio;

    // Constructor method
    public function __construct($name, $age, $occupation, $bio) {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
        $this->bio = $bio;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getOccupation() {
        return $this->occupation;
    }

    public function getBio() {
        return $this->bio;
    }

    // Setter methods (not used in this example, but included for completeness)
    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setOccupation($occupation) {
        $this->occupation = $occupation;
    }

    public function setBio($bio) {
        $this->bio = $bio;
    }

    // Method to display information
    public function displayInfo() {
        echo "<h1>About Me</h1>";
        echo "<p>Name: " . $this->getName() . "</p>";
        echo "<p>Age: " . $this->getAge() . "</p>";
        echo "<p>Occupation: " . $this->getOccupation() . "</p>";
        echo "<p>Bio: " . $this->getBio() . "</p>";
    }
}

// Create an instance of the Person class
$person = new Person("Diego Garcia", 20, "Photographer", "As a Rhode Island native, my childhood dream of becoming a YouTuber took a backseat to academic priorities. Transitioning from a focus on kinesiology, I found my true calling in photography during my free time. Being an avid sports enthusiast, my passion for media blossomed, prompting me to take a leap of faith into the realm of sports media. In my sophomore year, I delved into various photography categories, immersing myself in the boundless possibilities that the camera offered. Since this pivotal shift, I've dedicated countless hours to capturing, editing, and photographing for clients and organizations alike. Above all, my enthusiasm shines through, and there's nothing that brings me greater joy than providing top-notch service to clients, offering them the optimal platform to express themselves in any capacity.");

// Display information about the person
$person->displayInfo();

?>