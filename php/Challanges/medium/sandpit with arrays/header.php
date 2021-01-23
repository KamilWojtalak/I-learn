<!-- 
    Excercise:
    Scenario: You are working as IT Support for a small high school in your area. The Parents and Community committee has commissioned a small project to help kids in the school work out exactly how much time they're spending in front of the TV, Computer or Video Game Consoles, as well as collect data on how free time is spent.

Creating the form
You've been asked to whip up a prototype form to collect the following info (remember your target audience when labeling your fields!):

First and last name
Number of Years in Business
Year at School (e.g. 7-12)
Number of siblings
At what time do they go to bed, and at what time do they wake up.
Approximate time spent on homework per day
time spent watching TV/DVD etc. per day
Time spent using computer or games console per day
time spent with family per day
time spent with friends per day
You do not necessarily need to make your form pretty or worry about Javascript input validation for the prototype, but it certainly needs to be easy to use.

Processing your form
Your prototype will also require a php script (or server-side language of your choice) to process the info. The P&C committee have asked for the following:

A message saying "Great! Thanks [firstname] for responding to our survey".
A display of the students details formatted suitably (just name, birth-year, current school year and number of siblings)
An email should be sent to a set email address with a subject of, for example, "David Terry's Survey results." and a message that includes the data entered (no need to worry about formatting or headers in the email).
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple form validation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="script.js"></script>
</head>
<body class="bg-secondary text-light">


<header class="header text-light text-center bg-dark">
    <nav class="container">
        <div class="row">
            <h2 class="col-md-1 header__title p-1">Title</h2>
            <ul class="col-md-11 nav justify-content-end align-items-center d-flex flex-column flex-md-row">
                <li class="nav-item p-3">Home</li>
                <li class="nav-item p-3">Services</li>
                <li class="nav-item p-3">Contact</li>
            </ul>
        </div>
    </nav>
</header>


