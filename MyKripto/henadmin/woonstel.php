<?php include 'layouts/session.php'; ?><?php include 'layouts/head-main.php'; ?>
<!DOCTYPE html>
<html>
<head>
	
	<style>
	       /* CSS code for the table */
	      
           .hidden {
            display: none;
        }
        .success, .error {
            display: none;
        }
	       table {
	           font-family: 'Comic Sans MS', cursive, sans-serif;
	           border-collapse: separate;
	           border-spacing: 10px;
	           width: 70%;
	           margin: auto;
	            margin: 100px auto 0;
	           border: 2px solid #ddd;
	           
	       }

	       td, th {
	   border: 1px solid #ddd;
	   padding: 12px;
	   text-align: left;
	   border-radius: 10px;
	   font-size: 20px;
	}


	       tr:first-child th:first-child {
	           border-top-left-radius: 10px;
	       }

	       tr:first-child th:last-child {
	           border-top-right-radius: 10px;
	       }

	       tr:last-child td:first-child {
	           border-bottom-left-radius: 10px;
	       }

	       tr:last-child td:last-child {
	           border-bottom-right-radius: 10px;
	       }

	       th {
	           background-color: #4CAF50;
	           color: white;
	       }

	       tr:nth-child(even) {
	           background-color: #f2f2f2;
	       }

	       tr:nth-child(odd) {
	           background-color: #F5DEB3;
	       }

	       tr:nth-child(3n+1) {
	           background-color: #FFC0CB;
	       }

	       tr:nth-child(3n+2) {
	           background-color: #ADD8E6;
	       }

	       tr:nth-child(3n+3) {
	           background-color: #F0E68C;
	       }

	       input[type="text"] {
	           padding: 8px;
	           border-radius: 4px;
	           border: 1px solid #ddd;
	           width: 80px;
	           margin-right: 8px;
	       }

	       input[type="submit"] {
	           background-color: #4CAF50;
	           color: white;
	           padding: 8px 16px;
	           border: none;
	           border-radius: 4px;
	           cursor: pointer;
	       }

	       img {
	           max-width: 100px;
	           max-height: 100px;
	       }

	input[type=text]:focus {
	   outline: none;
	   border-color: #4CAF50;
	   box-shadow: 0 0 8px 0 rgba(76, 175, 80, 0.4);
	}
	button {
	   background-color: #4CAF50;
	   color: white;
	   border: none;
	   padding: 10px 20px;
	   text-align: center;
	   text-decoration: none;
	   display: inline-block;
	   font-size: 14px;
	   margin: 4px 2px;
	   cursor: pointer;
	   border-radius: 4px;
	}
	button:hover {
	   background-color: #3e8e41;
	}
	/* CSS code for the popup */
	.popup {
	   display: none;
	   position: fixed;
	   z-index: 1;
	   padding-top: 100px;
	   left: 0;
	   top: 0;
	   width: 100%;
	   height: 100%;
	   overflow: auto;
	   background-color: rgba(0,0,0,0.8);
	}
	.popup-content {
	   margin: auto;
	   display: block;
	   width: 80%;
	   max-width: 700px;
	}
	.close {
	   color: #ffffff;
	   float: right;
	   font-size: 28px;
	   font-weight: bold;
	}
	.close:hover,
	.close:focus {
	   color: #ffffff;
	   text-decoration: none;
	   cursor: pointer;
	}
	#popup-img {
	   width: 100%;
	   height: auto;
	}
	img {
	 width: 200px;
	 height: 200px;
	}
	img:hover {
  transform: scale(8,8);
  }
	</style>
    <?php include 'layouts/title-meta.php'; ?>
    <title>Woonstel foute</title>
    <?php include 'layouts/title-meta.php'; ?>

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

   

    <?php include 'layouts/head-css.php'; ?>
</head>
<body>
	<?php
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "kripto");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get all records from the table
$sql = "SELECT * FROM woonstel_foute";
$result = mysqli_query($conn, $sql);

