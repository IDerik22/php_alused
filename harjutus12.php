<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <script>
        function calculateDriveTime() {
            var startTime = document.getElementById("startTime").value;
            var endTime = document.getElementById("endTime").value;

            if (startTime.length < 5 || endTime.length < 5) {
                alert("Please enter a valid start and end time (format: hh:mm)");
                return;
            }

            var startHours = parseInt(startTime.substring(0, 2));
            var startMinutes = parseInt(startTime.substring(3, 5));
            var endHours = parseInt(endTime.substring(0, 2));
            var endMinutes = parseInt(endTime.substring(3, 5));

            var totalStartMinutes = startHours * 60 + startMinutes;
            var totalEndMinutes = endHours * 60 + endMinutes;

            var totalDriveTimeMinutes = totalEndMinutes - totalStartMinutes;
            var totalDriveTimeHours = Math.floor(totalDriveTimeMinutes / 60);
            totalDriveTimeMinutes = totalDriveTimeMinutes % 60;

            document.getElementById("driveTime").innerHTML = totalDriveTimeHours + " hours and " + totalDriveTimeMinutes + " minutes";
        }
    </script>



            <div class="container mt-5">
                <h1 class="text-center">Töötajat palga arvutamine</h1>
                <?php
                $file = fopen("tootajad.csv", "r");
                $header = fgets($file);
                $male_salaries = [];
                $female_salaries = [];
                while (!feof($file)) {
                    $line = fgets($file);
                    $row = explode(";", $line);
                    if (isset($row[1])) {
                        if ($row[1] == "m") {
                            array_push($male_salaries, strval($row[2]));
                        } else if ($row[1] == "n") {
                            array_push($female_salaries, strval($row[2]));
                        }
                    }
                }
                fclose($file);


                $male_average = array_sum($male_salaries) / count($male_salaries);
                $female_average = array_sum($female_salaries) / count($female_salaries);
                $male_highest = max($male_salaries);
                $female_highest = max($female_salaries);
                ?>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Gender</th>
                            <th>Average Salary</th>
                            <th>Highest Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Male</td>
                            <td>
                                <?php echo "$" . number_format($male_average, 2); ?>
                            </td>
                            <td>
                                <?php echo "$" . $male_highest; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Female</td>
                            <td>
                                <?php echo "$" . number_format($female_average, 2); ?>
                            </td>
                            <td>
                                <?php echo "$" . $female_highest; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
</body>

</html>