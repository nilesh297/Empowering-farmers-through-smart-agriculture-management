<!DOCTYPE html>
<?php
session_start();
$username=$_SESSION['username'];
if($username==true)
{
}
else{
header('location:index.php');
}
?>
<html lang="en">
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Agriculture Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="farmsyles.css">
	<script>
	document.addEventListener('DOMContentLoaded', function() {
    const agriInputs = [
        { id: 1, name: 'Urea', type: 'Fertilizer', description: 'Nitrogen fertilizer', manufacturer: 'ABC Fertilizers', quantity: 100, unit: 'kg', expiryDate: '2025-12-31', price: 50, supplier: 'AgriCo' },
        { id: 2, name: 'Glyphosate', type: 'Pesticide', description: 'Herbicide', manufacturer: 'XYZ Chemicals', quantity: 50, unit: 'liters', expiryDate: '2023-06-30', price: 200, supplier: 'ChemPro' },
        { id: 3, name: 'Wheat Seeds', type: 'Seed', description: 'High yield variety', manufacturer: 'SeedMasters', quantity: 500, unit: 'packets', expiryDate: '2024-09-15', price: 10, supplier: 'SeedPro' },
        // Add more records as needed
    ];

    const tableBody = document.getElementById('agri-inputs-table');
    agriInputs.forEach(input => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${input.id}</td>
            <td>${input.name}</td>
            <td>${input.type}</td>
            <td>${input.description}</td>
            <td>${input.manufacturer}</td>
            <td>${input.quantity}</td>
            <td>${input.unit}</td>
            <td>${input.expiryDate}</td>
            <td>${input.price}</td>
            <td>${input.supplier}</td>
        `;
        tableBody.appendChild(row);
    });

    const sections = document.querySelectorAll('.content-section');
    const subSections = document.querySelectorAll('.content-section .content-section');

    window.showSection = function(sectionId) {
        sections.forEach(section => {
            section.classList.remove('active');
            if (section.id === sectionId) {
                section.classList.add('active');
            }
        });
    };

    window.showSubSection = function(subSectionId) {
        subSections.forEach(subSection => {
            subSection.classList.remove('active');
            if (subSection.id === subSectionId) {
                subSection.classList.add('active');
            }
        });
    };

    window.confirmLogout = function() {
        // Implement logout logic here
        alert('Logged out successfully!');
    };

    window.setLanguage = function(language) {
        const elements = document.querySelectorAll('[data-en]');
        elements.forEach(element => {
            const text = element.getAttribute(`data-${language}`);
            if (text) {
                element.textContent = text;
            }
        });
    };

    // Set default language to English
    setLanguage('en');
});

	</script>
</head>
<body style="background-color:#E8E8E8; ">
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>
    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	
        <a class="navbar-brand" href="#">Smart Agriculture</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showSection('dashboard')" data-en="Dashboard" data-mr="डॅशबोर्ड">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showSection('farmManagement')" data-en="Farm Management" data-mr="शेती व्यवस्थापन">Farm Management</a>
                </li>-->
				<ul>
                
<li> <a class="" href="farmerhome.php"> Home </a> </li>
<li> <a class="active" href="#farmhome"> Farm Mangement </a> </li>
<li> <a class="" href="farmerregister.php"> Register Product</a> </li>
<li> <a class="" href="farmerrate.php"> Current Rates </a> </li>
<li> <a class="" href="farmercontact.php"> Contact us </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>

				
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#" onclick="setLanguage('en')">English</a>
                        <a class="dropdown-item" href="#" onclick="setLanguage('mr')">Marathi</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Dashboard Section -->
        <div id="dashboard" class="content-section active">
            <h1 class="text-center" data-en="Welcome, Farmer!" data-mr="स्वागत आहे, शेतकरी!">Welcome, Farmer!</h1>
            <div class="dashboard-overview mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" data-en="Farm Status" data-mr="शेतीची स्थिती">Farm Status</h5>
                                <p class="card-text" data-en="Healthy" data-mr="संपूर्ण">Healthy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" data-en="Weather Forecast" data-mr="हवामान अंदाज">Weather Forecast</h5>
                                <p class="card-text" data-en="Sunny, 25°C" data-mr="सूर्यप्रकाश, २५°C">Sunny, 25°C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" data-en="Upcoming Tasks" data-mr="आगामी कामे">Upcoming Tasks</h5>
                                <p class="card-text" data-en="Water crops, Fertilize field" data-mr="पिकांना पाणी द्या, क्षेत्राला खते द्या">Water crops, Fertilize field</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2 data-en="AgriInputs" data-mr="कृषीइनपुट्स">AgriInputs</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th data-en="ID" data-mr="आयडी">ID</th>
                            <th data-en="Name" data-mr="नाव">Name</th>
                            <th data-en="Type" data-mr="प्रकार">Type</th>
                            <th data-en="Description" data-mr="वर्णन">Description</th>
                            <th data-en="Manufacturer" data-mr="उत्पादक">Manufacturer</th>
                            <th data-en="Quantity" data-mr="प्रमाण">Quantity</th>
                            <th data-en="Unit" data-mr="युनिट">Unit</th>
                            <th data-en="Expiry Date" data-mr="कालबाह्यता तारीख">Expiry Date</th>
                            <th data-en="Price" data-mr="किंमत">Price</th>
                            <th data-en="Supplier" data-mr="पुरवठादार">Supplier</th>
                        </tr>
                    </thead>
                    <tbody id="agri-inputs-table">
                        <!-- JavaScript will populate this table -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Farm Management Section -->
        <div id="farmManagement" class="content-section">
            <h1 class="text-center" data-en="Farm Management" data-mr="शेती व्यवस्थापन">Farm Management</h1>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-en="Farm Profile" data-mr="शेती प्रोफाइल">Farm Profile</h5>
                            <p class="card-text" data-en="Manage your farm details and profile." data-mr="आपले शेत तपशील आणि प्रोफाइल व्यवस्थापित करा.">Manage your farm details and profile.</p>
                            <a href="#" class="btn btn-primary" data-en="Go to Farm Profile" data-mr="शेती प्रोफाइलला जा" onclick="showSubSection('farmProfile')">Go to Farm Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-en="Crop Management" data-mr="पीक व्यवस्थापन">Crop Management</h5>
                            <p class="card-text" data-en="Keep track of your crops and schedules." data-mr="आपल्या पिकांचे आणि वेळापत्रकांचे रेकॉर्ड ठेवा.">Keep track of your crops and schedules.</p>
                            <a href="#" class="btn btn-primary" data-en="Go to Crop Management" data-mr="पीक व्यवस्थापनला जा" onclick="showSubSection('cropManagement')">Go to Crop Management</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-en="Livestock Management" data-mr="पशुधन व्यवस्थापन">Livestock Management</h5>
                            <p class="card-text" data-en="Monitor your livestock and health records." data-mr="आपल्या पशुधन आणि आरोग्याच्या नोंदींचे निरीक्षण करा.">Monitor your livestock and health records.</p>
                            <a href="#" class="btn btn-primary" data-en="Go to Livestock Management" data-mr="पशुधन व्यवस्थापनला जा" onclick="showSubSection('livestockManagement')">Go to Livestock Management</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-en="Equipment Management" data-mr="उपकरण व्यवस्थापन">Equipment Management</h5>
                            <p class="card-text" data-en="Maintain and track farm equipment." data-mr="शेती उपकरणे देखभाल करा आणि ट्रॅक करा.">Maintain and track farm equipment.</p>
                            <a href="#" class="btn btn-primary" data-en="Go to Equipment Management" data-mr="उपकरण व्यवस्थापनला जा" onclick="showSubSection('equipmentManagement')">Go to Equipment Management</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" data-en="Field Monitoring" data-mr="फील्ड निरीक्षण">Field Monitoring</h5>
                            <p class="card-text" data-en="Monitor field conditions and activities." data-mr="फील्ड स्थिती आणि क्रियाकलापांचे निरीक्षण करा.">Monitor field conditions and activities.</p>
                            <a href="#" class="btn btn-primary" data-en="Go to Field Monitoring" data-mr="फील्ड निरीक्षणला जा" onclick="showSubSection('fieldMonitoring')">Go to Field Monitoring</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            

        

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
	
</body>
</div>

<div class="footer">
<div id="leftfooter">
<p style="font-size:19px"> Our Main office <br> </p>
<p style="font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>
</div>

<div id="rightfooter">
				<h2 style="color:white;font-size:18px">Follow us on Social Media</h2>
					<P style="color:white;font-size:15px">Facebook/agriGear</p>
					<p style="color:white;font-size:15px">Instagram/@agriGear</p>
			</div>
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px"> All Copyright reserved By AgriGear Project team </p></center> </div>
</div>
</html>
