<!-- This is a table containing the specified opening hours of the company for each day of the week.
 This table is displayed when the user selects a specific day and clicks the "Display Hours" button.
  The opening hours are displayed on the table after using the switch function to determine
   the hours based on the user's selection. -->
  <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>مواعيد فتح الشركة</title>
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
			color: #555;
		}

		form {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-bottom: 30px;
		}

		label {
			font-size: 16px;
			color: #555;
			margin-right: 10px;
		}

		select {
			width: 200px;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			color: #555;
			font-size: 16px;
			margin-right: 10px;
		}

		button {
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			background-color: #555;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 30px;
		}

		th, td {
			text-align: center;
			padding: 10px;
			border: 1px solid #ddd;
		}

		th {
			background-color: #555;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		@media (max-width: 600px) {
			form {
				flex-direction: column;
				align-items: flex-start;
			}
			select {
				width: 100%;
				margin-bottom: 10px;
			}
			button {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>مواعيد فتح الشركة</h1>
		<form method="POST">
			<label for="days">يرجى اختيار اليوم:</label>
			<select id="days" name="days">
				<option value="Sunday">الأحد</option>
				<option value="Monday">الاثنين</option>
				<option value="Tuesday">الثلاثاء</option>
				<option value="Wednesday">الأربعاء</option>
				<option value="Thursday">الخميس</option>
				<option value="Friday">الجمعة</option>
				<option value="Saturday">السبت</option>
			</select>
			<button type="submit">عرض المواعيد</button>
            <?php 
@$date = $_POST['days'];
$day = @$date;
switch($day){
    case @$date:
        echo "We look forward to seeing you on $day from 8:00 AM to 4:00 PM";
        break;
    case 'Monday':
        echo "We look forward to seeing you on $day from 10:00 AM to 4:00 PM";
        break;

        // in this case we need one echo and tow case 
    case 'Tuesday':
    case 'Wednesday':
            echo "We look forward to seeing you on $day from 7:00 AM to 3:00 PM";
            break;

    case 'Thursday':
            echo "We look forward to seeing you on $day from 6:00 AM to 2:00 PM";
            break;
    case 'Friday':
            echo "We look forward to seeing you on $day from 11:00 AM to 5:00 PM";
            break;
    case 'Friday':
            echo "We look forward to seeing you on $day from 1:00 AM to 8:00 PM";
            break;
    default:
       echo 'We look forward to seeing you  ';
    }    
?>
		</form>
	</div>
</body>
</html>

