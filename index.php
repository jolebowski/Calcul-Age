<!doctype html>
<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
    <h3>Calculer l age</h3>
    <form name="frm" method="post" action="">
        <?php
        for ($i = 1; $i <= 31; $i++)
        {
            $arDays[] = $i;
        }

        echo '<select name="day">';
        foreach ($arDays as $option) {
            echo '<option value="'.$option.'">'.$option.'</option>';
        }
        echo '</select>';
        ?>
        <select name="month">
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
            <option value="04">Apr</option>
            <option value="05">May</option>
            <option value="06">Jun</option>
            <option value="07">Jul</option>
            <option value="08">Aug</option>
            <option value="09">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
        </select>
        <?php
        $currentYear = date("Y");
        for ($i = $currentYear; $i >= 1920; $i--)
        {
            $arYears[] = $i;
        }
        echo '<select name="year">';
        foreach ($arYears as $option) {
            echo '<option value="'.$option.'">'.$option.'</option>';
        }
        echo '</select>';
        ?>

        <input type="submit" name="submit" value="Calculer" />
    </form>
    <?php if(isset($_POST['submit'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $birthDate = $day.'-'.$month.'-'.$year;

        $dob = new DateTime($birthDate);

        $interval = $dob->diff(new DateTime);

        echo "<br />";
        echo "Date de naissance le: ".$birthDate;
        echo "<br />";
        echo "Tu as : ".$interval->y." ans";
    }
    ?>
</body>
</html>