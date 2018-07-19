<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="container">
	<div class="jumbotron text-center">
        <h2>Mini Car Inventory System<h2>
    </div>
    <div id="alerts" style="display:none;">
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#manufacturer">Add Manufacturer</a></li>
            <li><a href="#model" onclick="loadManufacturer()">Add Model</a></li>
            <li><a href="#inventory" onclick="loadInventories()">View Inventory</a></li>
        </ul>
        <div id="inventory">
            <table id="inventory-table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Serial Number</th>
                        <th>Manufacturer Name</th>
                        <th>Model Name</th>
                        <th>Count</th>
                    </tr>
                </thead>
            </table>
           



        </div>
        <div id="manufacturer">
            <form action="#">
                <div class="form-group">
                    <label for="manufacturer_name">Manufacturer:</label>
                    <input type="text" class="form-control" id="manufacturer_name" placeholder="Enter Manufacturer Name" name="manufacturer_name" required>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="addManufacture()">Add</button>
                </div>
            </form>
        </div>
        <div id="model">
            <form id="model-form">
                <div>
                    <div class="form-group">
                        <label for="model-name">Model Name:</label>
                        <input type="text" class="form-control input-sm" id="model-name">
                    <div>
                    <div class="form-group">
                        <label for="select-manufacturer">Select Manufacturer:</label>
                        <select class="form-control input-sm" id="select-manufacturer">
                        </select>
                    </div>
                
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="addModel()">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
    
</script>
<script src="js/manufacturer.js"></script>
<script src="js/add_model.js"></script>
<script src="js/inventory.js"></script>
</html>