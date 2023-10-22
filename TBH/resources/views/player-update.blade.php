<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Style -->
        <link rel="stylesheet" href="css/style.css" />

</head>
<body>
    <img class=page-photo src="images/soccer-1.png">

    <div class=option-nav>Ini Navbar mode</div>

    <div class=container>
        <form>
        <div class=formbox-1>
            <div class="inputbox">
                <h3 class="inputlabel">Name</h3>
                <input type="text" name="name" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Birthday</h3>
                <input type="date" name="bday" placeholder="dd/mm/yyyy" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Birthplace</h3>
                <input type="text" name="bplace" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Height (in cm)</h3>
                <input type="number" name="height" required>
            </div>
</div>
<div class=formbox-2>
            <div class="inputbox">
                <h3 class="inputlabel">Weight (in kg)</h3>
                <input type="number" name="weight" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Position</h3>
                <input type="text" name="position" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Back Number</h3>
                <input type="number" name="backnum" required>
            </div>

            <div class="inputbox">
                <h3 class="inputlabel">Current Team</h3>
                <select id="team" name="team" required></select>
            </div>

            <div class="search-button">
                <button type="submit" class="btn" id="search">Search</button>
            </div>

            </form>
        </div>    
    </div>
</body>
</html>