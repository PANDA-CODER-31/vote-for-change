<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .cla {
            font-size: larger;
            font-family: cursive;
            font-weight: bolder;
            color: aqua;
        }
    </style>
</head>

<body style="text-align: center;transition: all; background-size: 100%; background-image: url( https://citytoday.news/wp-content/uploads/2017/05/Online-Voting-Button-Follow-My-Vote.jpg);">
    <div class="cla">
        <form action="VOTE.PHP" method="POST">
            <h1>Cast Vote</h1>
            <label for="vote">1. Candidate(1)<br> 2.Candidate(2)<br>3.Candidate(3)<br><br></label>
            <input style="width: 120px;" type="number" id="vote" name="vote" min="1" max="3" placeholder="Type (1/2/3)"><br><br>
            <input style=" color: black;" class="cla" type="submit" value="Submit">

        </form>
    </div>

</body>

</html>