<?php
    require_once 'vendor/autoload.php';

    use App\Models\{Job,Project,Printable};

    $jobs = Job::all();
    $projects = Project::all();

    function printElements(Printable $element){
        echo '<li class="work-position">';
        echo '<h5>' . $element->title . '</h5>';
        echo '<p>' . $element->description . '</p>';
        echo '<p>' . $element->getDurationAsString() . '</p>';
        // echo '<h5>' . $element->getTitle() . '</h5>';
        // echo '<p>' . $element->getDescription() . '</p>';
        // echo '<p>' . $element->getDurationAsString() . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    }

    // $job1 = new Job("Php Dev","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $job1->visible=true;
    // $job1->months = 10;

    // $job2 = new Job("Python Dev","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $job2->visible=true;
    // $job2->months = 5;

    // $job3 = new Job("Ruby Dev","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $job3->visible=false;
    // $job3->months = 8;

    // $job4 = new Job("Js Dev","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $job4->visible=true;
    // $job4->months = 11;
    
    // $job5 = new Job("Go Dev","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $job5->visible=false;
    // $job5->months = 6;
    
    // $jobs =[
    //     $job1,
    //     $job3,
    //     $job2,
    //     $job4,
    //     $job5,
    // ];
    
    
    // $project1 = new Project("Project #1","Lorem ipsum dolor sit amet consectetur adipisicing elit");
    // $project1->visible=true;
    // $project1->months = 6;

    // $projects =[
    //     $project1
    // ];