// Handle edit and delete requests
if (isset($_SERVER['REQUEST_METHOD'])) {
    if (isset($_POST["edit"])) {
        // Update the value and description columns in the table
        $id = $_POST["id"];
        $description_name = "description_" . $id;

        $description = isset($_POST[$description_name]) ? $_POST[$description_name] : '';

        $stmt = mysqli_prepare($conn, "UPDATE woonstel_foute SET description=?, WHERE id=?");
        mysqli_stmt_bind_param($stmt, "ssi", $description, $id);
        if (mysqli_stmt_execute($stmt)) {
            // Show success message
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            // Show error message
            echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
        }
    } elseif (isset($_POST["delete"])) {
        // Delete the record from the table
        $id = $_POST["id"];
        $sql = "DELETE FROM woonstel_foute WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            // Show success message
            echo "<script>alert('Record deleted successfully');</script>";
        } else {
            // Show error message
            echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
        }
    }


    if (isset($_POST['edit'])) {
        $id = $_POST['id'];

        if (isset($_POST["description"])) {
            $description = $_POST["description"];
        } else {
            $description = "";
        }
        $sql = "UPDATE woonstel_foute SET description='$description', WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);

?>
    
    <?php include 'layouts/body.php'; ?>
	<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?><!--datatable css==   add this from 80-95-->
		<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"><!--datatable responsive css-->
		<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet"><?php include 'layouts/head-css.php'; ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js">
		</script> <?php include 'layouts/body.php'; ?> <!-- Begin page -->
		
			<?php include 'layouts/menu.php'; ?>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js">
			</script> 
<div class="main-content">

<div class="page-content">
	<div class="container-fluid">
				<div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Woonstel Foute</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Alle Woonstel Foute</a></li>
                                    <li class="breadcrumb-item active">Woonstel Foute</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
				
		<!-- HTML code for the table -->
		<table>
			<thead>
				<tr>
					<th>Naam</th>
					<th>Beskrywing</th>
					<th>Leer</th>
					<th>Datum op gelaai</th>
					<th>Verwder</th>
				</tr>
			</thead>
			<tbody>
				<?php
                    // Output the data from the table
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>". $row["description"] . "</td>";
                            echo "<td><img src='" . $row["image_location"] . "'></td>";
                            echo "<td>";
                            setlocale(LC_TIME, 'af');
                            echo strftime("%e %B %Y", strtotime($row['date_created']));
                            echo "</td>";
                            ;
                            echo "<td>";
                            echo "<form method='POST'>";

                            echo "<button type='submit' name='delete'>Verwyder</button>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>0 results</td></tr>";
                    }

?>
			</tbody>
		</table>
        </script> <?php include 'layouts/customizer.php'; ?> <!--add this also 153-154 before script-->
			<?php include 'layouts/vendor-scripts.php'; ?>
		<script>
		// Function to edit a record
		function editRecord(id) {
		// Get the row with the specified ID
		var row = document.getElementById("row_" + id);

		// Get the input elements in the row
		var descriptionInput = row.querySelector("input[name='description_" + id + "']");

		// Get the current values of the record
		var currentDescription = descriptionInput.value;

		// Show a popup with the current values
		var popup = document.getElementById("editPopup");
		var valueInputPopup = popup.querySelector("input[name='value']");
		var descriptionInputPopup = popup.querySelector("input[name='description']");

		descriptionInputPopup.value = currentDescription;

		popup.style.display = "block";

		// When the user clicks the save button, update the record in the database
		var saveButton = popup.querySelector("button[name='save']");
		saveButton.onclick = function() {
		  // Get the new values from the popup
		  var newDescription = descriptionInputPopup.value;

		  // Send a POST request to update the record in the database
		  var xhr = new XMLHttpRequest();
		  xhr.open("POST", "index.php", true);
		  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhr.onload = function() {
		    // Reload the page to show the updated record
		    location.reload();
		  };
		  xhr.send("id=" + id + "&edit=true&description_" + id + "=" + newDescription);

		  // Close the popup
		  popup.style.display = "none";
		};

		// When the user clicks the cancel button, close the popup
		var cancelButton = popup.querySelector("button[name='cancel']");
		cancelButton.onclick = function() {
		  popup.style.display = "none";
		};
		}

		// Function to delete a record
		function deleteRecord(id) {
		// Show a confirmation popup
		var popup = document.getElementById("deletePopup");
		popup.style.display = "block";

		// When the user clicks the confirm button, delete the record from the database
		var confirmButton = popup.querySelector("button[name='confirm']");
		confirmButton.onclick = function() {
		  // Send a POST request to delete the record from the database
		  var xhr = new XMLHttpRequest();
		  xhr.open("POST", "index.php", true);
		  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhr.onload = function() {
		    // Reload the page to show the updated table
		    location.reload();
		  };
		  xhr.send("id=" + id + "&delete=true");

		  // Close the popup
		  popup.style.display = "none";
		};

		// When the user clicks the cancel button, close the popup
		var cancelButton = popup.querySelector("button[name='cancel']");
		cancelButton.onclick = function() {
		  popup.style.display = "none";
		};
		}
		</script> <!-- Edit Popup -->
		<div class="popup" id="editPopup">
			<div class="popup-content">
				<h2>Edit Record</h2>
				<form>
					<input name="id" type="hidden"> <label for="description">Description:</label> <input name="description" type="text">
					<div class="button-container">
						<button name="save" type="button">Save</button> <button name="cancel" type="button">Cancel</button>
					</div>
				</form>
			</div>
		</div><!-- Delete Popup -->
		<div class="popup" id="deletePopup">
			<div class="popup-content">
				<h2>Delete Record</h2>
				<p>Are you sure you want to delete this record?</p>
				<div class="button-container">
					<button name="confirm" type="button">Yes</button> <button name="cancel" type="button">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
                    </div>
                </div>
</body>
</html>