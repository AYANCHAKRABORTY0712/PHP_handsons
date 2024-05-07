<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .survey-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="survey-form">
    <form action="#" method="POST">
        <h1>Customer Feedback Survey</h1>
        <p>Please let us know about your experience with our product and service.</p>
        <div class="form-group">
            <label class="form-label" for="first-time">Is this the first time you are using our Products and services?</label>
            <select class="form-input" id="first-time" name="first_time">
                <option value="">Please Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Would you recommend it to your friends and colleagues?</label>
            <input type="radio" name="recommend" value="yes"> Yes
            <input type="radio" name="recommend" value="no"> No
        </div>
        <div class="form-group">
            <label class="form-label">Do you have any suggestions to improve our product and service?</label>
            <textarea class="form-input" rows="4" name="suggestion"></textarea>
        </div>
        <button class="form-button" type="submit" name="submit">Submit</button>
        </form>
    </div>

    <?php
        if(isset($_POST["submit"]))
        {
            $ft=$_POST["first_time"];
            $rec=$_POST["recommend"];
            $sugg=$_POST["suggestion"];

            $myfile = fopen("custfb.txt", "a") or die("Unable to open file!");
            $txt = "First Time: $ft, Recommend: $rec, Suggestion: $sugg\n";
            fwrite($myfile, $txt);
            fclose($myfile);
        }
    ?>
</body>
</html>
