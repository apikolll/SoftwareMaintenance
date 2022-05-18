<?php

		/*echo "<table style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

		class TableRows extends RecursiveIteratorIterator
		{
			function __construct($it)
			{
			parent::__construct($it, self::LEAVES_ONLY);
			}

			function current() {
					return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
			}

			function beginChildren() {
					echo "<tr>";
			}

			function endChildren() {
					echo "</tr>" . "\n";
			}
		}*/


	$conn = mysqli_connect("localhost", "root", "", "lms_db");

	if(!$conn)
	{
		die(" Connection Error ");
	}


		$sql = "SELECT ISBN, Book_title, Book_author, Book_rating FROM book"

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0)
		{
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result))
				{
        	echo "ISBN No. " . $collumn["ISBN"]. "Book Title" . $column["Book_title"]. "Book Author" . $column["Book_author"]. "Rating" . $column["Book_rating]. "<br>";
					header("location:../../../GenerateReport/BookReport.php");
				}
		}
		else
		{
					echo "0 results";
					header("location:../../../GenerateReport/BookReport.php");
		}

		mysqli_close($conn);
?>
